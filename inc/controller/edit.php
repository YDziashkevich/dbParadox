<?php
class EditController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function indexAction()
    {
        $this->view->render("edit/index.php");
    }
    public function editAction()
    {
        $this->view->render("edit/edit.php");
    }
}