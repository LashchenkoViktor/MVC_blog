<?php

namespace app\controllers;

use app\models\Post;
use app\models\User;
use core\base\Controller;
use core\base\View;
use core\system\Auth;
use core\system\database\Database;
use core\system\database\DatabaseQuery;
use core\system\hasher\PassHasher;

class Main extends Controller
{
    public function action_index()
    {

        $v = new View("main");
        $v->auth=Auth::instance()->isAuth();
        $v->user=Auth::instance()->getCurrentUser();
        $v->setTemplate();
        echo $v->render();
    }

}