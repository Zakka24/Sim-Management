<div class="sims index">
    <h2><?php echo __('Operators'); ?></h2>
    <div id="operators_table">
        <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?php echo $this->Paginator->sort('name'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody id="operators">
        <?php foreach ($operators as $operator): ?>
        <tr>
            <td><?php echo h($operator['Operator']['name']); ?></td>
            <td class="actions">
                <?php echo $this->Html->link(__('Edit'), ['action' => 'edit', $operator['Operator']['id']]); ?>
                <?php // echo $this->Form->postLink(__('Delete'), ['action' => 'delete', $operator['Operator']['id']], ['confirm' => __('Are you sure you want to delete # %s?', $operator['Operator']['name'])]); ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

    </div>
</div>

<?php echo $this->element('Menu/main_menu'); ?>