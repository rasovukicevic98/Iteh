<?php

namespace App\Http\Controllers;


use App\Models\Ad;
use Illuminate\Http\Request;
use App\Http\Resources\AdResource;
class AdTestController extends Controller
{

        public function index()
        {

            $ads = Ad::all();
            return $ads;
        }
      
        public function show (Ad $ad)
        {
            //$ad = Ad::find($id);
           
           //return $ad;

           return new AdResource($ad); 

        }

}
