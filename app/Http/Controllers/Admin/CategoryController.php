<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    protected $appends=[
        'getParentTree'
    ];
    public function getParentTree($category,$title){
        if ($category['parent_id']==0)
        {
            return $title;
        }
        $parent= Category::find($category->parent_id);
        $title=$parent->title.'>'.$title;
        return CategoryController::getParentTree($parent,$title);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Category::with('children')->get();

        return view('admin.adminCategory', ['datalist' => $datalist]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $datalist = Category::with('children')->get();
        //print_r($datalist);
        //exit();
        return view('admin.adminCategoryAdd', ['datalist' => $datalist]);
    }
    /**
     * Show the form for creating a new resource.
     *@param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        DB:: table('categories')->insert([
            'parent_id'=>$request->input('parent_id' ),
            'title'=>$request->input('title' ),
            'keywords'=>$request->input('keywords' ),
            'description'=>$request->input('description' ),
            'slug'=>$request->input('slug' ),
            'staatus'=>$request->input('staatus' ),
             ]);
        return redirect()->route('admin_category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category,$id)
    {
        $data= Category::find($id);
        $datalist = Category::with('children')->get();
        return view('admin.adminCategoryEdit',['data'=>$data, 'datalist' => $datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category,$id)
    {
        $data = Category::find($id);
        $data->parent_id=$request->input('parent_id' );
        $data->title=$request->input('title' );
        $data->keywords=$request->input('keywords' );
        $data->description=$request->input('description' );
        $data->slug=$request->input('slug' );
        $data->staatus=$request->input('staatus' );
        $data->save();
        return redirect()->route('admin_category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      DB::table('categories')->where('id','=',$id)->delete();
      return redirect()->route('admin_category');
    }
}
