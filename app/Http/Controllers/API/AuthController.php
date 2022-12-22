<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Session;
use Hash;

use App\Models\User;

class AuthController extends Controller
{

    public function Register(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile_number' => 'required',
            'password' => 'required|min:6',
        ]);


        $Useremail = User::where('email', '=', $request->email)->first();
        $mobile = User::where('mobile_number', '=', $request->mobile_number)->first();
        if ($Useremail == null) {

            if($mobile==null){
                $user = User::create([
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'mobile_number'=>$request->mobile_number,
                    'password'=>\Hash::make($request->password),
                ]);

                $token = $user->createToken("Token")->accessToken;
                return response()->json(['token'=>$token,'user'=>$user],200);
            }

            else{
                $error="This Mobile Number  is already Exist";
                return response()->json(['message'=>$error]);
            }

        }


       else{
        $error="This Email Address is already Exist";
        return response()->json(['message'=>$error]);
       }

       $error="Something is Wrong! Please Try Again Later";
        return response()->json(['message'=>$error]);

    }

    public function Login(Request $request){

        $request->validate([
            'email'=>'required',
            'password'=>'required',

        ]);


        $data= [
            'email'=> $request->email,
            'password'=>$request->password,
        ];


        $Useremail = User::where('email', '=', $request->email)->first();

        if($Useremail!=null){

            if(auth()->attempt($data)){



                $token = auth()->user()->createToken('Token')->accessToken;
                return response()->json(['token'=>$token],200);

            }
            else{
                $message= "Wrong Password";
                return response()->json(['message'=>$message],401);
            }
        }

        else{
            $message= "This Email is not Exist";
            return response()->json(['message'=>$message],401);
        }


        $error="Something is Wrong! Please Try Again Later";
        return response()->json(['message'=>$error]);
    }
}
