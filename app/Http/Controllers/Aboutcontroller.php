<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Products;
class Aboutcontroller  extends Controller
{
    public function show(){
        return view('/about');
            }

            public function newsshow(){
                return view('/news');
                    }
                    public function ennewsshow(){
                        return view('/ennews');
                            }
        





                    public function arshoww(){
                return view('/arab');
                    }
 public function about($id){
$products=Post::findOrFail($id);
   return view('/about',compact("products"));
     }
                            
  public function arabout($id){

    $products=Post::findOrFail($id);
       return view('/arab',compact("products"));
    
    }
    public function news($id)
    {
$products=Products::findOrFail($id);
  return view('/news',compact("products"));
         }
                       
         public function ennews($id)
         {
   $products=Products::findOrFail($id);
       return view('/ennews',compact("products"));
              }
                            

          
}
