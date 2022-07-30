<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\staffs;

class staffsController extends Controller
{
    public function view(){
        $data = staffs::all();
        return view('ja_solutions.view',['data'=>$data]);
    }
    public function delete($id){
        $data = staffs::find($id);
        $data->delete();
        return redirect('ja_solutions');
    }
    public function add(Request $r){
        
        $staff = new staffs;
        
        $staff->staffName=$r->staffName;
        $staff->staffPass=$r->staffPass;
        
        $staff->save();
        return redirect('ja_solutions');
    }
    public function update($id){
        $data = staffs::find($id);
        return view('ja_solutions.edit',['data'=>$data]);
    }
    public function change(Request $r){
        
        $staff = staffs::find($r->id);
        
        $staff->staffName=$r->staffName;
        $staff->staffPass=$r->staffPass;
        
        $staff->save();
        return redirect('ja_solutions');
    }
}
