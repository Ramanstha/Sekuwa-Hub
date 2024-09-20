<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SubcategoryRequest;
use App\Models\Category;
use App\Models\Subcategory;

class SubcategoryController extends Controller
{
    public function View(){
        $file=Category::orderby('id','desc')->get();
        $file=Subcategory::orderby('id','desc')->get();
        return view('backend.menu.subcategory.view',['file'=>$file]);
    }

    public function Subcategory(){
        $category=Category::orderby('id','desc')->get();
        return view('backend.menu.subcategory.create',['category'=>$category]);
    }

    public function Store(SubcategoryRequest $request){

        $data=$request->except('_token');
        $data=Subcategory::insert($data);
        return redirect()->route('view.subcategory')->with('message','Data Inserted Successfully');
    }

    public function Edit($id){
        $data=Subcategory::find($id);
        $category=Category::orderby('id','desc')->get();
        return view('backend.menu.subcategory.edit',['data'=>$data,'category'=>$category]);
    }

    public function Update(Request $request,$id){
        $data=Subcategory::find($id);
        $data1=$request->except('_token');
        $data->update($data1);
        return redirect()->route('view.subcategory')->with('message', 'Data Updated Successfully');
    }

    public function Delete($id){
        $data=Subcategory::find($id);
            $data->delete();
        return redirect()->back()->with('message','Data Deleted Successfully');
    }
}
