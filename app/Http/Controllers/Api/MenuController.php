<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=[];
        $data['salads']=Menu::where('category', 'salads')->get();
        $data['firtsdishes']=Menu::where('category', 'firtsdishes')->get();
        $data['maindishes']=Menu::where('category', 'maindishes')->get();
        $data['samsa']=Menu::where('category', 'samsa')->get();
        $data['grill']=Menu::where('category', 'grill')->get();
        $data['drinks']=Menu::where('category', 'drinks')->get();
        $data['kebab']=Menu::where('category', 'kebab')->get();

        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        //
    }
}
