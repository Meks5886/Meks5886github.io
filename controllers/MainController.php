<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Pagination;
use application\models\Admin;

class MainController extends Controller {

    public function indexAction() {

        $this->view->render('Глaвная страница');

    }

    public function uslugiAction() {

        $this->view->render('Услуги');

    }

    public function galerieAction() {

        $this->view->render('Галерея');

    }

    public function newsAction() {
        $pagination = new Pagination($this->route, $this->model->postsCount());
		$vars = [
			'pagination' => $pagination->get(),
			'list' => $this->model->postsList($this->route),
		];
		$this->view->render('Новости', $vars);

    }

    public function postAction() {

        $adminModel = new Admin;
		if (!$adminModel->isPostExists($this->route['id'])) {
			$this->view->errorCode(404);
		}
		$vars = [
			'data' => $adminModel->postData($this->route['id'])[0],
		];
		$this->view->render('Пост', $vars);

    }
    
}
