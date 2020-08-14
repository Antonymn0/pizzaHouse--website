<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function viewAbout() {
        return view('/pages/about'); 
   }

   public function viewContact() {
    return view('/pages/contacts'); 
}

public function viewBlog() {
    return view('/pages/blog'); 
}

}
