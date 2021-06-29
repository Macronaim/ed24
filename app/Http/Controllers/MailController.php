<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class MailController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function Index()
    {
        $data = "A Test";
        return $data;
    }
    public function HandleEntry()
    {
        $request = $_POST;
        $name = $request['nom'];
        $email = $request['email'];
        $content = "";

        foreach ($request as $key => $value) {
            if((substr($key, 0, 1) != "_") && ($key != "g-recaptcha-response")) {
                if (strpos($key,'_') !== false) {
                $key = str_replace('_', ' ', $key);
                }
                if(!empty($value)){
                $content = $content.'<tr>
                <th scope="row">'.$key.'</th>
                <td>'.$value.'</td>
                </tr>';
                }
            }
        }
        $htmlContent = '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title></title>
            <style>

        h1{
        font-size: 30px;
        color: #fff;
        text-transform: uppercase;
        font-weight: 300;
        text-align: center;
        margin-bottom: 15px;
        }
        table{
        width:100%;
        table-layout: fixed;
        }
        .tbl-header{
        background-color: rgba(255,255,255,0.3);
        }
        .tbl-content{
        min-height:300px;
        margin-top: 0px;
        border: 1px solid rgba(255,255,255,0.3);
        }
        th{
        padding: 20px 15px;
        text-align: left;
        font-weight: 500;
        font-size: 12px;
        color: #fff;
        text-transform: uppercase;
        }
        td{
        padding: 15px;
        text-align: left;
        vertical-align:middle;
        font-weight: 300;
        font-size: 12px;
        color: #fff;
        border-bottom: solid 1px rgba(255,255,255,0.1);
        }
        td a{
        color: #fff !important;
        text-decoration: none;
        }
        * {
        color:#fff}


        /* demo styles */

        @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
        section{
        overflow-x: hidden;
        padding: 50px;
        background: -webkit-linear-gradient(left, #4A1C40, #9E3C89);
        background: linear-gradient(to right, #4A1C40, #9E3C89);
        font-family: "Roboto", sans-serif;
        margin: 50px;
        }


        /* follow me template */
        .made-with-love {
        margin-top: 40px;
        padding: 10px;
        clear: left;
        text-align: center;
        font-size: 10px;
        font-family: arial;
        color: #fff;
        }
        .made-with-love i {
        font-style: normal;
        color: #F50057;
        font-size: 14px;
        position: relative;
        top: 2px;
        }
        .made-with-love a {
        color: #fff;
        text-decoration: none;
        }
        .made-with-love a:hover {
        text-decoration: none;
        }
        a[href] {
        color:#fff !important;
        }
        </style>
        </head>
        <body>
        <section>
        <h1>DEVIS</h1>
        <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
            <thead>
            <tr>
                <th>Key</th>
                <th>Value</th>
            </tr>
            </thead>
        </table>
        </div>
        <div class="tbl-content">
        <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
            '.$content.'
            </tbody>
        </table>
        </div>
        </section>
        <script>
        </script>
        </body>
        </html>';
        // $htmlContent = include("mailtemplate.php");
        $message = $request['message'];
        $to = "abderrahmane.callcenterconcept@gmail.com";
        $subject = "Devis";
        $sender = "ed24@ed24.elderkali.site";
        $senderName = "ED Concept";

        // Set content-type header for sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n"; 
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
        
        // Additional headers 
        $headers .= "From: ".$sender." \r\n";
        // $headers .= 'Cc: ed24@ed24.elderkali.site' . "\r\n"; 
        // $headers .= 'Bcc: ed24@ed24.elderkali.site' . "\r\n"; 

        //$mailheader = "From: $sender \r\n";
        // mail($to, $subject, $htmlContent, $headers) or die("Error!");
        // echo "thank you";
        $sent = mail($to, $subject, $htmlContent, $headers);
        if($sent){
            return response()->json("Merci de nous avoir contactés, nous vous répondrons dans les plus brefs délais.");
            //return "Merci de nous avoir contactés, nous vous répondrons dans les plus brefs délais.";
        }
        else{
            return response()->json("Pardon! Votre soumission de formulaire a échoué.");
            // return "Pardon! Votre soumission de formulaire a échoué.";
        }
    }
}