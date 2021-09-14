<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoPermission[]|\Cake\Collection\CollectionInterface $coPermissions
 */
?>
<div class="coPermissions index content">
    <?= $this->Html->link(__('New Co Permission'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Co Permissions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('controller') ?></th>
                    <th><?= $this->Paginator->sort('action') ?></th>
                    <th><?= $this->Paginator->sort('active') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($coPermissions as $coPermission): ?>
                <tr>
                    <td><?= h($coPermission->id) ?></td>
                    <td><?= h($coPermission->name) ?></td>
                    <td><?= h($coPermission->controller) ?></td>
                    <td><?= h($coPermission->action) ?></td>
                    <td><?= h($coPermission->active) ?></td>
                    <td><?= h($coPermission->deleted) ?></td>
                    <td><?= h($coPermission->created) ?></td>
                    <td><?= h($coPermission->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $coPermission->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $coPermission->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $coPermission->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coPermission->id)]) ?>
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
