<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Offer;
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'location' => 'required',
            'house_type' => 'required',
            'price' => 'required',
            'price_length' => 'required',
            'relationship' => 'required',
            'description' => 'required',
            'contact' => 'required',
            'payment_code' => 'required',
            'house_image' => '',
        ]);

        $house_image = $request->file('house_image')->store('houses', 'public');

        $offer = Offer::create([
            'title' => $request->input('title'),
//            'slug' => SlugService::createSlug(Post::class, 'slug', $request->title),
            'location' => $request->input('location'),
            'house_type' => $request->input('house_type'),
            'price' => $request->input('price'),
            'price_length' => $request->input('price_length'),
            'relationship' => $request->input('relationship'),
            'contact' => $request->input('contact'),
            'description' => $request->input('description'),
            'payment_code' => $request->input('payment_code'),
            'house_image' => $house_image,
            'user_id' => auth()->user()->id,
        ]);

        return $offer;
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $offer = Offer::where('id', $id);
        return view('seller.show')->with('offer', $id);
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
