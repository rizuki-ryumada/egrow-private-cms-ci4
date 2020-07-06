<?php 
namespace App\Controllers;

// use CodeIgniter\Controller;

class Admin extends _backend{
    public function index(){
        
        return view('backend/login_v');
    }

    public function testHash(){
        $password_string = 'qwerty';
        $password = password_hash($password_string, PASSWORD_ARGON2I);

        print_r($password);

        echo"<br/>";
        echo"<br/>";
        if(password_verify($password_string, $password)){
            echo"password is valid";
        } else {
            echo"password is invalid";
        }
    }
}