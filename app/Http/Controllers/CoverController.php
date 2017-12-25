<?php

namespace App\Http\Controllers;

use App\Cover;
use App\Device;
use App\Material;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class CoverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $covers = Cover::all();

        return view('admin.covers.index', compact('covers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $devices = Device::all();
        $materials = Material::all();

        return view('admin.covers.add', compact('devices', 'materials'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $cover = new Cover();
        $cover->name = $request->name;
        $cover->tag = $request->tag;
        $cover->material_id = $request->material;

        $image = Image::make($request->image)->save('public/images/' . $request->tag . '-' . $request->material);
        dd($image);
        return redirect()->action('CoverController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cover  $cover
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cover = Cover::findOrFail($id);
//        dd($cover);
        return view('admin.covers.view', compact('cover'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cover  $cover
     * @return \Illuminate\Http\Response
     */
    public function edit(Cover $cover)
    {

        return view('admin.covers.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cover  $cover
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cover $cover)
    {

        return redirect()->action('CoverController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cover  $cover
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cover $cover)
    {

        return redirect()->action('CoverController@index');
    }
}
