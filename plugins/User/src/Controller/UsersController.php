<?php
// plugins/User/src/Controller/UsersController.php
namespace User\Controller;

use App\Controller\AppController;

class UsersController extends AppController
{

    public function index()
    {	
    	$voteShow = "Oi cara de boi";
    	$this->set('voteShow',$voteShow);
    	echo $voteShow;
    	exit;
    }
}