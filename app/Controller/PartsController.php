<?php
class PartsController extends AppController {
    public $helpers = array('Html', 'Js', 'Form');

    public function index() {
		if ($this->request->is('post')) {
			$categoryID = $this->request->data['Part']['category'];
			if($categoryID == 0)
				$this->set('parts', $this->Part->find('all'));
			else
				$this->set('parts', $this->Part->find('all', array('conditions' => array('Part.category_id' => $categoryID))));
		}else{
			$this->set('parts', $this->Part->find('all'));
		}
    }
}