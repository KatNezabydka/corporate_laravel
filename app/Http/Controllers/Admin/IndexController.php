<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class IndexController extends AdminController
{
    public function __construct()
    {
        parent::__construct();

        //проверка если у авторизированного пользователя права админа
        //для этого используем сервис провайдер Auth, вызываем фасад Gate
        //Если запрещен доступ к админке, выкидываем его
        if(Gate::denies('VIEW_ADMIN')) {
            abort(403);
        }

       //переопределяем свойство template - имя шаблона, которое используется для главной страницы
        $this->template = env('THEME').'.admin.index';

    }

    public function index(){
        $this->title = 'Панель администратора';

        return $this->renderOut();
    }
}