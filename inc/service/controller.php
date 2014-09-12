<?php
class Controller
{
    protected $view;
    protected $session;
    public function __construct()
    {
        ob_start();
        $this->view = new View();
        $this->session = new SessionModel();

    }
}
