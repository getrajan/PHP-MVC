<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;

class SiteController extends Controller
{

    public function home()
    {
        $params = [
            "name" => "Guman Singh Karki"
        ];
        return $this->render('home', $params);
    }

    public function contact()
    {
        return $this->render('contact');
    }

    public function handleContact(): string
    {
        return "Handling summited data";
    }
}