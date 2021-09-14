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
            <?= $this->Html->link(__('List Co Groups Co Menus'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="coGroupsCoMenus form content">
            <?= $this->Form->create($coGroupsCoMenu) ?>
            <fieldset>
                <legend><?= __('Add Co Groups Co Menu') ?></legend>
                <?php
                    echo $this->Form->control('co_group_id', ['options' => $coGroups]);
                    echo $this->Form->control('co_menu_id', ['options' => $coMenus]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
