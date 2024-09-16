<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use File;

class ContactController extends Controller
{
    public function View(){
        $file=Contact::orderby('id','desc')->get();
        return view('backend.contact.view',['file'=>$file]);
    }

    public function Contact(){
        return view('backend.contact.create');
    }

    public function Store(ContactRequest $request){

        $data=$request->except('_token');
        $data=Contact::insert($data);
        return redirect()->route('view.contact')->with('message','Data Inserted Successfully');

    }

    public function Edit($id){
        $data=Contact::find($id);
        return view('backend.contact.edit',['data'=>$data]);
    }

    public function Update(Request $request,$id){
        $data=Contact::find($id);
        $data1=$request->except('_token');
        $data->update($data1);
        return redirect()->route('view.contact')->with('message', 'Data Updated Successfully');
    }

    public function Delete($id){
        $data=Contact::find($id);
        $data->delete();
        return redirect()->back()->with('message','Data Deleted Successfully');
    }
}
