<div id="main_menu" class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Sim List'), array('controller' => 'sims', 'action' => 'index'), array('class' => ($this->params['controller'] == 'sims' && $this->params['action'] == 'index') ? "selected" : "" , 'escape' => false)); ?></li>
        <?php if($this->params['controller'] == 'sims') echo $this->element('/main_menu/crud'); ?>
        
        <?php if(($this->action == 'index') && ($this->params['controller'] == 'sims')){ echo '<ul><li>'.$this->element('Menu/filter').'</li><li>&nbsp;</li></ul>'; } ?>
            <!-- Settings -->
        <?php 
            if($this->params['controller'] == 'sims') {
                $display = 'none';
            } else {
                $display = 'block';
        ?>
                <script>
                    $("li #toggle_settings").addClass('selected');
                </script>
        <?php 
            }
        ?>
        <li><a href="#" id="toggle_settings"><h4><?php echo __('Settings'); ?></h4></a></li>
        <ul id="settings" style="display: <?php echo $display; ?>" > 
            <li><?php echo $this->Html->link(__('Operators'), array('controller' => 'operators', 'action' => 'index'), array('class' => ($this->params['controller'] == 'operators' && ($this->params['action'] == 'index' || $this->params['action'] == 'edit')) ? "selected" : "" , 'escape' => false)); ?></li>
            <?php if($this->params['controller'] == 'operators') { echo $this->element('/main_menu/crud'); } ?>
        </ul>
    </ul>

</div>
<script>
    $( "li #toggle_settings" ).click(function() {

        $('ul #settings').toggle();
        $(this).toggleClass('selected');
        return false;

    });
</script>