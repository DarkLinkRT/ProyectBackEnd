<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoGroup $coGroup
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Co Group'), ['action' => 'edit', $coGroup->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Co Group'), ['action' => 'delete', $coGroup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coGroup->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Co Groups'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Co Group'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="coGroups view content">
            <h3><?= h($coGroup->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($coGroup->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($coGroup->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Page') ?></th>
                    <td><?= h($coGroup->page) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($coGroup->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($coGroup->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $coGroup->active ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $coGroup->deleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($coGroup->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Co Menus') ?></h4>
                <?php if (!empty($coGroup->co_menus)) : ?>
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
                        <?php foreach ($coGroup->co_menus as $coMenus) : ?>
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
            <div class="related">
                <h4><?= __('Related Co Permissions') ?></h4>
                <?php if (!empty($coGroup->co_permissions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Controller') ?></th>
                            <th><?= __('Action') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($coGroup->co_permissions as $coPermissions) : ?>
                        <tr>
                            <td><?= h($coPermissions->id) ?></td>
                            <td><?= h($coPermissions->name) ?></td>
                            <td><?= h($coPermissions->description) ?></td>
                            <td><?= h($coPermissions->controller) ?></td>
                            <td><?= h($coPermissions->action) ?></td>
                            <td><?= h($coPermissions->active) ?></td>
                            <td><?= h($coPermissions->deleted) ?></td>
                            <td><?= h($coPermissions->created) ?></td>
                            <td><?= h($coPermissions->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'CoPermissions', 'action' => 'view', $coPermissions->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'CoPermissions', 'action' => 'edit', $coPermissions->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'CoPermissions', 'action' => 'delete', $coPermissions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coPermissions->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Users') ?></h4>
                <?php if (!empty($coGroup->users)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Co Group Id') ?></th>
                            <th><?= __('User') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Last Name') ?></th>
                            <th><?= __('Mother Last Name') ?></th>
                            <th><?= __('Picture') ?></th>
                            <th><?= __('Gender Id') ?></th>
                            <th><?= __('Domicilio') ?></th>
                            <th><?= __('Cat Locality Id') ?></th>
                            <th><?= __('Last Access') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($coGroup->users as $users) : ?>
                        <tr>
                            <td><?= h($users->id) ?></td>
                            <td><?= h($users->co_group_id) ?></td>
                            <td><?= h($users->user) ?></td>
                            <td><?= h($users->password) ?></td>
                            <td><?= h($users->name) ?></td>
                            <td><?= h($users->last_name) ?></td>
                            <td><?= h($users->mother_last_name) ?></td>
                            <td><?= h($users->picture) ?></td>
                            <td><?= h($users->gender_id) ?></td>
                            <td><?= h($users->domicilio) ?></td>
                            <td><?= h($users->cat_locality_id) ?></td>
                            <td><?= h($users->last_access) ?></td>
                            <td><?= h($users->active) ?></td>
                            <td><?= h($users->deleted) ?></td>
                            <td><?= h($users->created) ?></td>
                            <td><?= h($users->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
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
