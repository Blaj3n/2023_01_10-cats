<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
    public function index()
    {
        $cats =  Cat::all();
        return $cats;
    }

    public function show($id)
    {
        $cat = Cat::find($id);
        return $cat;
    }
    public function destroy($id)
    {
        Cat::find($id)->delete();
    }
    public function store(Request $request)
    {
        $Cat = new Cat();
        $Cat->name = $request->name;
        $Cat->sex = $request->sex;
        $Cat->weight = $request->weight;
        $Cat->type = $request->type;
        $Cat->save();
    }

    public function update(Request $request, $id)
    {
        $Cat = Cat::find($id);
        $Cat->name = $request->name;
        $Cat->sex = $request->sex;
        $Cat->weight = $request->weight;
        $Cat->type = $request->type;
    }
}
