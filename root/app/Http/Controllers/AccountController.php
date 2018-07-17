<?php

namespace App\Http\Controllers;

use App\Expense;
use App\Program;
use App\Purchase;
use App\TripCost;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $program = Program::query()->sum('rent');
        $purchase = Purchase::query()->sum('p_total');
        $trip_cost = TripCost::query()->sum('total');
        $expenses = Expense::query()->sum('amount');
        return view('account.index',compact('program','purchase','trip_cost','expenses'));
    }
}
