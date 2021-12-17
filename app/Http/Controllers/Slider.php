<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Redirect;

class Slider extends Controller
{
    
    public function add_slider(){
        return view('admin.add_slider');
    }

    public function all_slider(){
        $all_slider = DB::table('Slider')->get();
        return view('admin.all_slider')->with('all_slider',$all_slider);
    }

    public function save_slider(Request $request){ 
        $data = array();
        $data['SliderName'] = $request->slider_name;
        $data['SliderLink'] = $request->slider_link;
        $data['Img'] = $request->slider_img;
        $data['SliderStatus'] = $request->slider_status;
        DB::table('Slider')->insert($data);
        return view('pages.save_slider');
    }

    public function edit_slider($sliderid){
        $edit_slider = DB::table('Slider')->where('SliderID',$sliderid)->get();
        return view('admin.edit_slider')->with('edit_slider',$edit_slider);
    }

    public function update_slider(Request $request, $sliderid){
        $data = array();
        $data['SliderName'] = $request->slider_name;
        $data['SliderLink'] = $request->slider_link;
        $data['Img'] = $request->slider_img;
        $data['SliderStatus'] = $request->slider_status;
        DB::table('Slider')->where('SliderID',$sliderid)->update($data);
        return Redirect::to('all-slider');
    }


    public function delete_slider($sliderid){ 
        DB::table('Slider')->where('SliderID',$sliderid)->delete();
        return Redirect::to('all-slider');  
    }
}
