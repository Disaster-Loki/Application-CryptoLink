<?php

namespace crypto\controller;
use crypto\core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return $this->render("home");
    }
}
