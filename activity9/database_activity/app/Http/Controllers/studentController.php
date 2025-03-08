<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class studentController extends Controller
{
    //
    public function insertform(){
        return view('stud_create');
    }

    public function insert(Request $request){
        $name = $request->input('stud_name');
        DB::insert('insert into student_info (name) values(?)', [$name]);
        echo "Record inserted successfully <br/>";
        echo '<a href="/insert">Click here</a> to go back </br> click here to view record <a href="/view-records">here</a>';
    }

    public function index(){
        $users = DB::select('select * from student_info');
        return view('stud_view', compact('users'));
    }
    public function show($id){
        $users = DB::select('select * from student_info where id = ?', [$id]);
        return view('stud_edit', compact('users'));
    }
    public function edit(Request $request, $id){
        $name = $request->input('stud_name');
        DB::update('update student_info set name = ? where id = ?', [$name, $id]);
        echo "Record updated successfully. </br>";
        echo "<a href='/view-records'>Click here </a>to view records";
    }
    public function delete($id){
        DB::delete("delete from student_info where id = ? ", [$id]);
        echo "Record deleted successfully. </br>";
        echo "<a href='/view-records'>Click here </a>to view records";
    }
}
