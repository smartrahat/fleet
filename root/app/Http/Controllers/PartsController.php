<?php

namespace App\Http\Controllers;

use App\Repositories\PartsRepository;
use Illuminate\Http\Request;
use App\Parts;
use Illuminate\Support\Facades\Session;

class PartsController extends Controller
{

    private $repository;

    public function __construct(PartsRepository $repository)
    {
        $this->middleware('auth');
        $this->repository = $repository;
    }

    public function index()
    {
        $repository = $this->repository;
        $parts = Parts::all();
        return view('parts.index',compact('parts','repository'));
    }

    public function store(Request $request)
    {

        Parts::query()->create($request->all());
        Session::flash('success','"'.$request->name.'" has been added!');
        return redirect('parts');
    }

    public function edit($id)
    {
        $parts = Parts::all();
        $part = Parts::query()->findOrFail($id);
        return view('parts.edit',compact('part','parts'));
    }

    public function update($id, Request $request)
    {
        $part = Parts::query()->findOrFail($id);
        $part->update($request->all());
        Session::flash('success','"'.$part->name.'" is updated!');
        return redirect('parts');
    }

    public function destroy($id)
    {
        $part = Parts::query()->findOrFail($id);
        $part->delete();
        Session::flash('success','"'.$part->name.'" has been deleted successfully!');
        return redirect('parts');
    }
}
