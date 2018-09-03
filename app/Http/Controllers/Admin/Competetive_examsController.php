<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Competetive_exam;
use Illuminate\Http\Request;
use Session;

class Competetive_examsController extends Controller
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
            $competetive_exams = Competetive_exam::where('title', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $competetive_exams = Competetive_exam::paginate($perPage);
        }

        return view('admin.competetive_exams.index', compact('competetive_exams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.competetive_exams.create');
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
			'title' => 'required'
		]);
        $requestData = $request->all();
        
        Competetive_exam::create($requestData);

        Session::flash('flash_message', 'A new Competetive Exam has been created sucessfully');

        return redirect('admin/competetive_exams');
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
        $competetive_exam = Competetive_exam::findOrFail($id);

        return view('admin.competetive_exams.show', compact('competetive_exam'));
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
        $competetive_exam = Competetive_exam::findOrFail($id);

        return view('admin.competetive_exams.edit', compact('competetive_exam'));
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
			'title' => 'required'
		]);
        $requestData = $request->all();
        
        $competetive_exam = Competetive_exam::findOrFail($id);
        $competetive_exam->update($requestData);

        Session::flash('flash_message', 'Competetive Exam updated sucessfully');

        return redirect('admin/competetive_exams');
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
        Competetive_exam::destroy($id);

        Session::flash('flash_message', 'Competetive Exam deleted sucessfully');

        return redirect('admin/competetive_exams');
    }
}
