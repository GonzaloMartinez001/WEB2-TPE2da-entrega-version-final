<?php

namespace controller;

include_once '.\model\gameModel.php';
include_once '.\model\companyModel.php';
include_once '.\model\userModel.php';
include_once '.\view\companyView.php';

use view\companyView;
use model\companyModel;

class companyController
{
    private companyModel $companyModel;
    private companyView $companyView;

    function __construct()
    {
        $this->companyModel = new companyModel();
        $this->companyView = new companyView();
    }

    function home() {
        $games = $this->companyModel->getGamesandCompany();
        $compa = $this->companyModel->getCompany();
        $this->companyView->showHome($games, $compa);
    }

    function homeAdmin() {
        $games = $this->companyModel->getGamesandCompany();
        $compa = $this->companyModel->getCompany();
        $this->companyView->showHomeAdmin($games, $compa);
    }

    function showForm() {
        $company = $this->companyModel->getCompany();
        $this->companyView->showForm($company);
    }

    function showCompanyEditForm($id){
        $this->companyView->showEditCompany($id);
    }

    function addCompany(){
        $companyName = $_POST ['companyName'];
        $this->companyModel->insertCompany($companyName);
        header('Location: ' . BASE_URL . 'adminPanel');
    }

    function deleteCompany($id){
        $this->companyModel->deleteCompany($id);
        header('Location: ' . BASE_URL . 'adminPanel');
    }

    function editCompany(){
        $company_ID = $_POST ['company_ID'];
        $companyName = $_POST ['companyName'];
        $this->companyModel->editCompany($company_ID, $companyName);
        header('Location: ' . BASE_URL . 'adminPanel');
    }

    function getCompany($params = []) {
        $id = $params[':ID'];
        $company = $this->companyModel->getCompanyByID($id);
        if ($company) {

            $this->companyView->response($company);
        } else {
            $this->companyView->response("No se encontró ninguna compañía con el ID proporcionado.", 404);
        }
    }

    function showSelectedCompany(){
        $companies = $this->companyModel->getCompany();
        $this->companyView->selectCompany($companies);
    }

}