<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoGroupsCoPermission $coGroupsCoPermission
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Co Groups Co Permission'), ['action' => 'edit', $coGroupsCoPermission->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Co Groups Co Permission'), ['action' => 'delete', $coGroupsCoPermission->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coGroupsCoPermission->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Co Groups Co Permissions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Co Groups Co Permission'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="coGroupsCoPermissions view content">
            <h3><?= h($coGroupsCoPermission->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($coGroupsCoPermission->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Co Group') ?></th>
                    <td><?= $coGroupsCoPermission->has('co_group') ? $this->Html->link($coGroupsCoPermission->co_group->name, ['controller' => 'CoGroups', 'action' => 'view', $coGroupsCoPermission->co_group->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Co Permission') ?></th>
                    <td><?= $coGroupsCoPermission->has('co_permission') ? $this->Html->link($coGroupsCoPermission->co_permission->name, ['controller' => 'CoPermissions', 'action' => 'view', $coGroupsCoPermission->co_permission->id]) : '' ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
