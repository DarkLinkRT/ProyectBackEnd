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
            <?= $this->Html->link(__('List Co Groups Co Permissions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="coGroupsCoPermissions form content">
            <?= $this->Form->create($coGroupsCoPermission) ?>
            <fieldset>
                <legend><?= __('Add Co Groups Co Permission') ?></legend>
                <?php
                    echo $this->Form->control('co_group_id', ['options' => $coGroups]);
                    echo $this->Form->control('co_permission_id', ['options' => $coPermissions]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
