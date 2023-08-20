<?php

namespace App\Http\Controllers;

use App\Services\ApiService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{

    public $apiService;

    public function __construct()
    {
        $this->apiService = new ApiService();
    }

    public function getCompanies(Request $request){
        return response()->json($this->apiService->getCompanies($request));
    }

    public function addCompany(Request $request){
        $rules = [
            'name'=>'required',
        ];

        $validate = Validator::make($request->all(),$rules);
        if($validate->fails()){
            return response()->json([
                'success'=>false,
                'message'=>$validate->errors()->first()
            ]);
        }
        return response()->json($this->apiService->addCompany($request));
    }

    public function updateCompany(Request $request){

        $rules = [
            'company_uuid'=>'required',
            'name'=>'required',
        ];

        $validate = Validator::make($request->all(),$rules);
        if($validate->fails()){
            return response()->json([
                'success'=>false,
                'message'=>$validate->errors()->first()
            ]);
        }
        return response()->json($this->apiService->updateCompany($request));
    }
    public function deleteCompany(Request $request){

        $rules = [
            'company_uuid'=>'required',
        ];

        $validate = Validator::make($request->all(),$rules);
        if($validate->fails()){
            return response()->json([
                'success'=>false,
                'message'=>$validate->errors()->first()
            ]);
        }
        return response()->json($this->apiService->deleteCompany($request));
    }

    public function addUser(Request $request){
        $rules = [
            'name'=>'required',
            'email'=>'required | email',
            'mobile'=>'required | numeric',
            'message'=>'required',
            'hobby'=>'required',
            'experience'=>'required',
            'gender'=>'required | in:male,female',
            'company_uuid'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif'
        ];

        $validate = Validator::make($request->all(),$rules);
        if($validate->fails()){
            return response()->json([
                'success'=>false,
                'message'=>$validate->errors()->first()
            ]);
        }
        return response()->json($this->apiService->addUser($request));
    }

    public function updateUser(Request $request){

        $rules = [
            'user_uuid'=>'required',
        ];

        $validate = Validator::make($request->all(),$rules);
        if($validate->fails()){
            return response()->json([
                'success'=>false,
                'message'=>$validate->errors()->first()
            ]);
        }
        return response()->json($this->apiService->updateUser($request));
    }
    public function deleteUser(Request $request){

        $rules = [
            'user_uuid'=>'required',
        ];

        $validate = Validator::make($request->all(),$rules);
        if($validate->fails()){
            return response()->json([
                'success'=>false,
                'message'=>$validate->errors()->first()
            ]);
        }
        return response()->json($this->apiService->deleteUser($request));
    }

    public function getUser(Request $request){
        return response()->json($this->apiService->getUser($request));
    }
}
