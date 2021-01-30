<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function GuzzleHttp\Promise\all;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    her yerden erişimi sağlamak için

    protected  $appends = [
        'getParentsTree',
    ];



    public static function getParentsTree($category, $title){
        if ($category->parent_id ==0){
            return $title;
        }
        $parent = Category::find($category->parent_id);
        $title=$parent->title . ' >> '. $title;

        return CategoryController::getParentsTree($parent,$title);
    }
    //static yapmamızın sebebi başka yerlerden çağırmayı sağlayabilmektir




    public function index()
    {
//        $datalist = DB::table('categories')->get();

        $datalist= Category::with('children')->get();
        return view('admin.categoryList', ['datalist' => $datalist]);
    }





    public function add()
    {
        //
        $datalist = DB::table('categories')->get()->where('parent_id', 0);
//        print_r($datalist);
//        exit();
        return view('admin.category_add', ['datalist' => $datalist]);
    }




    /**
     * Show the form for creating a new resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
//        echo $name = $request->input('title');

        DB::table('categories')->insert([
            'parent_id' => $request->input('parent_id'),
            'title' => $request->input('title'),
            'keyboards' => $request->input('keyboards'),
            'description' => $request->input('description'),
            'slug' => $request->input('slug'),
            'status' => $request->input('status')

        ]);

        return redirect()->route('admin_categoryList');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category, $id)
    {
        $data= Category::find($id);
//        $datalist = DB::table('categories')->get()->where('parent_id', 0);
        $datalist= Category::with('children')->get();
        return view('admin.category_edit', ['data' =>$data, 'datalist' => $datalist]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Category::find($id);



        $data->parent_id = $request->input('parent_id');
        $data->title = $request->input('title');
        $data->keyboards = $request->input('keyboards');
        $data->description = $request->input('description');
        $data->slug = $request->input('slug');
        $data->status = $request->input('status');

        $data->save();

        return redirect()->route('admin_categoryList');
    }

    /**
     * Remove the specified resource from storage.
     *
     *
     * @return \Illuminate\Http\Response
     * @param \App\Models\Category $category
     */
    public function destroy(Category $category, $id)
    {
        DB::table('categories')->where('id', '=', $id)->delete();
        return redirect()->route('admin_categoryList');
    }
}
