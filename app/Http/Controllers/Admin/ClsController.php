<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Cl;
use Illuminate\Http\Request;
use Session;

class ClsController extends Controller
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
            $cls = Cl::where('title', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $cls = Cl::paginate($perPage);
        }

        return view('admin.cls.index', compact('cls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.cls.create');
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
        
        $requestData = $request->all();
        
        Cl::create($requestData);

        Session::flash('flash_message', 'Cl added!');

        return redirect('admin/cls');
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
        $cl = Cl::findOrFail($id);

        return view('admin.cls.show', compact('cl'));
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
        $cl = Cl::findOrFail($id);

        return view('admin.cls.edit', compact('cl'));
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
        
        $requestData = $request->all();
        
        $cl = Cl::findOrFail($id);
        $cl->update($requestData);

        Session::flash('flash_message', 'Cl updated!');

        return redirect('admin/cls');
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
        Cl::destroy($id);

        Session::flash('flash_message', 'Cl deleted!');

        return redirect('admin/cls');
    }
}
