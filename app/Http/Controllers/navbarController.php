<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Views\Composers\MultiComposer;
use Illuminate\View\View;

class navbarController extends Controller
{
    public function getName(){
        //$user="Username";
        //$user=DB::select('select name from users where id=?',[7]);

        //View::composer(['sys_admin_dashboard','partials.navbar_two'],MultiComposer::class);

        //dd($user);
    }
    
}
