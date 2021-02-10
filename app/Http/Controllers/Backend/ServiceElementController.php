<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Model\ServiceElement;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ServiceElementController extends Controller
{
    public function view(){
        $allData = ServiceElement::all();
        return view('backend.servicesElements.view-servicesElements',compact('allData'));
    }

    public function add(){
        return view('backend.servicesElements.add-servicesElements');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'heading' => 'required',
            'meta_descriptions' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $category = new ServiceElement();
        $category->heading = $request->heading;
        $category->meta_descriptions = $request->meta_descriptions;
        $category->save();
        return redirect()->route('servicesElements.view')->with('success','Data Save SuccessFully');
    }

    public function edit($id){

        $editData = ServiceElement::find($id);
        return view('backend.servicesElements.edit-servicesElements',compact('editData'));
    }

    public function update(Request $request ,$id){

        $validator = Validator::make($request->all(), [
            'heading' => 'required',
            'meta_descriptions' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $category =  ServiceElement::find($id);
        $category->heading = $request->heading;
        $category->meta_descriptions = $request->meta_descriptions;
        $category->save();
        return redirect()->route('servicesElements.view')->with('success','Data Updated SuccessFully');

    }

    public function delete($id){
        $skill = ServiceElement::find($id);
        $skill->delete();
        return redirect()->route('servicesElements.view')->with('success','Data Delete SuccessFully');
    }



}
