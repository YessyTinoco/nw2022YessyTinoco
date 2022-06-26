<?php

 namespace Controllers\Mnt;

use Controllers\PublicController;
use Dao\Mnt\Scores as DaoScores;
use Views\Renderer;


class Scores extends PublicController
{
    public function run():void
    {
        // code
        $viewData = array();
        $viewData["Scores"] = DaoScores::getAll();
        error_log(json_encode($viewData));

        Renderer::render('mnt/scores', $viewData);
    }
}

?>
