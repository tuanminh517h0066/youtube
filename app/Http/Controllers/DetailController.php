<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Channel;
use DB;
class DetailController extends Controller
{
    //
    public function getDetail($id){
        $data['list'] = DB::table('channels')->where('id', $id)->get();

        
        return view('backend.Watchdetail',$data);
    }

    public function postDetail(Request $request, $id){
        
    }
}
