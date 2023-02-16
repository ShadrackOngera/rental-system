<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {

        return view('seller.create');
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
            'title' => 'required',
            'location' => 'required',
            'size' => 'required',
            'price' => ['required','min:1'],
            'type' => 'required',
            'deed' => 'required',
            'deed_img' => '',
            'land_img' => '',
            'description' => 'required',
            'contact' => 'required',
            'code' => 'required',
        ]);

        $deed_path = $request->file('deed_img')->store('title-deeds', 'public');
        $land_path = $request->file('land_img')->store('land-images', 'public');

        $post = Post::create([
            'title' => $request->input('title'),
            'slug' => SlugService::createSlug(Post::class, 'slug', $request->title),
            'location' => $request->input('location'),
            'size' => $request->input('size'),
            'price' => $request->input('price'),
            'type' => $request->input('type'),
            'deed' => $request->input('deed'),
            'deed_img' => $deed_path,
            'land_img' => $land_path,
            'contact' => $request->input('contact'),
            'description' => $request->input('description'),
            'code' => $request->input('code'),
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
