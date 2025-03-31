<table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?php echo $this->Paginator->sort('Operator.operator', 'Operator'); ?></th>
            <th><?php echo $this->Paginator->sort('profile'); ?></th>
            <th><?php echo $this->Paginator->sort('iccid'); ?></th>
            <th><?php echo $this->Paginator->sort('phone_number'); ?></th>
            <th><?php echo $this->Paginator->sort('pin'); ?></th>
            <th><?php echo $this->Paginator->sort('puk'); ?></th>
            <th><?php echo $this->Paginator->sort('billing_company'); ?></th>
            <th><?php echo $this->Paginator->sort('User.name', 'Full Name'); ?></th>
            <th><?php echo $this->Paginator->sort('note'); ?></th>
            <th><?php echo $this->Paginator->sort('state'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody id="sims">
        <?php foreach ($sims as $sim): ?>
        <tr>
            <td><?php echo h($sim['Operator']['name']); ?></td>
            <td><?php echo h($profiles[$sim['Sim']['profile_id']]); ?></td>
            <td><?php echo h($sim['Sim']['iccid']); ?></td>
            <td><?php echo h($sim['Sim']['phone_number']); ?></td>
            <td><?php echo h($sim['Sim']['pin']); ?></td>
            <td><?php echo h($sim['Sim']['puk']); ?></td>
            <td><?php echo h(!empty($sim['Company']['name']) ? $sim['Company']['name'] : ''); ?></td>
            <td><?php echo h(!empty($sim['User']['name']) ? $sim['User']['name'] : ''); ?></td>
            <td><?php echo h($sim['Sim']['note']); ?></td>
            <td><?php echo h($states[$sim['Sim']['state']]); ?></td>
            <td class="actions">
                <?php echo $this->Html->link(__('Edit'), ['action' => 'edit', $sim['Sim']['id']]); ?>
                <?php if($sim['Sim']['state'] != 3) { echo $this->Form->postLink(__('Delete'), ['action' => 'delete', $sim['Sim']['id']], ['confirm' => __('Are you sure you want to delete # %s?', $sim['Sim']['iccid'])]); } ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
