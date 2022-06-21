<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
      $session=session();

      $data=$_SESSION['Username'];
        
     return view('home',$data);
    }
}
