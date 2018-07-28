<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 7/11/17
 * Time: 3:18 AM
 */

namespace App\Http\Controllers;


use App\Competetive_exam;
use App\Exam_subject;
use App\Http\Requests;
use FFMpeg\FFMpeg;
use FFMpeg\Coordinate\TimeCode;
use Illuminate\Http\Request;

class ExamsController{

    public function exams(Request $request){
        $exams = Competetive_exam::all();
        return $request->expectsJson() ? response()->json($exams) : view('front-end.exams', compact('exams'));
    }

    public function subjects(Request $request, $examTitle){
        $subjects = Competetive_exam::where('title', $examTitle)->firstOrFail()->subjects;
        return $request->expectsJson() ? response()->json($subjects) : view('front-end.exam_subjects', compact('subjects', 'examTitle'));
    }

    public function chapters(Request $request, $examTitle, $subjectTitle){
        $chapters = Competetive_exam::where('title', $examTitle)->firstOrFail()->subjects()->where('title', $subjectTitle)->firstOrFail()->chapters;
        $response = compact('chapters', 'examTitle', 'subjectTitle');
        return $request->expectsJson() ? response()->json($response) : view('front-end.exam_chapters', $response);
    }

    public function videos(Request $request, $examTitle , $subjectTitle, $chapterName){
        //dd($classTitle, $subjectTitle, $chapterName);
        $videosPath = public_path("uploads/videos/competative/$examTitle/$subjectTitle/$chapterName");
        $videos = [];
        if(file_exists($videosPath)){
            $videos = glob($videosPath.'/*.mp4');
        }
        $videos = $this->get_videos($videos);
        $response = compact('videos', 'examTitle', 'subjectTitle', 'chapterName');
        return $request->expectsJson() ? response()->json($response) : view('front-end.exam_videos', $response);
    }
    
    public function video(Request $request, $examName, $subjectTitle, $chapterName, $video){
        $allowed = True;
        $videosPath = public_path("uploads/videos/competative/$examName/$subjectTitle/$chapterName");
        $video = [$videosPath.'/'.$video];
        $videos = [];
        if(file_exists($videosPath)){
            $videos = array_diff(glob($videosPath.'/*.mp4'), $video);
        }
        // Get all Related Videos
        $videos = $this->get_videos($videos);
        // Get Main Video Details
        $video = $this->get_videos($video)[0];
        return view('front-end.exam_video_detail', compact('video','videos', 'examName', 'subjectTitle', 'chapterName', 'videosPath', 'allowed'));
    }

    private function get_videos($videos = []){
        foreach($videos as $k=>$v){
            $filePath = $v;
            $v = explode('.', $v);
            $lastSlashPos = strrpos($v[0],'/');
            $file_name = substr($v[0], $lastSlashPos+ 1);
            $videoFolderPath = substr($v[0],0, $lastSlashPos + 1);
            if (!isset($v[1])){
                abort(404);
            }
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
