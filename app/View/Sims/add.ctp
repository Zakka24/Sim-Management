<?php
    echo $this->Html->css('../../../office/mao/css/select2.min', array('inline' => false));
    echo $this->Html->css('../../../office/mao/css/my_select2', array('inline' => false));

    echo $this->Html->script('../../../office/mao/js/select2.min');
?>

<div class="sims form">
    <?php echo $this->Form->create('Sim'); ?>
    <fieldset>
            <legend><?php echo __('Add Sim'); ?></legend>
    <?php
            echo $this->Form->input('operator_id', array(
                    'label' => 'Operators',
                    'type' => 'select',
                    'options' => $operators,
                    'empty' => true
                ));
            echo $this->Form->input('profile_id', array('autocomplete' => 'off', 'empty' => true));
            echo $this->Form->input('iccid', array('type' => 'text', 'autocomplete' => 'off'));
            echo $this->Form->input('phone_number', array('autocomplete' => 'off'));
            echo $this->Form->input('pin', array('autocomplete' => 'off'));
            echo $this->Form->input('puk', array('autocomplete' => 'off'));
            echo $this->Form->input('user_id', array(
                    'label' => 'Full Name',
                    'type' => 'select',
                    'empty' => true,
                    'options' => $users,
                ));
            echo $this->Form->input('company_id', array(
                'label' => 'Billing Company',
                'type' => 'select',
                'empty' => true,
                'options' => $companies,
            ));
            echo $this->Form->input('location_id', array(
                'label' => 'Location',
                'type' => 'select',
                'empty' => true,
                'options' => $locations,
            ));
            echo $this->Form->input('note', array('autocomplete' => 'off'));
            echo $this->Form->input('state', array(
                    'label' => 'State',
                    'value' => 0,
                    'default' => 'disponibile',
                ));
    ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>

<?php echo $this->element('Menu/main_menu'); ?>


<script>
    $(document).ready(function() { 
        // Search for user list
        $('#SimUserId').select2({
            placeholder: 'Select from the list',
            maximumInputLength: 255,
            tags: false,
            allowClear: true
        });
        // Search for company list
        $('#SimCompanyId').select2({
            placeholder: 'Select from the list',
            maximumInputLength: 255,
            tags: false,
            allowClear: true
        });
   
        // Search for location list
        $('#SimLocationId').select2({
            placeholder: 'Select from the list',
            maximumInputLength: 255,
            tags: false,
            allowClear: true
        });
        
        // update billing company AJAX
        $('#SimUserId').on('change', function(){
            const userId = $(this).val();
            if(userId){
                $.ajax({
                    url: '<?php echo $this->Html->url(array('controller' => 'Sims', 'action' => 'getBillingCompany'));?>/' + userId,
                    method: 'GET',
                    success: function(response){
                        try{
                            const data = JSON.parse(response);
                            if(data.company_id){
                                $('#SimCompanyId').val(data.company_id).trigger('change');
                            }
                            else{
                                $('#SimCompanyId').val('').trigger('change');
                            }
                        }
                        catch(e){
                            console.error('Invalid JSON response:', response);
                            alert('Unexpected response from server. Please try again.');
                        }
                    },
                    error: function(status, error){
                        console.error('AJAX Error:', status, error);
                        alert('Error retrieving billing company. Please try again.');
                    }
                });
            }
            else{
                $('#SimCompanyId').val('').trigger('change');
            }
        });
    });    
</script>