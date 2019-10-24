<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\App;
use App\Category;

class AppController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $app = new App;
        $categories = Category::orderBy('name')
            ->get()
            ->pluck('name', 'id')
            ->all();
        return view('form', compact('app', 'categories'));
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
            'title'=>'required',
            'category_id'=>'required',
        ]);
        $app = new App;
        $app->title = $request->get('title');
        $app->category_id = $request->get('category_id');
        $app->rating = $request->get('rating');
        $app->save();
        return 'Saved';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $app = App::find($id);
        $app->title = $request->input('title'); 
        $app->category = $request->input('category'); 
        $app->rating = $request->input('rating');
        return 'Succesfully updated';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $app = App::find($id);
        
        $categories = Category::orderBy('name')
        ->get()
        ->pluck('name', 'id')
        ->all();
        
        return view('form', compact('app', 'categories'));
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
        $app = App::find($id);
        $app->title = $request->input('title'); 
        $app->category = $request->input('category'); 
        $app->rating = $request->input('rating');
        return 'Succesfully updated';
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
