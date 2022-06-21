<?php 

namespace App\Controllers\Admin;

class Admin extends BaseController
{
	public function index()
	{
		$session=session();

    	$data=$_SESSION['Username'];
        
     return view('admin',$data);
	}

}