<?php

namespace view;

use helpers\Helper;
use Smarty;

include_once "libs/smarty/smarty/libs/Smarty.class.php";

class gamesView
{
    private Smarty $smarty;

    function __construct () {
        $this->smarty = new Smarty();
        $this->smarty->assign('props', Helper::getAppProps());
    }

    function showGameEditForm($game_ID){
        $this->smarty->assign( 'game_ID', $game_ID);
        $this->smarty->display('./templates/editGameForm.tpl');
    }


}