<?php

namespace App\Http\Controllers\Backend;

use App\Model\Experience;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ExperienceController extends Controller
{
    public function view(){

        $allData = Experience::all();
        return view('backend.experience.view-experience',compact('allData'));
    }
    public function add(){

        return view('backend.experience.add-experience');
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
        $category = new Experience();
        $category->title = $request->title;
        $category->duration = $request->duration;
        $category->position = $request->position;
        $category->address = $request->address;
        $category->save();
        return redirect()->route('experiences.view')->with('success','Data Save SuccessFully');
    }

    public function edit($id){

        $editData = Experience::find($id);
        return view('backend.experience.edit-experience',compact('editData'));
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
        $category =  Experience::find($id);
        $category->title = $request->title;
        $category->duration = $request->duration;
        $category->position = $request->position;
        $category->address = $request->address;
        $category->save();
        return redirect()->route('experiences.view')->with('success','Data Updated SuccessFully');

    }

    public function delete($id){

        $skill = Experience::find($id);
        $skill->delete();
        return redirect()->route('experiences.view')->with('success','Data Delete SuccessFully');
    }
}
