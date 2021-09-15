<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoMenu $coMenu
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Co Menu'), ['action' => 'edit', $menu->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Co Menu'), ['action' => 'delete', $menu->id], ['confirm' => __('Are you sure you want to delete # {0}?', $menu->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Co Menus'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Co Menu'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="coMenus view content">
            <h3><?= h($menu->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($menu->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Co Menu Id') ?></th>
                    <td><?= h($menu->co_menu_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Icon') ?></th>
                    <td><?= h($menu->icon) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($menu->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Href') ?></th>
                    <td><?= h($menu->href) ?></td>
                </tr>
                <tr>
                    <th><?= __('Position') ?></th>
                    <td><?= $this->Number->format($menu->position) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($menu->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($menu->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $menu->active ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $menu->deleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Co Groups') ?></h4>
                <?php if (!empty($menu->roles)) : ?>
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
                        <?php foreach ($menu->roles as $roles) : ?>
                        <tr>
                            <td><?= h($roles->id) ?></td>
                            <td><?= h($roles->name) ?></td>
                            <td><?= h($roles->description) ?></td>
                            <td><?= h($roles->page) ?></td>
                            <td><?= h($roles->active) ?></td>
                            <td><?= h($roles->deleted) ?></td>
                            <td><?= h($roles->created) ?></td>
                            <td><?= h($roles->modified) ?></td>
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
            <div class="related">
                <h4><?= __('Related Co Menus') ?></h4>
                <?php if (!empty($coMenu->co_menus)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Co Menu Id') ?></th>
                            <th><?= __('Icon') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Href') ?></th>
                            <th><?= __('Position') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($coMenu->co_menus as $coMenus) : ?>
                        <tr>
                            <td><?= h($coMenus->id) ?></td>
                            <td><?= h($coMenus->co_menu_id) ?></td>
                            <td><?= h($coMenus->icon) ?></td>
                            <td><?= h($coMenus->name) ?></td>
                            <td><?= h($coMenus->href) ?></td>
                            <td><?= h($coMenus->position) ?></td>
                            <td><?= h($coMenus->active) ?></td>
                            <td><?= h($coMenus->deleted) ?></td>
                            <td><?= h($coMenus->created) ?></td>
                            <td><?= h($coMenus->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'CoMenus', 'action' => 'view', $coMenus->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'CoMenus', 'action' => 'edit', $coMenus->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'CoMenus', 'action' => 'delete', $coMenus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coMenus->id)]) ?>
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
