<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     //
    //     return "hello una";
    // }

    public function index()
    {
        return "this method pass the index information: ";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //<localhost>
        return "I am create";
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

    public function showPost($id,$name,$email)
    {
        // return view('contact') -> with($id,id);

        return view('contact', compact('id','name','email'));

    }

    public function contact()
    {
        $people = ['husna', 'saidatul', 'gojo', 'satoru'];
        return view('contact', compact('people'));
        // array
    }
}
