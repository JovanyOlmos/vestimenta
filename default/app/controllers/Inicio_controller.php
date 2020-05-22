<?php

class InicioController extends AppController
{

    public function index()
    {
        $this->elementos = (new categoria)->find();
    }

    public function contactus()
    {

    }

    public function faq()
    {

    }

    public function aboutus()
    {

    }

    public function login()
    {
 
    }

    public function signup()
    {
 
    }

    public function compras()
    {
 
    }
}
