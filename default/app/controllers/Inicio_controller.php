<?php

class InicioController extends AppController
{

    public function index()
    {
        $this->elementos = (new categoria)->find();
    }

    public function contactanos()
    {

    }

    public function faq()
    {

    }

    public function sobre()
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
