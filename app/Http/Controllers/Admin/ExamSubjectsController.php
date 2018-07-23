<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Exam_subject;
use App\Competetive_exam;
use Illuminate\Http\Request;
use Session;

class ExamSubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $subjects = Exam_subject::where('title', 'LIKE', "%$keyword%")
				->orWhere('competetive_exam_id', 'LIKE', "%$keyword%")
                ->with('cls')
				->paginate($perPage);
        } else {
            $subjects = Exam_subject::with('exam')->paginate($perPage);
        }
        //dd($subjects);

        return view('admin.exam_subjects.index', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $exams = Competetive_exam::all()->pluck('title','id');
        return view('admin.exam_subjects.create', compact('exams'));
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
			'competetive_exam_id' => 'required'
		]);
        $requestData = $request->all();
        
        Exam_subject::create($requestData);

        Session::flash('flash_message', 'Subject added!');

        return redirect('admin/exam_subjects');
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
        $subject = Exam_subject::with('exam')->findOrFail($id);
        return view('admin.exam_subjects.show', compact('subject', 'classes'));
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
        $subject = Exam_subject::findOrFail($id);
        $exams = Competetive_exam::all()->pluck('title','id');
        return view('admin.exam_subjects.edit', compact('subject','exams'));
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
			'competetive_exam_id' => 'required'
		]);
        $requestData = $request->all();
        
        $subject = Exam_subject::findOrFail($id);
        $subject->update($requestData);

        Session::flash('flash_message', 'Subject updated!');

        return redirect('admin/exam_subjects');
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
        Exam_subject::destroy($id);

        Session::flash('flash_message', 'Subject deleted!');

        return redirect('admin/exam_subjects');
    }
}
