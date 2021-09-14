<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoGroupsCoMenu[]|\Cake\Collection\CollectionInterface $coGroupsCoMenus
 */
?>
<div class="coGroupsCoMenus index content">
    <?= $this->Html->link(__('New Co Groups Co Menu'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Co Groups Co Menus') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('co_group_id') ?></th>
                    <th><?= $this->Paginator->sort('co_menu_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($coGroupsCoMenus as $coGroupsCoMenu): ?>
                <tr>
                    <td><?= h($coGroupsCoMenu->id) ?></td>
                    <td><?= $coGroupsCoMenu->has('co_group') ? $this->Html->link($coGroupsCoMenu->co_group->name, ['controller' => 'CoGroups', 'action' => 'view', $coGroupsCoMenu->co_group->id]) : '' ?></td>
                    <td><?= $coGroupsCoMenu->has('co_menu') ? $this->Html->link($coGroupsCoMenu->co_menu->name, ['controller' => 'CoMenus', 'action' => 'view', $coGroupsCoMenu->co_menu->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $coGroupsCoMenu->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $coGroupsCoMenu->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $coGroupsCoMenu->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coGroupsCoMenu->id)]) ?>
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
