<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cars;
use App\Models\Category;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        $datalist=Cars::select('id','title','description','model','image','gear_type','price', 'slug')-> where('status','False')->orderByDesc('id')->get();
        $reservations= Reservation::all();
//        dd($datalist);
        return view('admin.index',['datalist'=>$datalist, 'reservations' =>$reservations]);
    }
}
