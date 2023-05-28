<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = DB::table('posts')
            ->upsert([
               [
                   'user_id' => 1,
                   'title' => 'X Inserted through the db facade 4',
                   'slug' => 'inserted-through-the-db-facade-4',
                   'excerpt' => 'This is the excerpt 4',
                   'description' => 'This is the description 4',
                   'is_published' => true,
                   'min_to_read' => 4,
               ]
            ], ['title', 'slug']);

        dd($posts);
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
