<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SpecialRequest;
use App\Models\Special;
use File;

class SpecialController extends Controller
{
    public function View(){
        $file=Special::orderby('id','desc')->get();
        return view('backend.special.view',['file'=>$file]);
    }

    public function Special(){
        return view('backend.special.create');
    }

    public function Store(SpecialRequest $request){

        $data=$request->except('_token','image');
        $filename = $request->file('image');        
        $file = time() . '-' . 'image' . '.' .$filename->getClientOriginalExtension();
        $destination = public_path('storage/special/');
        $filename-> move($destination, $file);
        $data['image']=$file;
        $data=Special::insert($data);
        return redirect()->route('view.special')->with('message','Data Inserted Successfully');
    }

    public function Edit($id){
        $data=Special::find($id);
        return view('backend.special.edit',['data'=>$data]);
    }

    public function Update(Request $request,$id){
        $data=Special::find($id);
        $data1=$request->except('_token','image');
        if($request->file('image')){
                File::delete(public_path('storage/special/'.$data->image));
                $filename=$request->file('image');
                $file= time(). '-'. 'image'. $filename->getClientOriginalExtension();
                $destination=public_path('storage/special/');
                $filename->move($destination,$file);
                $data1['image']=$file;
        }
        $data->update($data1);
        return redirect()->route('view.special')->with('message', 'Data Updated Successfully');
    }

    public function Delete($id){
        $data=Special::find($id);
        $img_path=public_path('storage/special/').$data->image;
        if(file_exists($img_path) && $data->image!=null){
            unlink($img_path);
            $data->delete();
        }
        else{
            $data->delete();
        }
        return redirect()->back()->with('message','Data Deleted Successfully');
    }
}
