<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dog;

class ApiController extends Controller
{
    public function index()
    {
        return Dog::all();
    }

    public function store(Request $request)
    {
        Dog::create($request->all());
    }

    public function show($id)
    {
        return Dog::FindOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $dog = Dog::FindOrFail($id);
        $dog->update($request->all());
    }

    public function destroy($id)
    {
        $dog = Dog::FindOrFail($id);
        $dog->delete();
    }
}
