<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Channel;

class HomeController extends Controller
{
    //
    public function getHome(){
        $data['list']= Channel::all();
        return view('backend.basicPage',$data);
    }
    public function postHome(Request $request){

        $this->validate($request,[
            'channelname'=>'required|unique:channels,channel'
        ],[
            'channelname.unique'=>'channel is already added.',
            'channelname.required'=>'Please, enter your channel.'

        ]);


        $user = new Channel;
        $user->channel = $request->channelname;
        $step = explode("/",$request->channelname);
        
        $user->id_channel = $step[4];

        $user->save();
        
        return back()->with('thanhcong','Added successfully !!!');
        //dd($user);
    }
}
