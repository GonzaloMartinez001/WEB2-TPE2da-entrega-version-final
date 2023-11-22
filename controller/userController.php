<?php

namespace controller;

include_once '.\model\userModel.php';
include_once '.\model\gameModel.php';
include_once '.\model\companyModel.php';
include_once '.\view\userView.php';

use helpers\Helper;
use model\userModel;
use view\userView;

class userController
{
    private userModel $viewModel;
    private userView $view;

    function __construct()
    {
        $this->userModel = new userModel;
        $this->userView = new userView();
    }

    function showGamePanel() {
        if(Helper::isLogged())
            $this->userView->showGamePanel();


    }

    function login(){
        if(!Helper::isLogged()) {
            $this->userView->showLogin();
            $this->showGamePanel();

        }
        else
            header('Location: ' . BASE_URL . 'home');
    }

    function loginUser(){
        $username = $_POST ['username'];
        $password = $_POST ['password'];
        $user = $this->userModel->getUserByName($username);
        if (isset($user)){
            if (password_verify($password , $user[0]['password'])){
                session_start();
                $_SESSION['username'] = $username;
                $_SESSION['login'] = true;
                header('Location: ' . BASE_URL . 'adminPanel');
            }
            else
                $this->userView->showLogin();
        }
    }

    function logout(){
        session_start();
        session_destroy();
        header('Location: ' . BASE_URL . 'home');
    }


}
