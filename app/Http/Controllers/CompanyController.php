<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){
        return view('Company.index');
    }

    public function addCompany(Request $request){

        $companies = Company::create([
            'name'=>$request->name,
        ]);

        $companies = Company::all();

        return response()->json([
            'success'=>true,
            'message'=>'All Companies',
            'data'=>$companies
        ]);
    }

    public function getCompany(){

        $companies = Company::all();
        return response()->json([
            'success'=>true,
            'message'=>'Companies',
            'data'=>$companies
        ]);
    }

}
