<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Test_series;
use Illuminate\Http\Request;
use Session;

class Test_seriesController extends Controller
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
            $test_series = Test_series::where('title', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $test_series = Test_series::paginate($perPage);
        }

        return view('admin.test_series.index', compact('test_series'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.test_series.create');
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
        
        Test_series::create($requestData);

        Session::flash('flash_message', 'New Test Series created successfully');

        return redirect('admin/test_series');
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
        $test_series = Test_series::findOrFail($id);

        return view('admin.test_series.show', compact('test_series'));
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
        $test_series = Test_series::findOrFail($id);

        return view('admin.test_series.edit', compact('test_series'));
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
        
        $test_series = Test_series::findOrFail($id);
        $test_series->update($requestData);

        Session::flash('flash_message', 'Test Series updated successfully');

        return redirect('admin/test_series');
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
        Test_series::destroy($id);

        Session::flash('flash_message', 'Test Series deleted successfully');

        return redirect('admin/test_series');
    }
}
