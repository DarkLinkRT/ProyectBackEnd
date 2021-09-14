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
            <?= $this->Html->link(__('List Co Groups'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="coGroups form content">
            <?= $this->Form->create($coGroup) ?>
            <fieldset>
                <legend><?= __('Add Co Group') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('description');
                    echo $this->Form->control('page');
                    echo $this->Form->control('active');
                    echo $this->Form->control('deleted');
                    echo $this->Form->control('co_menus._ids', ['options' => $coMenus]);
                    echo $this->Form->control('co_permissions._ids', ['options' => $coPermissions]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
