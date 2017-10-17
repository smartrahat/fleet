<?php

namespace App\Http\Controllers;

use App\Repositories\SparePartRepository;
use App\SparePart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SparePartController extends Controller
{
    /**
     * @var SparePartRepository
     */
    private $repository;

    public function __construct(SparePartRepository $repository)
    {
        $this->middleware('auth');
        $this->repository = $repository;
    }

    public function index()
    {
        $parts = SparePart::all();
        $repository = $this->repository;
        return view('purchase.index',compact('parts','repository'));
    }

    public function store(Request $request)
    {
        SparePart::query()->create($request->all());
        Session::flash('success','"'.$request->name.'" has been added!');
        return redirect('spare-parts');
    }

    public function edit($id)
    {
        $parts = SparePart::all();
        $part = SparePart::query()->findOrFail($id);
        $repository = $this->repository;
        return view('purchase.edit',compact('parts','parts','repository'));
    }

    public function update($id, Request $request)
    {
        $part = SparePart::query()->findOrFail($id);
        $part->update($request->all());
        Session::flash('success','"'.$part->name.'" is updated!');
        return redirect('spare-parts');
    }

    public function destroy($id)
    {
        $part = SparePart::query()->findOrFail($id);
        $part->delete();
        Session::flash('success','"'.$part->name.'" has been deleted successfully!');
        return redirect('spare-parts');
    }
}
