<?php

namespace App\Http\Controllers\SocialPublisherPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SocialPublisherPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function forSocialPublishers()
    {
        return view ('pages.socialpublishers.forsocialpublishers');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function getstartedasSocialPublisher()
    {
       return view ('pages.socialpublishers.getstartedsocialpublishers');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
}
