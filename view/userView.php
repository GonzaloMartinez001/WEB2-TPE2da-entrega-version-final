<?php

namespace view;

use helpers\Helper;
use Smarty;

include_once "libs/smarty/smarty/libs/Smarty.class.php";

class userView
{
    private Smarty $smarty;

    function __construct () {
        $this->smarty = new Smarty();
        $this->smarty->assign('props', Helper::getAppProps());
    }

    function showGamePanel(){
        $this->smarty->display('./templates/gamePanel.tpl');
    }

    function showHomeLocation(){
        $this->smarty->display('./templates/header.tpl');
        $this->smarty->display('./templates/footer2.tpl');
    }

    function showLogin(){
        $this->smarty->display('./templates/login.tpl');
    }

}