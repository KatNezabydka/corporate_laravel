<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends AdminController
{
    public function __construct()
    {
        parent::__construct();
       //переопределяем свойство template - имя шаблона, которое используется для главной страницы
        $this->template = env('THEME').'.admin.index';
    }

    public function index(){
        $this->title = 'Панель администратора';

        return $this->renderOut();
    }
}
