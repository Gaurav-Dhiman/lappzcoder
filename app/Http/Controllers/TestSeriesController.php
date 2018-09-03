<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 7/11/17
 * Time: 3:18 AM
 */

namespace App\Http\Controllers;


use App\Test_series;
use App\Http\Requests;
use FFMpeg\FFMpeg;
use FFMpeg\Coordinate\TimeCode;
use Illuminate\Http\Request;

class TestSeriesController{

    public function list(Request $request){
        $test_series = Test_series::all();
        return $request->expectsJson() ? response()->json($test_series) : view('front-end.test_series', compact('test_series'));
    }

    public function detail(Request $request, $test_series_title){
        //dd($classTitle, $subjectTitle, $chapterName);
        $test_series_path = public_path("uploads/pdf/test_series/$test_series_title");
        $test_series = [];
        if(file_exists($test_series_path)){
            $test_series = glob($test_series_path.'/*.pdf');
        }
        $test_series = $this->get_pdf($test_series);
        // dd($test_series);
        $response = compact('test_series', 'test_series_title');
        return $request->expectsJson() ? response()->json($response) : view('front-end.test_series_detail', $response);
    }

    public function download(Request $request, $test_series, $pdf_title){
        return response()->download(public_path("uploads/pdf/test_series/$test_series/$pdf_title"), $pdf_title);
    }

    private function get_pdf($pdfs = []){
        foreach($pdfs as $k=>$v){
            $filePath = $v;
            $v = explode('.', $v);
            $lastSlashPos = strrpos($v[0],'/');
            $file_name = substr($v[0], $lastSlashPos+ 1);
            $pdfFolderPath = substr($v[0],0, $lastSlashPos + 1);
            if (!isset($v[1])){
                abort(404);
            }
            $ext = $v[1];

            $file_location_url = asset(substr($pdfFolderPath,strpos($pdfFolderPath,'uploads/'))).'/';

            $pdfs[$k] = [
                'file_path' => $file_location_url,
                'file_name' => $file_name.'.'.$ext,
                'file_ext' => $ext,
                'title' => ucfirst(str_replace('_',' ',$file_name))
            ];
        }
        return $pdfs;
    }

}
