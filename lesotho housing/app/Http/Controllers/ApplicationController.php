<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;
use App\Status;
use DB;

class ApplicationController extends Controller
{
    public function index()
    {
        return view('application.index');
    }
    public function status()
    {
        //$apps = DB::select('SELECT * FROM applications WHERE user_id = id.users');
        $apps = DB::table('users')->orderBy('created_at')
                ->join('applications', 'users.id', '=', 'applications.user_id')
                ->select('users.name', 'users.email', 'users.mobile', 'applications.*')
                ->get();


        return view('application.status', [
            'status' => $apps
            ]);
    }
    public function success()
    {
        return view('application.status');
    }

    public function store(Request $request)
    {

       Application::create([
            'user_id' => auth()->id(),
            'address' => $request->address,
            'gender' => $request->gender,
            'state' => $request->state,
            'nationality' => $request->nationality,
            'birth_date' =>$request->birth_date,
            'idnumber' => $request->idnumber,
        ]);
       return redirect()->route('statusapp');
    }

}
