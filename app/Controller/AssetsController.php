<?php

class AssetsController extends AppController {

    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');

    function index() {
        $this->set('assets', $this->Asset->find('all'));
    }

    public function add() {
        if ($this->request->is('get')) {
            $assetsTypes = $this->Asset->AssetsType->find('list');
            $this->set(compact('assetsTypes'));
        } else if ($this->request->is('post')) {
            $this->Asset->create();
            if ($this->Asset->save($this->request->data)) {
                $this->Session->setFlash('Asset saved');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to add asset');
            }
        }
    }

    public function edit($id = null) {
        $this->Asset->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Asset->read();
            $assetsTypes = $this->Asset->AssetsType->find('list');
            $this->set(compact('assetsTypes'));
        } else {
            if ($this->Asset->save($this->request->data)) {
                $this->Session->setFlash('Asset has been updated');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to update asset');
            }
        }
    }

    public function view($id = null) {
        $this->Asset->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Asset->read();
            $assetsTypes = $this->Asset->AssetsType->find('list');
            $this->set(compact('assetsTypes'));
        } else {
            if ($this->Asset->save($this->request->data)) {
                $this->Session->setFlash('Asset has been updated');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to update asset');
            }
        }
    }

}

?>