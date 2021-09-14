<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoGroupsCoPermission[]|\Cake\Collection\CollectionInterface $coGroupsCoPermissions
 */
?>
<div class="coGroupsCoPermissions index content">
    <?= $this->Html->link(__('New Co Groups Co Permission'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Co Groups Co Permissions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('co_group_id') ?></th>
                    <th><?= $this->Paginator->sort('co_permission_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($coGroupsCoPermissions as $coGroupsCoPermission): ?>
                <tr>
                    <td><?= h($coGroupsCoPermission->id) ?></td>
                    <td><?= $coGroupsCoPermission->has('co_group') ? $this->Html->link($coGroupsCoPermission->co_group->name, ['controller' => 'CoGroups', 'action' => 'view', $coGroupsCoPermission->co_group->id]) : '' ?></td>
                    <td><?= $coGroupsCoPermission->has('co_permission') ? $this->Html->link($coGroupsCoPermission->co_permission->name, ['controller' => 'CoPermissions', 'action' => 'view', $coGroupsCoPermission->co_permission->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $coGroupsCoPermission->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $coGroupsCoPermission->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $coGroupsCoPermission->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coGroupsCoPermission->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
