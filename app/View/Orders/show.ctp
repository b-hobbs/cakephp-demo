<h1>Order</h1>


Order ID: <?php echo $order[0]['o']['id']; ?></br>

Customer Name: <?php echo $order[0]['Customer']['username'] ?>

<table>
    <tr>
        <th>Part</th>
        <th>Category</th>
        <th>Quantity</th>
    </tr>

	<?php $count = 0 ?>
    <?php foreach ($order as $part): ?>
    <tr>
        <td><?php echo $part['Part']['name']; ?></td>
        <td>
            <?php echo $part['Category']['name']; ?>
        </td>
        <td>
			<?php echo $part['OrderDetail']['quantity']; ?>
			<?php $count += $part['OrderDetail']['quantity'] ?>
		</td>
    </tr>
    <?php endforeach; ?>
    <?php unset($part); ?>
</table>
Total parts ordered: <?php echo $count ?>