<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoPermission $coPermission
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Co Permission'), ['action' => 'edit', $coPermission->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Co Permission'), ['action' => 'delete', $coPermission->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coPermission->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Co Permissions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Co Permission'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="coPermissions view content">
            <h3><?= h($coPermission->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($coPermission->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($coPermission->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Controller') ?></th>
                    <td><?= h($coPermission->controller) ?></td>
                </tr>
                <tr>
                    <th><?= __('Action') ?></th>
                    <td><?= h($coPermission->action) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($coPermission->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($coPermission->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $coPermission->active ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $coPermission->deleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($coPermission->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Co Groups') ?></h4>
                <?php if (!empty($coPermission->co_groups)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Page') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($coPermission->co_groups as $coGroups) : ?>
                        <tr>
                            <td><?= h($coGroups->id) ?></td>
                            <td><?= h($coGroups->name) ?></td>
                            <td><?= h($coGroups->description) ?></td>
                            <td><?= h($coGroups->page) ?></td>
                            <td><?= h($coGroups->active) ?></td>
                            <td><?= h($coGroups->deleted) ?></td>
                            <td><?= h($coGroups->created) ?></td>
                            <td><?= h($coGroups->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'CoGroups', 'action' => 'view', $coGroups->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'CoGroups', 'action' => 'edit', $coGroups->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'CoGroups', 'action' => 'delete', $coGroups->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coGroups->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
