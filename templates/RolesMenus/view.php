<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoGroupsCoMenu $coGroupsCoMenu
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Co Groups Co Menu'), ['action' => 'edit', $coGroupsCoMenu->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Co Groups Co Menu'), ['action' => 'delete', $coGroupsCoMenu->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coGroupsCoMenu->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Co Groups Co Menus'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Co Groups Co Menu'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="coGroupsCoMenus view content">
            <h3><?= h($coGroupsCoMenu->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($coGroupsCoMenu->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Co Group') ?></th>
                    <td><?= $coGroupsCoMenu->has('co_group') ? $this->Html->link($coGroupsCoMenu->co_group->name, ['controller' => 'CoGroups', 'action' => 'view', $coGroupsCoMenu->co_group->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Co Menu') ?></th>
                    <td><?= $coGroupsCoMenu->has('co_menu') ? $this->Html->link($coGroupsCoMenu->co_menu->name, ['controller' => 'CoMenus', 'action' => 'view', $coGroupsCoMenu->co_menu->id]) : '' ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
