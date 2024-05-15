<?php


namespace App\classes;


class Auth
{
    public $users = [], $email, $password;
//    private $session = session_id();

    public function __construct($post = null)
    {
        if (!empty($post)){
            $this->email = $post['email'];
            $this->password = $post['password'];
        }
        $this->users = [
            0 => [
                'id' => 1,
                'name' => 'User',
                'email' => 'user@user.com',
                'password' => '01234',
            ],
            1 => [
                'id' => 2,
                'name' => 'User1',
                'email' => 'user1@user.com',
                'password' => '12345',
            ],
            2 => [
                'id' => 3,
                'name' => 'User2',
                'email' => 'user2@user.com',
                'password' => '23456',
            ],
        ];
    }
    public function login(){
        foreach ($this->users as $user){
            if ($user['email'] == $this->email && $user['password'] == $this->password){
                session_start();
                $_SESSION['id'] = session_id();
               header('Location: route.php?page=home');
            }
        }
        return 'Email or Password is Invalid.';
    }
    public function logout(){
        session_start();
        unset($_SESSION['id']);
        header('Location: route.php?page=login');
    }
}