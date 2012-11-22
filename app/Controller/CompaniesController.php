<?php

class CompaniesController extends AppController {

    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');

    function index() {
        $this->set('companies', $this->Company->find('all'));
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Company->create();
            if ($this->Company->save($this->request->data)) {
                //$this->Session->setFlash('Company saved.');
                $this->redirect(array('action' => 'index'));
            } else {
                //$this->Session->setFlash('Unable to add company.');
            }
        }
    }

    public function edit($id = null) {
        $this->Company->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Company->read();
        } else {
            if ($this->Company->save($this->request->data)) {
                $this->Session->setFlash('Company has been updated.');
                $this->redirect(array('action' => 'index'));
                                
            } else {
                $this->Session->setFlash('Unable to update Company.');
            }
        }
    }

}

?>