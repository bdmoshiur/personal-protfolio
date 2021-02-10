<?php

namespace App\Http\Controllers\Backend;

use App\Model\Education;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class EducationController extends Controller
{
    public function view(){

        $allData = Education::all();
        return view('backend.education.view-education',compact('allData'));
    }
    public function add(){

        return view('backend.education.add-education');
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'duration' => 'required',
            'position' => 'required',
            'address' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $category = new Education();
        $category->title = $request->title;
        $category->duration = $request->duration;
        $category->position = $request->position;
        $category->address = $request->address;
        $category->save();
        return redirect()->route('educations.view')->with('success','Data Save SuccessFully');
    }

    public function edit($id){

        $editData = Education::find($id);
        return view('backend.education.edit-education',compact('editData'));
    }

    public function update(Request $request ,$id){

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'duration' => 'required',
            'position' => 'required',
            'address' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $category =  Education::find($id);
        $category->title = $request->title;
        $category->duration = $request->duration;
        $category->position = $request->position;
        $category->address = $request->address;
        $category->save();
        return redirect()->route('educations.view')->with('success','Data Updated SuccessFully');

    }

    public function delete($id){

        $skill = Education::find($id);
        $skill->delete();
        return redirect()->route('educations.view')->with('success','Data Delete SuccessFully');
    }
}
