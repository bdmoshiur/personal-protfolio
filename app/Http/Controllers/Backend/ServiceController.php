<?php

namespace App\Http\Controllers\Backend;

use App\Model\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    public function view(){

        $allData = Service::all();
        return view('backend.services.view-service',compact('allData'));
    }
    public function add(){

        return view('backend.services.add-service');
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'descriptions' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $category = new Service();
        $category->title = $request->title;
        $category->descriptions = $request->descriptions;
        $category->save();
        return redirect()->route('services.view')->with('success','Data Save SuccessFully');
    }

    public function edit($id){

        $editData = Service::find($id);
        return view('backend.services.edit-service',compact('editData'));
    }

    public function update(Request $request ,$id){

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'descriptions' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $category =  Service::find($id);
        $category->title = $request->title;
        $category->descriptions = $request->descriptions;
        $category->save();
        return redirect()->route('services.view')->with('success','Data Updated SuccessFully');

    }

    public function delete($id){

        $skill = Service::find($id);
        $skill->delete();
        return redirect()->route('services.view')->with('success','Data Delete SuccessFully');
    }
}
