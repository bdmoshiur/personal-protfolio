<?php

namespace App\Http\Controllers\Backend;

use App\Model\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class AboutController extends Controller
{
    public function view(){

        $allData = About::all();
        return view('backend.about.view-about',compact('allData'));
    }
    public function add(){

        return view('backend.about.add-about');
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'heading' => 'required|unique:abouts',
            'title' => 'required|unique:abouts',
            'meta_title' => 'required|unique:abouts',
            'email' => 'required|unique:abouts',
            'descriptions' => 'required',
            'phone' => 'required|unique:abouts',
            'address' => 'required|unique:abouts',
            'date_of_birth' => 'required|unique:abouts',
            'facebook' => 'required|unique:abouts',
            'twitter' => 'required|unique:abouts',
            'linkedin' => 'required|unique:abouts',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $image = "";
            if ($request->file('image') != "") {
                $file = $request->file('image');
                $image = 'about-' . md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
                $file->move('public/upload/image/', $image);
                $image =  'public/upload/image/' . $image;
            }

        $category = new About();
        $category->heading = $request->heading;
        $category->title = $request->title;
        $category->meta_title = $request->meta_title;
        $category->descriptions = $request->descriptions;
        $category->email = $request->email;
        $category->date_of_birth = $request->date_of_birth;
        $category->phone = $request->phone;
        $category->address = $request->address;
        $category->facebook = $request->facebook;
        $category->twitter = $request->twitter;
        $category->linkedin = $request->linkedin;
        $category->image = $image;
        $category->save();

        return redirect()->route('abouts.view')->with('success','Data Save SuccessFully');
    }
    public function edit($id){

        $editData = About::find($id);
        return view('backend.about.edit-about',compact('editData'));
    }
    public function update(Request $request ,$id){

        $validator = Validator::make($request->all(), [
            'heading' => 'required',
            'title' => 'required',
            'meta_title' => 'required',
            'email' => 'required|email',
            'descriptions' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'date_of_birth' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'linkedin' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }


        $category =  About::find($id);
        $category->heading = $request->heading;
        $category->title = $request->title;
        $category->meta_title = $request->meta_title;
        $category->descriptions = $request->descriptions;
        $category->email = $request->email;
        $category->date_of_birth = $request->date_of_birth;
        $category->phone = $request->phone;
        $category->address = $request->address;
        $category->facebook = $request->facebook;
        $category->twitter = $request->twitter;
        $category->linkedin = $request->linkedin;
        $image = "";
        if ($request->file('image') != "") {
            $file = $request->file('image');
            $image = 'about-' . md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('public/upload/image/', $image);
            $image =  'public/upload/image/' . $image;
            $category->image = $image;
        }
        $category->save();

        return redirect()->route('abouts.view')->with('success','Data Updated SuccessFully');

    }
    public function delete($id){

        $source_link = "";
        $about = About::find($id);
        if (!empty($about)) {
            $source_link = $about->image;
            if (file_exists($source_link)) {
                unlink($source_link);
            }
        }
        $about->delete();

        return redirect()->route('abouts.view')->with('success','Data Delete SuccessFully');
    }
}
