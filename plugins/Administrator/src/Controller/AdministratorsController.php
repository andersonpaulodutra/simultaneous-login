<?php
// plugins/Administrator/src/Controller/AdministratorsController.php
namespace Administrator\Controller;

use App\Controller\AppController;

class AdministratorsController extends AppController
{

    public function index()
    {	
    	$voteShow = "Oi cara de boi";
    	$this->set('voteShow',$voteShow);
    }
}