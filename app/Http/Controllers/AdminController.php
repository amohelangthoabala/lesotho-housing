<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use \App\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('admin.index');
    }
    public function users()
    {
        $lists = DB::table('users')->get();
        return view('admin.list' , [
            'lists' => $lists
            ]);
    }
    public function destroy(Request $request){
        $request->$user()->delete();
        return back();
    }
}
