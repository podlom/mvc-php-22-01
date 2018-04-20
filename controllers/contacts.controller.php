<?php

class ContactsController extends Controller
{
    public function __construct($data = array())
    {
        parent::__construct($data);
        $this->model = new Contact();
    }

    public function index()
    {
        if (!empty($_POST)) {
            $this->model->save($_POST);
        }

        echo $this->model->getErrors();
    }
}