<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Cl;
use App\Http\Requests;
use App\Testimonial;
use Illuminate\Http\Request;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $cmd = 'find '.public_path('uploads/videos/').' -path *.mp4 -type f | sort -rn | head -n 10';
        $latestVideos = explode("\n", substr(shell_exec($cmd), 0, -1));
        $latestVideos = $this->get_videos($latestVideos);
        $classes = Cl::all();
        $testimonials = Testimonial::all();
        $response = compact('classes', 'testimonials', 'latestVideos');
        return $request->expectsJson() ? response()->json($response) : view('front-end.home', $response);
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
            $video_page_link = str_replace("uploads/videos/", "", $file_location_url).$file_name.'.'.$ext;
            $video_page_link = str_replace("schooling", "class", $video_page_link);

            $videos[$k] = [
                'file_path' => $file_location_url,
                'file_name' => $file_name.'.'.$ext,
                'file_ext' => $ext,
                'thumb_img_path'=> $file_location_url."$file_name.jpg",
                'title' => ucfirst(str_replace('_',' ',$file_name)),
                'video_link' =>$video_page_link
            ];
        }
        return $videos;
    }
}