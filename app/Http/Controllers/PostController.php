<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $route = Route::current(); // Illuminate\Routing\Route
        // $name = Route::currentRouteName(); // string
        // $action = Route::currentRouteAction(); // string
        // dd($route, $name, $action);

        $posts = Post::all();
        return $posts;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'auther' => ''
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->get('title'), '-');
        $post = Post::create($data);
        return [
            'status' => 'true',
            'message' => 'successfully'
        ];
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        try {
            // Your existing logic for handling a found post
            return [
                'status' => 'true',
                'post' => $post
            ];
        } catch (ModelNotFoundException $exception) {
            return [
                'status' => 'false',
                'message' => 'Error'
            ];
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $post = Post::findOrFail($request->get('id'));
        if ($post) {
            $post->update([
                'title' => $request->get('title'),
                'description' => $request->get('description'),
                'auther' => $request->get('auther'),
                'slug' => Str::slug($request->get('title'), '-')
            ]);
            return [
                'status' => 'true',
                'message' => 'Updated Successfully',
            ];
        }
        return [
            'status' => 'false',
            'message' => 'Not Found',
            'post' => []
        ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Post $post)
    {
        $post = Post::findOrFail($request->get('id'));
        if ($post) {
            $post->delete();
            return [
                'status' => 'true',
                'message' => 'Deleted Successfully',
            ];
        }
        return [
            'status' => 'false',
            'message' => 'Not Found',
            'post' => []
        ];
    }
}
