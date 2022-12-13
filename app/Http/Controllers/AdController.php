<?php

namespace App\Http\Controllers;



use App\Models\Ad;
use Illuminate\Http\Request;
use App\Http\Resources\AdResource;
use App\Http\Resources\AdCollection;
 
class AdController extends Controller
{
    public function index()
    {

        $ads = Ad::all();
        return new AdCollection($ads);
              //  return AdResource::collection($ads);
     }
      
        public function show(Ad $ad)
        {
           
           return new AdResource($ad); 
           //return $ad;
        }

}
