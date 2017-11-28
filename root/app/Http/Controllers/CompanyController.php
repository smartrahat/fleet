<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use App\City;
use App\Company;
use App\Http\Requests\CompanyRequest;
use App\Repositories\CompanyRepository;
use App\State;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class CompanyController extends Controller
{
    /**
     * @var CompanyRepository
     */
    private $repository;

    public function __construct(CompanyRepository $repository)
    {
        $this->middleware('auth');
        $this->repository = $repository;
    }

    public function index()
    {
        $companies = Company::all();
        return view('company.index',compact('companies'));
    }

    public function create()
    {
        $repository = $this->repository;
        return view('company.create',compact('repository'));
    }


    public function store(CompanyRequest $request)
    {
        if($request->hasFile('logo')){
            $query = DB::select(DB::Raw("SHOW TABLE STATUS LIKE 'companies'"));
            $name = $query[0]->Auto_increment.'.'.$request->file('logo')->getClientOriginalExtension();
            $request->file('logo')->move(base_path().'/../images/vehicles/', $name);
            $data = $request->except('logo');
            $data['logo'] = $name;

            $this->validate($request,[
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed'
            ]);

            $request['company_id']= $query[0]->Auto_increment;
            $request['role_id']= 2;
            $request['password'] = bcrypt($request->password);
            Company::query()->create($data);
            User::query()->create($request->all());
        }else{
            $query = DB::select(DB::Raw("SHOW TABLE STATUS LIKE 'companies'"));
            $u_query = DB::select(DB::Raw("SHOW TABLE STATUS LIKE 'users'"));
            $this->validate($request,[
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed'
            ]);

            $request['company_id']= $query[0]->Auto_increment;

            $request['role_id']= 2;

            $request['password'] = bcrypt($request->password);
            User::query()->create($request->all());
            Company::query()->create($request->except('logo'));

            $id = $u_query[0]->Auto_increment; //Present User ID

            DB::table('users')
                ->where('id', $id)
                ->update(['company_id' => $request['company_id']]);

//            $users = User::query()->findOrFail($id);
//            $users->update(['company_id'=> $request['company_id']]);

        }
        Session::flash('success','Vehicle has been added');
        return redirect('companies');
    }



    public function show($id)
    {
        $company = Company::query()->findOrFail($id);
        return view('company.show',compact('company'));
    }

    public function edit($id)
    {
        $company = Company::query()->findOrFail($id);
        $repository = $this->repository;
        return view('company.edit',compact('company','repository'));
    }

    public function update($id,CompanyRequest $request)
    {
        $company = Company::query()->findOrFail($id);
        if($request->hasFile('image')){
            $name = $company->id;
            $image = $name.'.'.$request->file('image')->getClientOriginalExtension();
            File::delete('/admin/images/companies/'.$company->logo);
            $request->file('image')->move(base_path().'/../admin/images/companies/',$image);
            $data = $request->except('image');
            $data['logo'] = $image;
            $company->update($data);
        }else{
            $company->update($request->except('image'));
        }
        Session::flash('success','Information has been updated!');
        //$company->update($request->all());
        return redirect('company/edit/'.$id);
    }

    /* ============================================================== */
                                #ajax
    /* ============================================================== */

    /**
     * Display state list through ajax request
     * @param Request $request
     * @return string
     */
    public function countrySubmit(Request $request)
    {
        $country = $request->get('country');
        $states = State::query()->where('country_id',$country)->get();
        $state = '<option value="">Select State</option>';
        foreach($states as $s){
            $state .= '<option value="'.$s->id.'">'.$s->name.'</option>';
        }
        return $state;
    }

    /**
     * Display city list through ajax request
     * @param Request $request
     * @return string
     */
    public function stateSubmit(Request $request)
    {
        $state = $request->get('state');
        $cities = City::query()->where('state_id',$state)->get();
        $city = '';
        foreach($cities as $s){
            $city .= '<option value="'.$s->id.'">'.$s->name.'</option>';
        }
        return $city;
    }
}
