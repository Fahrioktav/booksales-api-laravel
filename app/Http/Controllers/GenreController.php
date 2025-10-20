<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
        if ($genres->isEmpty()) {
            return response()->json([
                "success" => true,
                "message" => "Resource data not found",
            ], 200);
        }

        return response()->json([
            "success" => true,
            "message" => "Get all resources",
            "data" => $genres
        ], 200);
    }

    public function store(Request $request)
    {
        // 1. VALIDATOR
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'description' => 'required|string',
        ]);

        // 2. Check validator error
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        // 3. Insert data
        $genre = Genre::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        // 4. Response
        return response()->json([
            "success" => true,
            "message" => "Resource add successfully!",
            "data" => $genre
        ], 201);
    }

    public function show(string $id)
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                "success" => false,
                "message" => "Resource not found"
            ], 404);
        }

        return response()->json([
            "success" => true,
            "message" => "Get detail resource!",
            "data" => $genre
        ], 200);
    }

    public function update(Request $request, string $id)
    {
        // 1. Mencari data
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                'success' => false,
                'message' => 'Resource not found!!'
            ], 404);
        }

        // 2. Validator
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'description' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        // 3. Update data baru ke database
        $genre->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return response()->json([
            "success" => true,
            "message" => "Resource update successfully!",
            "data" => $genre
        ], 200);
    }

    public function destroy(string $id)
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                "success" => false,
                "message" => "Resource not found!"
            ], 404);
        }

        $genre->delete();

        return response()->json([
            "success" => true,
            "message" => "Delete resource successfully"
        ]);
    }
}
