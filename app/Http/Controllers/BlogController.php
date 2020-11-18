<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Response;

use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        return Blog::all();
    }

    public function showById($id)
    {
        $blog = Blog::where('id', $id)->first();
        if ($blog) {
            return $blog;
        } else {
            return response()->json([
                'message' => 'Blog not found',
            ], 404);
        }
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'isi' => 'required'
        ]);

        $blog = Blog::create(
            $request->only(['judul', 'isi'])
        );

        return response()->json([
            'created' => true,
            'data' => $blog
        ], 201);
    }

    public function update(Request $request, $id)
    {
        try {
            $blog = Blog::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Blog not found'
            ], 404);
        }

        $blog->fill(
            $request->only(['judul', 'isi'])
        );
        $blog->save();

        return response()->json([
            'updated' => true,
            'data' => $blog
        ], 200);
    }

    public function destroy($id)
    {
        try {
            $blog = Blog::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'error' => [
                    'message' => 'Blog not found'
                ]
            ], 404);
        }

        $blog->delete();

        return response()->json([
            'deleted' => true
        ], 200);
    }
}
