<?php

/**
 * Created by PhpStorm.
 * User: hennotaht
 * Date: 7/29/13
 * Time: 21:48
 */
class login extends Controller
{
    public $requires_auth = true;

    function index()
    {
        //session_destroy();
        header('Location: ' . BASE_URL);
    }
} 