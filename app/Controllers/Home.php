<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function login(): string
    {
        return view('login');
    }

    public function carrinho(): string
    {
        return view('carrinho');
    }

    public function teste(): string
    {
        return view('teste');
    }
}
