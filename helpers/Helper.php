<?php

namespace helpers;

class Helper
{

    function __construct()
    {

    }

    public static function isLogged() {
        session_start();
        if (isset($_SESSION['username'])) {
            session_abort();
            return true;
        } else {
            session_abort();
            return false;
        }
    }

    public static function getAppProps(){
        session_start();
        $props=[];
        $props['islogged']= isset($_SESSION['login']);
        $props['username']= Isset($_SESSION['username'])? $_SESSION["username"]:"invitado";
        $props ['pass']=isset($_SESSION['login']);
        //voy a necesitar mas cosas jaja



        session_abort();
        return $props;


    }
}