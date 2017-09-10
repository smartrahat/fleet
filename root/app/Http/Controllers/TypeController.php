<?php

namespace App\Http\Controllers;

use App\Http\Requests\TypeRequest;
use App\Type;
use Illuminate\Support\Facades\Session;

class TypeController extends Controller
{
    public function index()
    {
        $types = Type::all();
        return view('types.index',compact('types'));
    }

    public function store(TypeRequest $request)
    {
        Type::query()->create($request->all());
        Session::flash('success','"'.$request->name.'" has been added!');
        return redirect('types');
    }

    public function edit($id)
    {
        $types = Type::all();
        $type = Type::query()->findOrFail($id);
        return view('types.edit',compact('type','types'));
    }

    public function update($id, TypeRequest $request)
    {
        $type = Type::query()->findOrFail($id);
        $type->update($request->all());
        Session::flash('success','"'.$type->name.'" is updated!');
        return redirect('types');
    }

    public function destroy($id)
    {
        $type = Type::query()->findOrFail($id);
        $type->delete();
        Session::flash('success','"'.$type->name.'" has been deleted successfully!');
        return redirect('types');
    }
}
