<?php

namespace view;

use helpers\Helper;
use Smarty;

include_once "libs/smarty/smarty/libs/Smarty.class.php";

class companyView
{
    private Smarty $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
        $this->smarty->assign('props', Helper::getAppProps());
    }

    function showHome ($games,$compa) {
        $this->smarty->assign('games',$games);
        $this->smarty->assign('compa', $compa);
        $this->smarty->display('./templates/home.tpl');
    }

    function showAdminPanel($games,$compa){ // ??????????????????????????????
        $this->smarty->assign('games',$games);
        $this->smarty->assign('compa', $compa);
        $this->smarty->display('./templates/adminPanel.tpl');
    }

    function showHomeAdmin ($games,$compa) {
        $this->smarty->assign('games',$games);
        $this->smarty->assign('compa', $compa);
        $this->smarty->display('./templates/adminPanel.tpl');
    }

    function showForm($company){
        $this->smarty->assign('company', $company);
        $this->smarty->display('./templates/formularioJuego.tpl');
    }

    function showEditCompany($company_ID){
        $this->smarty->assign('company_ID', $company_ID);
        $this->smarty->display('./templates/editCompanyForm.tpl');
    }

    function selectCompany($companies)
    {
        $this->smarty->assign('companies' , $companies);
        $this->smarty->display('./templates/selectCompany.tpl');
    }

}
