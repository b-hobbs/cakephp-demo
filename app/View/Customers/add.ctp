<div class="users form">
<?php echo $this->Form->create('Customer'); ?>
    <fieldset>
        <legend><?php echo __('Add Customer'); ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>