<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Exam_chapter;
use App\Exam_subject;
use Illuminate\Http\Request;
use Session;

class ExamChaptersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $chapters = Exam_chapter::where('title', 'LIKE', "%$keyword%")
                ->orWhereHas('subject', function ($query) use ($keyword){
                    $query->where('title', 'LIKE', "%$keyword%");
                })
				->with(['subject' => function($query){
                    $query->with('exam');
                }])
				->paginate($perPage);
        } else {
            $chapters = Exam_chapter::with(['subject' => function($query){
                $query->with('exam');
            }])->paginate($perPage);
        }

        //dd($chapters->toArray());

        return view('admin.exam_chapters.index', compact('chapters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $subjects = Exam_subject::with(['exam'=> function($query){
           $query->orderBy('title','asc');
        }]);
        //dd($subjects->get()->toArray());
        $subjectList = [];
        foreach ($subjects->get() as $sub){
            $subjectList[$sub->id] = $sub->exam->title." - ".$sub->title;
        }

        return view('admin.exam_chapters.create', compact('subjectList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'title' => 'required',
			'exam_subject_id' => 'required'
		]);
        $requestData = $request->all();
        
        Exam_chapter::create($requestData);

        Session::flash('flash_message', 'A new Chapter has been created successfully !');

        return redirect('admin/exam_chapters');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $chapter = Exam_chapter::with(['subject' => function($query){
            $query->with('exam');
        }])->findOrFail($id);
        return view('admin.exam_chapters.show', compact('chapter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $chapter = Exam_chapter::findOrFail($id);
        $subjects = Exam_subject::with(['exam'=> function($query){
            $query->orderBy('title','asc');
        }]);
        $subjectList = [];
        foreach ($subjects->get() as $sub){
            $subjectList[$sub->id] = $sub->exam->title." - ".$sub->title;
        }
        return view('admin.exam_chapters.edit', compact('chapter', 'subjectList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        $this->validate($request, [
			'title' => 'required',
			'exam_subject_id' => 'required'
		]);
        $requestData = $request->all();
        
        $chapter = Exam_chapter::findOrFail($id);
        $chapter->update($requestData);

        Session::flash('flash_message', 'Chapter updated successfully');

        return redirect('admin/exam_chapters');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Exam_chapter::destroy($id);

        Session::flash('flash_message', 'Chapter deleted successfully');

        return redirect('admin/exam_chapters');
    }
}
