<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Crypt;
use Mail;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $result['data']=DB::table('categories')->Paginate(15);  
      return view('admin/categories/categories',$result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin/categories/add-category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
        'category_name'=>'required|unique:categories',
       ]);

        $res=new Category;
        $res->category_name=$request->input('category_name');
        $res->save();
        
        $request->session()->flash('caterr','successfully Added');
        return redirect('admin/categories');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category,$id)
    {
      return view('admin/categories/edit-category')->with('data',Category::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category,$id)
    {

        $res=Category::find($request->id);
        $res->category_name=$request->input('category_name');
        $res->save();
        $request->session()->flash('caterr','Successfull Updated');
        return redirect('admin/categories'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $res=Category::find($id);
        $res->delete();
        $request->session()->flash('caterr','successfully Deleted');
        return redirect('admin/categories'); 
    }
}
