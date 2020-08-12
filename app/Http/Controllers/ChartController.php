<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Channel;
use DB;
class ChartController extends Controller
{
    //
    public function getChart($id){
        $data['list'] = DB::table('channels')->where('id', $id)->get();

        
        return view('backend.chart',$data);
        //return view('backend.chart');
    }
    public function getBarChart($id){
        $data['list'] = DB::table('channels')->where('id', $id)->get();

        
        return view('backend.barchart',$data);
    }
}
