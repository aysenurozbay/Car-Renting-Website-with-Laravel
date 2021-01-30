<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cars;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Cars::all();

        return view('admin.cars', ['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $datalist = Category::all();
        $datalist=Category::with('children')->get();
        return view('admin.car_add', ['datalist' => $datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= new Cars;
        $data->category_id = $request->input('category_id');
//        $data->id = $request->input('id');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->status = $request->input('status');
        $data->slug = $request->input('slug');
        $data->title = $request->input('title');
        $data->gear_type = $request->input('gear_type');
        $data->detail = $request->input('detail');
        $data->brand = $request->input('brand');
        if ($request->file('image') != null) {
            $data->image = Storage::putFile('images', $request->file('image'));
        } // how to upload file
        $data->price = $request->input('price');
        $data->model = $request->input('model');
        $data->year = $request->input('year');
        $data->type = $request->input('type');
        $data->user_id = Auth::id();
        $data->numberplate = $request->input('numberplate');
        $data->price = $request->input('price');
        $data->save();

        return redirect()->route('admin_cars');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cars  $cars
     * @return \Illuminate\Http\Response
     */
    public function show(Cars $cars)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cars  $cars
     * @return \Illuminate\Http\Response
     */
    public function edit(Cars $cars,$id)
    {
        $data= Cars::find($id);
//        $datalist = Category::all();

        $datalist=Category::with('children')->get();
        return view('admin.car_edit', ['data' =>$data, 'datalist' => $datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cars  $cars
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cars $cars, $id)
    {
        $data = Cars::find($id);

        $data->category_id = $request->input('category_id');
//        $data->id = $request->input('id');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->slug = $request->input('slug');
        $data->title = $request->input('title');
        $data->gear_type = $request->input('gear_type');
        $data->brand = $request->input('brand');
        $data->detail = $request->input('detail');
        $data->price = $request->input('price');

        $data->model = $request->input('model');
        $data->year = $request->input('year');
        $data->type = $request->input('type');
        $data->user_id = Auth::id();
        $data->numberplate = $request->input('numberplate');
        $data->price = $request->input('price');
        $data->status = $request->input('status');
        if ($request->file('image') != null) {
            $data->image = Storage::putFile('images', $request->file('image'));
        }
        $data->save();

        return redirect()->route('admin_cars');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cars  $cars
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cars $cars, $id)
    {
//        DB::table('cars')->where('id', '=', $id)->delete();


        // YADA

        $data =Cars::find($id);

        $data->delete();

        return redirect()->route('admin_cars');
    }
}
