<?php


namespace Controller;

use Classes\Services\Router;

/**
 * Class IndexController.
 */
class IndexController extends ControllerAbstract
{
    /**
     * Display the template index.
     */
    public function index()
    {
        $this->vars = ['name' => 'Patrick'];
        $this->render('index.php');
    }

    /**
     * Display the template page.
     */
    public function page()
    {
        $database = $this->getContainer()->get('database');
        $connection = $database->getConnection();
        $router = $this->getContainer()->get('router');
        $id = $router->get(Router::VAR_ID, false);
        if($id){
            $stmt = $connection->prepare('SELECT * FROM test WHERE id=:id');
            $stmt->execute(['id'=>$id]);
            $item = $stmt->fetch();

            $this->vars = ['item' => $item];
        }

        $this->render('page.php');
    }

    /**
     * Display the template list.
     */
    public function list()
    {
        $this->vars = array('items' => ['Patrick', 'Claude', 'Pierre', 'André']);
        $this->render('list.php');
    }

    /**
     * Display the template 404 not found.
     */
    public function notfound()
    {
        $this->render('404.php');
    }
}
