<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Chapter;
use App\Subject;
use Illuminate\Http\Request;
use Session;

class ChaptersController extends Controller
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
            $chapters = Chapter::where('title', 'LIKE', "%$keyword%")
                ->orWhereHas('subject', function ($query) use ($keyword){
                    $query->where('title', 'LIKE', "%$keyword%");
                })
				->with(['subject' => function($query){
                    $query->with('cls');
                }])
				->paginate($perPage);
        } else {
            $chapters = Chapter::with(['subject' => function($query){
                $query->with('cls');
            }])->paginate($perPage);
        }

        //dd($chapters->toArray());

        return view('admin.chapters.index', compact('chapters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $subjects = Subject::with(['cls'=> function($query){
           $query->orderBy('title','asc');
        }]);
        //dd($subjects->get()->toArray());
        $subjectList = [];
        foreach ($subjects->get() as $sub){
            $subjectList[$sub->id] = $sub->cls->title." - ".$sub->title;
        }

        return view('admin.chapters.create', compact('subjectList'));
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
			'subject_id' => 'required'
		]);
        $requestData = $request->all();
        
        Chapter::create($requestData);

        Session::flash('flash_message', 'Chapter added!');

        return redirect('admin/chapters');
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
        $chapter = Chapter::with(['subject' => function($query){
            $query->with('cls');
        }])->findOrFail($id);
        return view('admin.chapters.show', compact('chapter'));
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
        $chapter = Chapter::findOrFail($id);
        $subjects = Subject::with(['cls'=> function($query){
            $query->orderBy('title','asc');
        }]);
        $subjectList = [];
        foreach ($subjects->get() as $sub){
            $subjectList[$sub->id] = $sub->cls->title." - ".$sub->title;
        }
        return view('admin.chapters.edit', compact('chapter', 'subjectList'));
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
			'subject_id' => 'required'
		]);
        $requestData = $request->all();
        
        $chapter = Chapter::findOrFail($id);
        $chapter->update($requestData);

        Session::flash('flash_message', 'Chapter updated!');

        return redirect('admin/chapters');
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
        Chapter::destroy($id);

        Session::flash('flash_message', 'Chapter deleted!');

        return redirect('admin/chapters');
    }
}
