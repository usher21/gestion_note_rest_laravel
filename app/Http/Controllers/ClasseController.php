<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    public function showAll()
    {
        return Classe::join("levels", "levels.id", "=", "classes.level_id")
                       ->select("classes.*", "levels.label as levelName")->get();
    }

    public function add(Request $request)
    {
        $data = $request->json()->all();
        
        return Classe::create([
            "label" => $data['label'],
            "level_id" => $data['level_id']
        ]);
    }

    public function show($id)
    {
        return Classe::find($id);
    }

    public function byLevel($id)
    {
        return
         Classe::join("levels", "levels.id", "=", "classes.level_id")
        ->select("classes.*", "levels.label as levelName","levels.id as id_level" )
        ->where('levels.id','=',$id)
        ->get();
    }
}
