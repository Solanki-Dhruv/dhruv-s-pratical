<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\User;
use Exception;
use Illuminate\Http\Client\ResponseSequence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function usersList(){
        $companies = Company::all();
        return view('Users.index',compact('companies'));
    }

    public function registerUser(Request $request){

// dd($request->hobby);
        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'experience'=>$request->experience,
            'message'=>$request->message,
            'hobby'=>json_encode($request->hobby),
            'company_uuid'=>$request->company,
            'gender'=>$request->gender
        ]);

        if($request->hasFile('image')){
            $user->uploadFile($request->file('image'));
            $user->save();
        }

        return response()->json([
            'success'=>true,
            'message'=>'User Registered Successfully'
        ]);
    }

    public function allUsers(Request $request){
        $perPage = 3;

        $users = User::when($request->search, function ($query) use ($request) {
            $query->where(function ($subquery) use ($request) {
                $subquery->where('name', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('gender', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('mobile', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('experience', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('email', 'LIKE', '%' . $request->search . '%')
                    ->orWhereHas('company', function ($subquery) use ($request) {
                        $subquery->where('name', 'LIKE', '%' . $request->search . '%');
                    });
            });
        })->paginate($perPage);

        return response()->json([
            'success' => true,
            'message' => 'Users',
            'data' => $users
        ]);
    }

    public function deleteUser($id){

        User::where('uuid',$id)->delete();

        return response()->json([
            'success'=>true,
            'message'=>'User Deleted Successfully'
        ]);
    }

    public function searchFun(Request $request){

        $perPage = 3;
        $users = User::when($request->search, function ($query) use ($request) {
            $query->where(function ($subquery) use ($request) {
                $subquery->where('name', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('gender', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('mobile', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('experience', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('email', 'LIKE', '%' . $request->search . '%')
                    ->orWhereHas('company', function ($subquery) use ($request) {
                        $subquery->where('name', 'LIKE', '%' . $request->search . '%');
                    });
            });
        })->paginate($perPage);

        return response()->json([
            'success' => true,
            'message' => 'Users',
            'data' => $users
        ]);

    }

    public function updateUser($id){

        $user = User::where('uuid',$id)->first();

        $companies = Company::all();

        return response()->json([
            'success'=>true,
            'message'=>'User Details',
            'companies'=>$companies,
            'data'=>$user
        ]);

    }

    public function updateUserData(Request $request){

        $user = User::where('uuid',$request->uuid)->first();
        if($user){

            $user->name=$request->name;
            $user->email=$request->email;
            $user->mobile=$request->mobile;
            $user->experience=$request->experience;
            $user->message=$request->message;
            $user->hobby=json_encode($request->hobby);
            $user->company_uuid=$request->company;
            $user->gender=$request->gender;

            if($request->hasFile('image')){
                Storage::delete(asset($user->image));
                $user->uploadFile($request->file('image'));
                $user->save();
            }

            $user->save();
        }

        return response()->json([
            'success'=>true,
            'message'=>'User Updated Successfully',
        ]);


    }
}
