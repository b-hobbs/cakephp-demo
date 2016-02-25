<h1>Cart</h1>
<?php echo $this->Form->create('Orders', array(
    'url' => array('controller' => 'orders', 'action' => 'create')
)); ?>
<table>
    <?php if($cart != null): ?>
     <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Quantity</th>
    </tr>
    
    <?php $i = 0 ?>
    <?php foreach ($cart as $part): ?>
    <tr>
        <td><?php echo $part['Part']['id']; ?></td>
        <?php echo $this->Form->hidden('OrderDetail.'.$i.'.part_id', array('value' => $part['Part']['id'])); ?>
        <td>
            <?php echo $part['Part']['name']; ?>
        </td>
        <td>
            <?php echo $quantity[$part['Part']['id']]; ?>
            <?php echo $this->Form->hidden('OrderDetail.'.$i.'.quantity', array('value' => $quantity[$part['Part']['id']]));?>
        </td>
    </tr>
    <?php $i++ ?>
    <?php endforeach; ?>
    <?php else: ?>
    <tr>No parts in Cart</tr>
    <?php endif; ?>
    <?php unset($part); ?>
</table>
<?php
    
    echo $this->Form->end(__('Checkout')); 
?>