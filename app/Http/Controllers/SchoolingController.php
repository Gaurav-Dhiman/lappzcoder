<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 7/11/17
 * Time: 3:18 AM
 */

namespace App\Http\Controllers;


use App\Cl;
use App\Http\Requests;
use FFMpeg\FFMpeg;
use FFMpeg\Coordinate\TimeCode;
use Illuminate\Http\Request;

class SchoolingController
{


    public function classes(Request $request){
        $classes = Cl::all();
        return $request->expectsJson() ? response()->json($classes) : view('front-end.classes', compact('classes'));
    }


    public function subjects(Request $request, $classTitle){
        $subjects = Cl::where('title', $classTitle)->firstOrFail()->subjects;
        $response = compact('subjects', 'classTitle');
        return $request->expectsJson() ? response()->json($response) : view('front-end.subjects', $response);
    }

    public function chapters(Request $request, $classTitle, $subjectTitle){
        $chapters = Cl::where('title', $classTitle)->firstOrFail()->subjects()->where('title', $subjectTitle)->firstOrFail()->chapters;
        $response = compact('chapters', 'classTitle', 'subjectTitle');
        return $request->expectsJson() ? response()->json($response) : view('front-end.chapters', $response);
    }

    public function tutorials(Request $request, $classTitle, $subjectTitle, $chapterName){
        //dd($classTitle, $subjectTitle, $chapterName);
        $videosPath = public_path("uploads/videos/schooling/$classTitle/$subjectTitle/$chapterName");
        $videos = [];
        if(file_exists($videosPath)){
            $videos = glob($videosPath.'/*.mp4');
        }
        $videos = $this->get_videos($videos);
        $response = compact('videos', 'classTitle', 'subjectTitle', 'chapterName', 'videosPath');
        return $request->expectsJson() ? response()->json($response) : view('front-end.tutorials', $response);
    }

    public function video(Request $request, $classTitle, $subjectTitle, $chapterName, $video){
        $allowed = False;
        if(\Auth::user()->class == $classTitle){
            $allowed = True;
        }
        $videosPath = public_path("uploads/videos/schooling/$classTitle/$subjectTitle/$chapterName");
        $video = [$videosPath.'/'.$video];
        $related_videos = [];
        if(file_exists($videosPath)){
            $related_videos = array_diff(glob($videosPath.'/*.mp4'), $video);
        }
        // Get all Related Videos
        $related_videos = $this->get_videos($related_videos);

        // Get Main Video Details
        $video = $this->get_videos($video)[0];
        $response = compact('video','related_videos', 'classTitle', 'subjectTitle', 'chapterName', 'videosPath', 'allowed');
        return $request->expectsJson() ? response()->json($response) :  view('front-end.video', $response);
    }


    private function get_videos($videos = []){
        foreach($videos as $k=>$v){
            $filePath = $v;
            $v = explode('.', $v);
            $lastSlashPos = strrpos($v[0],'/');
            $file_name = substr($v[0], $lastSlashPos+ 1);
            $videoFolderPath = substr($v[0],0, $lastSlashPos + 1);
            $ext = $v[1];
            if(!file_exists($videoFolderPath."$file_name.jpg")){
                $ffmpeg = FFMpeg::create();
                $video = $ffmpeg->open($filePath);
                $video->frame(
                    TimeCode::fromSeconds(18)
                )->save($videoFolderPath."$file_name.jpg");
            }

            $file_location_url = asset(substr($videoFolderPath,strpos($videoFolderPath,'uploads/'))).'/';

            $videos[$k] = [
                'file_path' => $file_location_url,
                'file_name' => $file_name.'.'.$ext,
                'file_ext' => $ext,
                'thumb_img_path'=> $file_location_url."$file_name.jpg",
                'title' => ucfirst(str_replace('_',' ',$file_name))
            ];
        }
        return $videos;
    }
}