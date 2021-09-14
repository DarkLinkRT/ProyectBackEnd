<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Co Group') ?></th>
                    <td><?= $user->has('co_group') ? $this->Html->link($user->co_group->name, ['controller' => 'CoGroups', 'action' => 'view', $user->co_group->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= h($user->user) ?></td>
                </tr>
                <tr>
                    <th><?= __('Password') ?></th>
                    <td><?= h($user->password) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($user->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($user->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mother Last Name') ?></th>
                    <td><?= h($user->mother_last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gender') ?></th>
                    <td><?= $user->has('gender') ? $this->Html->link($user->gender->name, ['controller' => 'Genders', 'action' => 'view', $user->gender->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Cat Locality') ?></th>
                    <td><?= $user->has('cat_locality') ? $this->Html->link($user->cat_locality->name, ['controller' => 'CatLocalities', 'action' => 'view', $user->cat_locality->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Access') ?></th>
                    <td><?= h($user->last_access) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($user->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($user->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $user->active ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $user->deleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Picture') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($user->picture)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Domicilio') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($user->domicilio)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
