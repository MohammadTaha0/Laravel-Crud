<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InsertController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function post(Request $request)
    {
        $fname = $request->input('FirstName');
        $lname = $request->input('LastName');
        $query = DB::insert('insert into person(fname,lname) values(?,?)', [$fname, $lname]);
        if ($query) {
            return redirect('home')->with('status', 'Insertd Successfully');
        } else {
            return redirect('home')->with('status', 'Something Went Wrong');
        }
    }
    public function display()
    {
        $query = DB::select("select * from person");
        return view('index', compact('query'));
    }
    public function update($id)
    {
        $id = $id;
        $updquery = DB::select("select * from person where id = ?", [$id]);
        return view('update', compact('updquery'));
    }
    public function updateData(Request $request)
    {
        $id = $request->input('id');
        $fname = $request->input('FirstName');
        $lname = $request->input('LastName');
        $query = DB::update("update person set fname = ?, lname = ? where id = ?", [$fname, $lname, $id]);
        if ($query) {
            return redirect('home')->with('status', 'SuccessFully Update Row # '.$id);
        } else {
            return redirect('home')->with('status', 'Something Went Wrong');
        }
    }
    public function deldata($id) {
        $id = $id;
        $query = DB::delete('delete from person where id = ?',[$id]);
        if ($query) {
            return redirect('home')->with('status', 'SuccessFully Delete Row # '.$id);
        } else {
            return redirect('home')->with('status', 'Something Went Wrong');
        }
    }
}
