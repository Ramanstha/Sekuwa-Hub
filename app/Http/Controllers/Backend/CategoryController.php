<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function View(){
        $file=Category::orderby('id','desc')->get();
        return view('backend.menu.category.view',['file'=>$file]);
    }

    public function category(){
        return view('backend.menu.category.create');
    }

    public function Store(CategoryRequest $request){

        $data=$request->except('_token');
        $data=Category::insert($data);
        return redirect()->route('view.category')->with('message','Data Inserted Successfully');
    }

    public function Edit($id){
        $data=Category::find($id);
        return view('backend.menu.category.edit',['data'=>$data]);
    }

    public function Update(Request $request,$id){
        $data=Category::find($id);
        $data1=$request->except('_token');
        $data->update($data1);
        return redirect()->route('view.category')->with('message', 'Data Updated Successfully');
    }

    public function Delete($id){
        $data=Category::find($id);
            $data->delete();
        return redirect()->back()->with('message','Data Deleted Successfully');
    }
}
