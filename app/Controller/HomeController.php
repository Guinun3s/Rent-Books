<?php

namespace Rentbooks\Controller;

use Rentbooks\Core\Controller;

class HomeController extends Controller{

    public function index(){
        $this->view('inicial');
    }

}