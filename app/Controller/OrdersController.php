<?php
class OrdersController extends AppController {
     
    function index() {
        $userId = $this->Auth->user('id');
        $orders = $this->Order->find('all', array('conditions' => array('Order.customer_id' => $userId))); 
        $this->set('orders', $orders);
    }

    function create() {
        $this->request->data['Order']['customer_id'] = $this->Auth->user('id');
        $this->Order->saveAssociated($this->request->data);
        $this->Session->delete('cart');
        $this->redirect(array('controller' => 'orders', 'action' => 'show', $this->Order->id));
    }

    function show($id = null) {
        $this->loadModel('Customer');
        //$orders = $this->Order->find('first', array('conditions' => array('Order.id' => $id)));
        $orders = $this->Order->query("SELECT o.id, Customer.username, Part.name, Category.name, OrderDetail.quantity from 
                                        orders as o, customers as Customer, parts as Part, categories as Category, order_details as OrderDetail 
                                        where o.customer_id = Customer.id and o.id = OrderDetail.order_id and OrderDetail.part_id = Part.id and Part.category_id = Category.id and o.id = ".$id.";");
        $user = $this->Customer->find('first', array('conditions' => array('Customer.id' => $this->Auth->user('id'))));
        $this->set('order', $orders);
        $this->set('customer', $user);
    }
}
?>



