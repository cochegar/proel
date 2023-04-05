<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Support;

class SupportController extends Controller
{
    public function supp(){
        //$support= new Support();
        //dd(Support::all());
        return view('support',['data'=>Support::all()]);
    }

    public function suppInsert(){
        $support= new Support(); 
        

    }
}
