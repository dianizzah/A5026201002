<?php
//package pake namespace
namespace App\Http\Controllers;

//import pake use
use Illuminate\Http\Request;

class ViewController extends Controller
{
    function showForm()
    {
        //code load data yang dimuat di form
        return view('htb');
    }

    function resultForm()
    {
        //code load data yang dimuat di form
        return view('htb_cont');
    }

    function formets()
    {
        //code load data yang dimuat di form
        return view('ets');
    }
}
