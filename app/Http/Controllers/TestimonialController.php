<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonial = Testimonial::all();
        return view('testimonial.index', ['testimonial' => $testimonial]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'testi' => 'required'
        ]);

        $testimonial = new Testimonial();
        $testimonial->name = $request->input('name');
        $testimonial->testi = $request->input('testi');
        $testimonial->save();

        return redirect('/admin/testimonial/create')->with('success', 'Data created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
        $testimonial = Testimonial::find($id);
        return view('testimonial.view', ['testimonial' => $testimonial]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateForm(Request $request, $id)
    {
        $testimonial = Testimonial::find($id);
        return view('testimonial.update', ['testimonial' => $testimonial]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required|max:255',
            'testi' => 'required|max:255'
        ]);

        $testimonial = Testimonial::find($request->input('id'));
        $testimonial->name = $request->input('name');
        $testimonial->testi = $request->input('testi');
        $testimonial->save();

        return redirect("/admin/testimonial/update-form/{$testimonial->id}")->with('success', 'Data updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $id = $request->input('id');
        $testimonial = Testimonial::find($id);
        Testimonial::destroy($request->input('id'));
    }
}
