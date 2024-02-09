<?php

namespace App\Controller;

use App\Controller\AppController;

class ElfinderController extends AppController
{
    public function index()
    {
        $this->viewBuilder()->disableAutoLayout();
    }


    public function connect() {
        $this->autoRender = false;
        require dirname(__DIR__) . '/lib/elfinder/connector.php';
    }
}
