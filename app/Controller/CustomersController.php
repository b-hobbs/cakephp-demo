<?php
class CustomersController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
    }

    public function index() {
    }

    public function view($id = null) {
        $this->Customer->id = $id;
        if (!$this->Customer->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('customer', $this->Customer->read(null, $id));
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Customer->create();
            if ($this->Customer->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => 'login'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        }
    }
	


public function login() {
    if ($this->request->is('post')) {
        if ($this->Auth->login()) {
            $this->redirect($this->Auth->redirect());
        } else {
            $this->Session->setFlash(__('Invalid username or password, try again'));
        }
    }
}

public function logout() {
	$this->Session->destroy();
    $this->redirect($this->Auth->logout());
}
}