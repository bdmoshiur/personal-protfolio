<?php

namespace App\Http\Controllers\Backend;

use App\Model\Skill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class SkillController extends Controller
{
    public function view(){
        $allData = Skill::all();
        return view('backend.skill.view-skill',compact('allData'));
    }
    public function add(){
        return view('backend.skill.add-skill');
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'heading' => 'required',
            'descriptions' => 'required',
            'experience' => 'required',
            'project_completed' => 'required',
            'hours_of_coding' => 'required',
            'awesome_clients' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $category = new Skill();
        $category->heading = $request->heading;
        $category->descriptions = $request->descriptions;
        $category->experience = $request->experience;
        $category->project_completed = $request->project_completed;
        $category->hours_of_coding = $request->hours_of_coding;
        $category->awesome_clients = $request->awesome_clients;
        $category->save();
        return redirect()->route('skills.view')->with('success','Data Save SuccessFully');
    }

    public function edit($id){
        $editData = Skill::find($id);
        return view('backend.skill.edit-skill',compact('editData'));
    }

    public function update(Request $request ,$id){
        $validator = Validator::make($request->all(), [
            'heading' => 'required',
            'descriptions' => 'required',
            'experience' => 'required',
            'project_completed' => 'required',
            'hours_of_coding' => 'required',
            'awesome_clients' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $category =  Skill::find($id);
        $category->heading = $request->heading;
        $category->descriptions = $request->descriptions;
        $category->experience = $request->experience;
        $category->project_completed = $request->project_completed;
        $category->hours_of_coding = $request->hours_of_coding;
        $category->awesome_clients = $request->awesome_clients;
        $category->save();
        return redirect()->route('skills.view')->with('success','Data Updated SuccessFully');

    }

    public function delete($id){
        $skill = Skill::find($id);
        $skill->delete();
        return redirect()->route('skills.view')->with('success','Data Delete SuccessFully');
    }


}
