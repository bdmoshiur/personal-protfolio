<?php

namespace App\Http\Controllers\Backend;

use App\Model\Backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class BackendController extends Controller
{
    public function view(){

        $allData = Backend::all();
        return view('backend.skill.backend.view-skill',compact('allData'));
    }
    public function add(){

        return view('backend.skill.backend.add-skill');
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
        $category = new Backend();
        $category->name = $request->name;
        $category->value = $request->value;
        $category->save();
        return redirect()->route('backends.view')->with('success','Data Save SuccessFully');
    }

    public function edit($id){

        $editData = Backend::find($id);
        return view('backend.skill.backend.edit-skill',compact('editData'));
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
        $category =  Backend::find($id);
        $category->name = $request->name;
        $category->others = $request->others;
        $category->save();
        return redirect()->route('backends.view')->with('success','Data Updated SuccessFully');

    }

    public function delete($id){

        $skill = Backend::find($id);
        $skill->delete();
        return redirect()->route('backends.view')->with('success','Data Delete SuccessFully');
    }

}
