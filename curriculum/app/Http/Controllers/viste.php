<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viste extends Controller
{
   
   
   
     public function soccorritore () {
        return view('soccorritore');}


        public function developer () {
                return view('welcome');}

}
