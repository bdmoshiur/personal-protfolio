<?php

namespace App\Http\Controllers\Backend;

use App\Model\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class FrontendController extends Controller
{
    public function view(){

        $allData = Frontend::all();
        return view('backend.skill.frontend.view-skill',compact('allData'));
    }
    public function add(){

        return view('backend.skill.frontend.add-skill');
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
        $category = new Frontend();
        $category->name = $request->name;
        $category->value = $request->value;
        $category->save();
        return redirect()->route('frontends.view')->with('success','Data Save SuccessFully');
    }

    public function edit($id){

        $editData = Frontend::find($id);
        return view('backend.skill.frontend.edit-skill',compact('editData'));
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
        $category =  Frontend::find($id);
        $category->name = $request->name;
        $category->value = $request->value;
        $category->save();
        return redirect()->route('frontends.view')->with('success','Data Updated SuccessFully');

    }

    public function delete($id){

        $skill = Frontend::find($id);
        $skill->delete();
        return redirect()->route('frontends.view')->with('success','Data Delete SuccessFully');
    }

}
