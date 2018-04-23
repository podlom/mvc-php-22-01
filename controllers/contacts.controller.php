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
            if ($this->model->save($_POST)) {
                Session::setFlash('Thank you! Your message was sent successfully!');
            }
        }

        echo $this->model->getErrors();
    }

    public function admin_index()
    {
        $this->data = $this->model->getList();
    }
}