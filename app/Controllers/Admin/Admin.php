<?php 

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\UserModel;
class Admin extends BaseController
{
	public function index()
	{
		$session=session();

    	$data=$_SESSION['Username'];

		$users=new UserModel();
		
		$data['users']=json_decode(json_encode($users
											->whereIn('users.is_deleted',[0])
											->paginate()),true);

        
     return view('admin');
	}

}