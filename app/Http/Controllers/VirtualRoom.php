<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;

class VirtualRoom extends Controller
{
    public function create()
    {
         $cconfig = array(
            'cloud_name' => env('CLOUDINARY_CLOUD_NAME'),
            'api_key' => env('CLOUDINARY_API_KEY'),
            'api_secret' => env('CLOUDINARY_API_SECRET')
    );
            echo cl_image_tag("Megnaplus.png",array_merge($cconfig,array("transformation"=>array(
                array("height"=>700, "width"=>1366, "crop"=>"scale"),
                array("flags"=>"tiled", "gravity"=>"south", "overlay"=>"gwg.png"),
                array("height"=>700, "overlay"=>"Megnaplus.png", "width"=>1366, "crop"=>"scale")
            ))));
    }
}
