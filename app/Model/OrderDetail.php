<?php
class OrderDetail extends AppModel {
    public $name = 'OrderDetail';
    public $hasOne = 'Part';
    public $belongsTo = 'Order';
}
