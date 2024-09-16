<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;
use App\Models\Client;
use File;

class ClientController extends Controller
{
    public function View(){
        $file=Client::orderby('id','desc')->get();
        return view('backend.client.view',['file'=>$file]);
    }

    public function Client(){
        return view('backend.client.create');
    }

    public function Store(clientRequest $request){

        $data=$request->except('_token','image');
        $filename = $request->file('image');        
        $file = time() . '-' . 'image' . '.' .$filename->getClientOriginalExtension();
        $destination = public_path('storage/client/');
        $filename-> move($destination, $file);
        $data['image']=$file;
        $data=Client::insert($data);
        return redirect()->route('view.client')->with('message','Data Inserted Successfully');
    }

    public function Edit($id){
        $data=Client::find($id);
        return view('backend.client.edit',['data'=>$data]);
    }

    public function Update(Request $request,$id){
        $data=Client::find($id);
        $data1=$request->except('_token','image');
        if($request->file('image')){
                File::delete(public_path('storage/client/'.$data->image));
                $filename=$request->file('image');
                $file= time(). '-'. 'image'. $filename->getClientOriginalExtension();
                $destination=public_path('storage/client/');
                $filename->move($destination,$file);
                $data1['image']=$file;
        }
        $data->update($data1);
        return redirect()->route('view.client')->with('message', 'Data Updated Successfully');
    }

    public function Delete($id){
        $data=Client::find($id);
        $img_path=public_path('storage/client/').$data->image;
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
