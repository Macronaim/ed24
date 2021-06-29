<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class SecretPageController extends Controller
{
    /**
     * Provision a new web server.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $password = 'admin';
        $bannier = '188';

        if (isset($_POST['password']) && $_POST['password'] == $password) {
            // setcookie("password", $password);
            return view('Pages.Documents-Interns',compact('bannier'));
        } else {
            return view('Pages.Login',compact('bannier'));
        } 
    }
    public function login()
    {
        /* Your password */
        $password = 'admin';
        /* Redirects here after login */
        // $redirect_after_login = 'index.php';

        if (isset($_POST['password']) && $_POST['password'] == $password) {
            // setcookie("password", $password);
            return redirect()->route('documents-interns',compact('bannier'));
            // return view('pages.documents-interns');
            exit;
        } else {
            return view('pages.login',compact('bannier'));
        }
    }
}