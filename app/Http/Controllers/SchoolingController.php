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

class SchoolingController
{


    public function classes(){
        $classes = Cl::all();
        return view('front-end.classes', compact('classes'));
    }


    public function subjects($classTitle){
        $subjects = Cl::where('title', $classTitle)->firstOrFail()->subjects;
        return view('front-end.subjects', compact('subjects', 'classTitle'));
    }

    public function chapters($classTitle, $subjectTitle){
        $chapters = Cl::where('title', $classTitle)->firstOrFail()->subjects()->where('title', $subjectTitle)->firstOrFail()->chapters;
        return view('front-end.chapters', compact('chapters', 'classTitle', 'subjectTitle'));
    }

    public function tutorials($classTitle, $subjectTitle, $chapterName){
        //dd($classTitle, $subjectTitle, $chapterName);
        $videosPath = public_path("uploads/videos/schooling/$classTitle/$subjectTitle/$chapterName");
        $videos = [];
        if(file_exists($videosPath)){
            $videos = glob($videosPath.'/*.mp4');
        }
        $videos = $this->get_videos($videos);
        return view('front-end.tutorials', compact('videos', 'classTitle', 'subjectTitle', 'chapterName', 'videosPath'));
    }

    public function video($classTitle, $subjectTitle, $chapterName, $video){
        $videosPath = public_path("uploads/videos/schooling/$classTitle/$subjectTitle/$chapterName");
        $video = [$videosPath.'/'.$video];
        $videos = [];
        if(file_exists($videosPath)){
            $videos = array_diff(glob($videosPath.'/*.mp4'), $video);
        }
        // Get all Related Videos
        $videos = $this->get_videos($videos);

        // Get Main Video Details
        $video = $this->get_videos($video)[0];
        return view('front-end.video', compact('video','videos', 'classTitle', 'subjectTitle', 'chapterName', 'videosPath'));
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
                    TimeCode::fromSeconds(2)
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