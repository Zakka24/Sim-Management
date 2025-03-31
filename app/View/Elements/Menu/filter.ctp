<div class="queryfiltering">
    <fieldset>
        <h3><?php echo __('Set Filter'); ?></h3>
        <?php 
            echo $this->Form->create('Sim', array(
                'id' => 'filterForm', 
                'action' => 'find_filter', 
                'type' => 'post'
            ));
            echo $this->Form->input('phone_number', array('label' => 'Phone Number', 'required' => false, 'autocomplete' => 'off'));
            echo $this->Form->input('User.name', array('label' => 'Full Name', 'required' => false, 'autocomplete' => 'off'));
            echo $this->Form->input('operator_id', array(
                'label' => 'Sim Operator',
                'options' => $operators,
                'empty' => true,
                'required' => false
            ));
            echo $this->Form->input('state', array(
                'label' => 'State',
                'options' => $states,
                'empty' => true,
                'required' => false
            ));
//            echo $this->Form->end('Submit');
        ?>
    </fieldset>
</div>
<div class="chiudi"></div>
