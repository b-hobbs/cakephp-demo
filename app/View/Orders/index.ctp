<h1>Order History</h1>

<table>
    <tr>
        <th>Previous Orders</th>
    </tr>


    <?php foreach ($orders as $order): ?>
    <tr>
        <td>
			<?php echo $this->Html->link($order['Order']['id'], array('controller' => 'orders', 'action' => 'show', $order['Order']['id'])) ?>
		</td>
        
   
    </tr>
    <?php endforeach; ?>
    <?php unset($order); ?>
</table>