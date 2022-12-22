<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;
use DB;
use Schema;
use Carbon\Carbon;

class FuncationController extends Controller
{
    public function dashboard()
    {
        $today= date('Y-m-d');

        $startDate = Carbon::createFromFormat('Y-m-d', $today)->startOfDay();
        $endDate = Carbon::createFromFormat('Y-m-d', $today)->endOfDay();

        $data = User::whereBetween('created_at', [$startDate, $endDate])->get();

        // Total Number of User they Register today
        $today_number= count($data);

        // Total Number of Users
        $total_number=User::count();



        if(Auth::check()){
            return view('frontend.dashboard',compact("data","today_number","total_number"));
        }

        return redirect("login")->withSuccess('Opps! You do not have access');
    }


    public function UsersList(){
        $data = DB::select('select * from users');

        return view('frontend.userList',compact("data"));
    }

}
