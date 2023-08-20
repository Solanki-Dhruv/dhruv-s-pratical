<?php

namespace App\Services;

use App\Http\Resources\CompanyResource;
use App\Http\Resources\UserResource;
use App\Models\Company;
use App\Models\User;
use Exception;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Storage;

class ApiService{


    public function getCompanies($request){

        try{
            if($request->company_uuid){
                $company = Company::where('uuid',$request->company_uuid)->first();
                if(!$company){
                    return ['success'=>false,'message'=>'Comapny Not Found'];
                }
                return [
                    'success'=>true,
                    'message'=>'Comapany Details',
                    'data'=>new CompanyResource($company)
                ];

            }else{

                $companies = Company::all();
                if($companies->count() <= 0){
                    return [
                        'success'=>false,
                        'message'=>'Company Not Found'
                    ];
                }

                return [
                    'success'=>true,
                    'message'=>'Companies Are',
                    'data'=>CompanyResource::collection($companies)
                ];
            }
        }catch(Exception $e){
            return['success'=>false,'message'=>$e->getMessage()];
        }

    }

    public function addCompany($request){

            Company::create([
                'name'=>$request->name,
            ]);

            return ['success'=>true,'message'=>'Company Added Successfully'];
    }

    public function updateCompany($request){

        try{
            $company = Company::where('uuid',$request->company_uuid)->first();
            if(!$company){
                return ['success'=>false,'message'=>'Comapny Not Found'];
            }
            $company->name = $request->name;
            $company->save();
            return[
                'success'=>true,
                'message'=>'Company Updated Successfully'
            ];
        }catch(Exception $e){
            return['success'=>false,'message'=>$e->getMessage()];
        }
    }

    public function deleteCompany($request){

        try{
            $company = Company::where('uuid',$request->company_uuid)->first();
            if(!$company){
                return ['success'=>false,'message'=>'Comapny Not Found'];
            }
            $company->delete();
            return[
                'success'=>true,
                'message'=>'Company deleted Successfully'
            ];
        }catch(Exception $e){
            return['success'=>false,'message'=>$e->getMessage()];
        }
    }

    public function addUser($request){

        try{
            $company = Company::where('uuid',$request->company_uuid)->first();
            if(!$company){
                return ['success'=>false,'message'=>'Company Not Found'];
            }

            $user = $company->users()->create([
                'name'=>$request->name,
                'email'=>$request->email,
                'hobby'=>json_encode($request->hobby),
                'experience'=>$request->experience,
                'message'=>$request->message,
                'mobile'=>$request->mobile,
                'gender'=>$request->gender,
            ]);

            if($request->hasFile('image')){
                $user->uploadFile($request->file('image'));
                $user->save();
            }

            return [
                'success'=>true,
                'message'=>'User Added Successfully',
                'data'=>new UserResource($user)
            ];
        }catch(Exception $e){
            return['success'=>false,'message'=>$e->getMessage()];
        }
    }

    public function updateUser($request){
        try{
            $user = User::where('uuid',$request->user_uuid)->first();
            if(!$user){
                return ['success'=>false,'message'=>'User Not Found'];
            }

            if($request->has('name')){
                $user->name = $request->name;
            }
            if($request->has('email')){
                $user->email = $request->email;
            }
            if($request->has('mobile')){
                $user->mobile = $request->mobile;
            }
            if($request->has('message')){
                $user->message = $request->message;
            }
            if($request->has('gender')){
                $user->gender = $request->gender;
            }
            if($request->has('hobby')){
                $user->hobby = json_encode($request->hobby);
            }
            if($request->has('experience')){
                $user->experience = $request->experience;
            }

            if($request->has('company_uuid')){
                $company = Company::where('uuid',$request->company_uuid)->first();
                if(!$company){
                    return ['success'=>false,'message'=>'Company Not Found'];
                }
                $user->company_uuid = $company->uuid;
            }

            if($request->hasFile('image')){
                Storage::delete(asset($user->image));
                $user->uploadFile($request->file('image'));
            }

            $user->save();

            return [
                'success'=>true,
                'message'=>'User Updated Successfully',
                'data'=>new UserResource($user)
            ];
        }catch(Exception $e){
            return['success'=>false,'message'=>$e->getMessage()];
        }
    }

    public function deleteUser($request){

        try{
            $user = User::where('uuid',$request->user_uuid)->first();
            if(!$user){
                return ['success'=>false,'message'=>'User Not Found'];
            }
            $user->delete();
            return ['success'=>true,'message'=>'User Deleted Successfully'];
        }catch(Exception $e){
            return['success'=>false,'message'=>$e->getMessage()];
        }
    }

    public function getUser($request){
        try{
            if($request->user_uuid){
                $user = User::where('uuid',$request->user_uuid)->first();

                if(!$user){
                    return ['success'=>false,'message'=>'User Not Found'];
                }
                return [
                    'success'=>true,
                    'message'=>'User Details',
                    'data'=>new UserResource($user)
                ];
            } else {
                $user = User::paginate(10);

                if($user->isEmpty()){
                    return [
                        'success'=>false,
                        'message'=>'User Not Found',
                    ];
                }

                return [
                    'success'=>true,
                    'message'=>'Users Are',
                    'data'=>UserResource::collection($user)->response()->getData(true)
                ];
            }
        }catch(Exception $e){
            return['success'=>false,'message'=>$e->getMessage()];
        }
    }

}
