<?php

namespace App\Controller;

use App\Manager\AnnonceManager;

class HomeController{

    public function homePage(){
      
        require_once("./templates/homePage.php");
    }
}