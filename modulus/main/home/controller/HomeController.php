<?php 

namespace modulus\main\home\controller;
use modulus\main\home\model\HomeModel;
use core\controller;

class HomeController extends controller
{
    public $home;
    
    public function __construct()
    {
        $this->home = new HomeModel();
    }

    public function index()
    {
        $this->layout('main', 'main', 'home', 'home', []);
    }
}
