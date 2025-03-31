<div class="sims form">
    <?php echo $this->Form->create('Operator'); ?>
    <fieldset>
            <legend><?php echo __('Edit Operator'); ?></legend>
    <?php
            echo $this->Form->input('id', ['type' => 'hidden']);
            echo $this->Form->input('name', array('autocomplete' => 'off'));
    ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
    
</div>

<?php echo $this->element('Menu/main_menu'); ?>