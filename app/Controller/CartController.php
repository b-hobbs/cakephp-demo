<?php
class cartController extends AppController{
     
var $components = array('RequestHandler');  

        // loop thru products in session
        // get info and make a delete key
        function index()
        {
		$this->loadModel('Part');
		$quantity = null;
		$cart = null;
               
			   if($parts = $this->Session->read('cart')){
				   $cart = $this->Part->find('all', array('conditions' => array('Part.id' => $parts)));
				   foreach($parts as $part){
						$quantity[$part] = 0;
				   }
				   foreach($parts as $part){
						$quantity[$part]++;
				   }
				  
				
				}
                $this->set('cart', $cart);
				$this->set('quantity', $quantity);
        }


        // adds a product id to session
        function add($id = null, $name = null)
        {
		
			$cart = $this->Session->read('cart');
			
			$cart[] = $id;
			if($this->Session->write('cart', $cart)){
				$this->Session->setFlash(__('Added '.$name.' to cart.'));
			}
        }
}
?>