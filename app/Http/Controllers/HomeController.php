<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Rewiew;
use App\Models\Cars;
use App\Models\Category;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Message;
use App\Models\Review;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public static function categoryList(){
        return Category::where('parent_id', '=', 0,)->with('children')->get();
    }

    public static function countreview($id){
        return Review::where('car_id', $id)->count();
    }

//    public static function avrateview($id){
//        return Review::where('car_id', $id)->average('rate');
//    }

    public static function getsetting(){
        return Setting::first();
    }
    public  function getcar(Request $request){
        $data=Cars::where('title',$request->input('search'))->first();
        return redirect()->route('car',['id'=>$data->id, 'slug'=>$data->slug]);
    }

    public function index(){
        $setting=Setting::first();//first tek satırlık bir veri  aktardığı anlamına gelir
//        print_r($setting);
//        exit();
        $slider=Cars::select('id','title','description','model','image','gear_type','price', 'slug')-> where('status','True')->limit(4)->get();
        $daily=Cars::select('id','title','description','model','image','gear_type','price', 'slug')-> where('status','True')->limit(3)->inRandomOrder()->get();
        $last=Cars::select('id','title','description','model','image','gear_type','price', 'slug')-> where('status','True')->limit(4)->orderByDesc('id')->get();
        $pickes=Cars::select('id','title','description','model','image','gear_type','price', 'slug')-> where('status','True')->limit(4)->inRandomOrder('id')->get();
        $data=[
            'setting' => $setting,
            'slider'=> $slider,
            'daily'=> $daily,
            'last'=> $last
        ];
        return view('home.index', $data);
    }

    public function car($id,$slug){
        $data= Cars::find($id);
        $datalist= Image::where('car_id', $id) ->get();
        $reviews= Image::where('car_id', $id) ->get();
        return view('home.car_detail',['datalist'=>$datalist,'data'=>$data, 'reviews'=>$reviews]);
    }

    public function categorycars($id,$slug){
        $datalist= Cars::where([
                                ['status', 'True'],
                                ['category_id',$id],
                                ])->get();
        $data= Category::find($id);
        return view('home.category_cars', ['datalist'=>$datalist,'data'=>$data]);
    }

    public function login(){

        return view('admin.login');
    }
    public function sendmessage(Request $request){
        $data= new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->save();

        return redirect()->route('contact')->with('success','We got your message. Thanks..');
    }

    public function aboutus(){
        $setting=Setting::first();
        return view('home.about',['setting' => $setting]);
    }
    public function faqs(){
        $datalist= Faq::all();
        return view('home.faq',['datalist'=>$datalist]);
    }
    public function references(){
        $setting=Setting::first();
        return view('home.references',['setting' => $setting]);
    }
    public function contact(){
        $setting=Setting::first();
        return view('home.contact',['setting' => $setting]);
    }



    public function admin_logincheck(Request $request){


        if($request->isMethod('post')){
            $credentials = $request -> only('email', 'password');

            if( Auth::attempt($credentials)){
                $request-> session()->regenerate();

                return redirect()->intended('home');
            }

            return back()->withErrors([
                'email' => 'The provided credential dont match ',
            ]);
        }
        else{
            return view('admin.login');
        }
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
//dont have to redirect to the homepage you can change it
    }
}
