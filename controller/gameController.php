<?php

namespace controller;

include_once '.\model\gameModel.php';
include_once '.\view\gamesView.php';

use model\gameModel;
use view\gamesView;

class gameController
{
    private gameModel $gameModel;
    private gamesView $gamesView;
    function __construct()
    {
        $this->gameModel = new gameModel();
        $this->gamesView = new gamesView();
    }

    function showGameEditForm($id){
        $this->gamesView->showGameEditForm($id);
    }

    function addGame(){      // GAME -------------
        $gameName = $_POST ['gameName'];
        $genre = $_POST ['genre'];
        $year = $_POST ['year'];
        $score = $_POST ['score'];
        $company = $_POST ['company'];
        $this->gameModel->insertGame($gameName,$genre,$year,$score,$company);
        header('Location: ' . BASE_URL . 'adminPanel');
    }


    function deleteGame($id){      // GAME -------------
        $this->gameModel->deleteGame($id);
        header('Location: ' . BASE_URL . 'adminPanel');
    }

    function editGame(){      // GAME -------------
        $game_ID = $_POST ['game_ID'];
        $gameName = $_POST ['gameName'];
        $genre = $_POST ['genre'];
        $year = $_POST ['year'];
        $score = $_POST ['score'];

        $this->gameModel->editGame($game_ID,$gameName, $genre, $year, $score);
        header('Location: ' . BASE_URL . 'adminPanel');
    }

    function getGame($params = []) {
        $id = $params[':ID'];
        $game = $this->gameModel->getGameById($id);
        if ($game) {

            $this->view->response($game);
        } else {
            $this->view->response("No se encontró ningun juego con el ID proporcionado.", 404);
        }
    }

    function getGamesByCompany(){
        $id = $_POST['company_ID'];
        $games = $this->gameModel->getGamesandCompany($id);
        if($games)
            $this->gamesView->showGamesByCompany($games);
    }

}