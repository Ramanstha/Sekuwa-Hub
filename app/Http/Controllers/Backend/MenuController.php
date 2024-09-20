<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\MenuRequest;
use App\Models\Menu;
use App\Models\Category;
use App\Models\Subcategory;

class MenuController extends Controller
{
    public function View(){
        $file = Menu::with('category')->orderby('id','desc')->get();
        $file = Menu::with('Subcategory')->orderby('id','desc')->get();
        return view('backend.menu.view',['file'=>$file]);
    }

    public function Menu(){
        $category=Category::orderby('id','desc')->get();
        $subcategory=subcategory::orderby('id','desc')->get();
        return view('backend.menu.create',['category'=>$category,'subcategory'=>$subcategory]);
    }

    public function selectprogramCategory(Request $request){
        $category_id = $request->cat_id;  
        $subcategories = SubCategory::where('category_id',$category_id)->get();
        return response()->json([
            'subcategories' => $subcategories
        ]);
    }

    public function Store(MenuRequest $request){

        $data=$request->except('_token');
        $data=Menu::insert($data);
        return redirect()->route('view.menu')->with('message','Data Inserted Successfully');
    }

    public function Edit($id){
        $data=Menu::find($id);
        $category=Category::orderby('id','desc')->get();
        $subcategory=subcategory::orderby('id','desc')->get();
        return view('backend.menu.edit',['data'=>$data,'category'=>$category,'subcategory'=>$subcategory]);
    }

    public function Update(Request $request,$id){
        $data=Menu::find($id);
        $data1=$request->except('_token');
        $data->update($data1);
        return redirect()->route('view.menu')->with('message', 'Data Updated Successfully');
    }

    public function Delete($id){
        $data=Menu::find($id);
        $data->delete();
        return redirect()->back()->with('message','Data Deleted Successfully');
    }
}
