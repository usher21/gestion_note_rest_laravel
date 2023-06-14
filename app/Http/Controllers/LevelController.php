<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function showAll()
    {
        return Level::all();
    }

    public function add(Request $request)
    {
        $data = $request->json()->all();
        
        return Level::create([
            "label" => $data['label']
        ]);
    }

    public function show($id)
    {
        return Level::find($id);
    }
}
