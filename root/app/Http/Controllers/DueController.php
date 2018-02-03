<?php

namespace App\Http\Controllers;

use App\Due;
use App\Income;
use App\Http\Requests\DueRequest;
use App\Program;
use App\Repositories\DueRepository;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Request;

class DueController extends Controller
{
    private $repository;

    public function __construct(DueRepository $repository){
        $this->middleware('auth');
        $this->repository=$repository;
        //ProgramRepository is the class name & also the file name
    }

    public function create(){
        $repository = $this->repository;
        return view('due_collection.create',compact('repository'));
        //je view te repository field gulo lagbe shei view te  repository pass korte hobe
    }

    public function index()
    {
        $due_collections = Income::all();
        return view('due_collection.index',compact('due_collections','repository'));
    }

    public function store(DueRequest $request)
    {
        Due::create($request->all());
        return redirect('due_collections');
    }

    public function edit($id)
    {
        $repository = $this->repository;
        $due_collections = Income::all();
        $due_collection = Income::query()->findOrFail($id);
        return view('due_collection.edit',compact('due_collection','due_collections','repository'));
    }

    public function update($id, DueRequest $request)
    {
        $due_collection = Income::query()->findOrFail($id);
        Session::flash('success','"'.$due_collection->name.'" is updated!');
        $due_collection->update($request->all());
        return redirect('due_collections');
    }

    public function destroy($id)
    {
        $due_collection = Income::query()->findOrFail($id);
        $due_collection->delete();
        Session::flash('success','"'.$due_collection->name.'" has been deleted successfully!');
        return redirect('due_collections');
    }

    public function dueSubmit(Request $request)
    {
        $party = $request->get('party');
        $programs = Program::query()->where('party_id',$party)->get();
        $combo='<option>'.null.'<option>';
        foreach($programs as $program){
            $combo.= '<option value="'.$program->id.'">'.$program->serial.'</option>';
        }
        $combo.='';
        return $combo;
    }
}