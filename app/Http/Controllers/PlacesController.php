<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Place;
use App\Traits\Common;

class PlacesController extends Controller
{
    use Common;
    private $columns =[
        'placeTitle',
        'placeImage',
        'placeMinPrice',
        'placeMaxPrice',
        'placeDescription',
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $places = Place::get();
        return view('places', compact('places'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("addPlace");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages=[
            'placeTitle.required' => 'Title is required',
            'placeImage.required' => 'Image is required',
            'placeMinPrice.required' => 'Minimum Price is required',
            'placeMaxPrice.required' => 'Maximum Price is required',
            'placeDescription.required' => 'Should be text',
        ];

        $data=$request->validate([
            'placeTitle' => 'required|string',
            'placeImage' => 'required|mimes:png,jpg,jpeg|max:2048',
            'placeMinPrice' => 'required|integer',
            'placeMaxPrice' => 'required|integer',
            'placeDescription' => 'required|string|max:100',
        ], $messages );

        $fileName = $this->uploadFile($request->placeImage, 'assets/images');
        $data['placeImage'] = $fileName;

        Place::create($data);
        return 'Place Stored Successfully';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function place()
    {
        return view('place');
    }
    public function blog1()
    {
        return view('blog1');
    }
    public function places()
    {
        return view('places');
    }
}
