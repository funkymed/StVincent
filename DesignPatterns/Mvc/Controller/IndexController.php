<?php


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
