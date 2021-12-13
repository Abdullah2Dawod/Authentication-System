<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class TaskController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tasks = DB::table('tasks')->where('user_id' , Auth::id())->get();
        return view('tasks', compact('tasks'));
    }

    public function store(Request $request)
    {
        $tasks = DB::table('tasks')->insert([
            'name' => $request->name,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect()->back();
    }

    public function delete($id)
    {
        DB::table('tasks')->where('id' ,'=' , $id)->delete();

        return redirect()->back();
    }
}
