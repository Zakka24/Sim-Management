<div class="sims index">
    <h2><?php echo __('Sims'); ?></h2>
    <div id="sims_table">
        <?php echo $this->element('sims_table'); ?>
    </div>
</div>

<?php echo $this->element('Menu/main_menu'); ?>

<script>
    $(document).ready(function() {
        $('#filterForm :input').on('keyup change', function() {
            $.ajax({
                url: $('#filterForm').attr('action'),
                type: 'POST',
                data: $('#filterForm').serialize(),
                success: function(response) {
                    $('#sims_table').html(response);
                },
                error: function() {
                    alert('An error occurred while fetching the data.');
                }
            });
        });
    });
</script>