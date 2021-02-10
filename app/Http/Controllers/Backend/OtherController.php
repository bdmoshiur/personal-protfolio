<?php

namespace App\Http\Controllers\Backend;

use App\Model\Other;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class OtherController extends Controller
{
    public function view(){

        $allData = Other::all();
        return view('backend.skill.others.view-skill',compact('allData'));
    }
    public function add(){

        return view('backend.skill.others.add-skill');
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'value' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $category = new Other();
        $category->name = $request->name;
        $category->value = $request->value;
        $category->save();
        return redirect()->route('others.view')->with('success','Data Save SuccessFully');
    }

    public function edit($id){

        $editData = Other::find($id);
        return view('backend.skill.others.edit-skill',compact('editData'));
    }

    public function update(Request $request ,$id){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'value' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $category =  Other::find($id);
        $category->name = $request->name;
        $category->value = $request->value;
        $category->save();
        return redirect()->route('others.view')->with('success','Data Updated SuccessFully');

    }

    public function delete($id){

        $skill = Other::find($id);
        $skill->delete();
        return redirect()->route('others.view')->with('success','Data Delete SuccessFully');
    }

}
