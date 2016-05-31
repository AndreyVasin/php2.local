<?php
namespace App\Controlers;

use App\View;

class News
{
  protected $view;

  public function __construct()
  {
    $this->view = new View();
  }

  public function action($action)
  {
    $methodName = 'action' . $action;
    $this->beforeAction();
    return $this->$methodName();
  }

  protected function beforeAction()
  {
  }

  protected function actionIndex()
  {
    $this->view->title = 'Мой крутой сайт';
    $this->view->news = \App\Models\News::findAll();
    echo $this->view->render(__DIR__ . '/../templates/index.php');
  }
}