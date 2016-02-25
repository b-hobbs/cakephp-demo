
<h1>Parts</h1>
<?php echo $this->Form->create('Part'); 
    echo $this->Form->input('category', array(
        'options' => array('0' => 'all', '1' => 'software', '2' => 'games', '3' => 'movies')
    ));
    echo $this->Form->end(__('Submit')); 
?>

<div id="flash"></div>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th></th>
    </tr>


    <?php foreach ($parts as $part): ?>
    <tr>
        <td><?php echo $part['Part']['id']; ?></td>
        <td>
            <?php echo $part['Part']['name']; ?>
        </td>
        <td>
            <?php

echo $this->Js->link('Add to cart', array('controller' => 'cart',
'action'     => 'add', $part['Part']['id'], $part['Part']['name']), array('update' => '#flash'));

?>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($part); ?>
</table>