<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Testimonial;
use Illuminate\Http\Request;
use Session;

class TestimonialsController extends Controller
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
            $testimonials = Testimonial::where('name', 'LIKE', "%$keyword%")
				->orWhere('description', 'LIKE', "%$keyword%")
				->orWhere('image', 'LIKE', "%$keyword%")
				->orWhere('designation', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $testimonials = Testimonial::paginate($perPage);
        }

        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.testimonials.create');
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
			'name' => 'required',
			'description' => 'required',
			'image' => 'required',
			'designation' => 'required'
		]);

        $path = $request->image->store('uploads', 'public');

        $requestData = $request->all();
        $requestData['image'] = $path;
        Testimonial::create($requestData);

        Session::flash('flash_message', 'Testimonial added!');

        return redirect('admin/testimonials');
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
        $testimonial = Testimonial::findOrFail($id);

        return view('admin.testimonials.show', compact('testimonial'));
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
        $testimonial = Testimonial::findOrFail($id);

        return view('admin.testimonials.edit', compact('testimonial'));
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
			'name' => 'required',
			'description' => 'required',
			'designation' => 'required'
		]);
        $requestData = $request->all();
        
        $testimonial = Testimonial::findOrFail($id);
        if($request->hasFile('image')){
            $path = $request->image->store('uploads', 'public');
            try{
                unlink(storage_path('app/public/'.$testimonial->image));
            }catch (\ErrorException $exception){}
            $requestData['image'] = $path;
        }
        $testimonial->update($requestData);

        Session::flash('flash_message', 'Testimonial updated!');

        return redirect('admin/testimonials');
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
        Testimonial::destroy($id);

        Session::flash('flash_message', 'Testimonial deleted!');

        return redirect('admin/testimonials');
    }
}
