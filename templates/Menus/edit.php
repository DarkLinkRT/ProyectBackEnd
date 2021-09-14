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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $coMenu->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $coMenu->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Co Menus'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="coMenus form content">
            <?= $this->Form->create($coMenu) ?>
            <fieldset>
                <legend><?= __('Edit Co Menu') ?></legend>
                <?php
                    echo $this->Form->control('co_menu_id');
                    echo $this->Form->control('icon');
                    echo $this->Form->control('name');
                    echo $this->Form->control('href');
                    echo $this->Form->control('position');
                    echo $this->Form->control('active');
                    echo $this->Form->control('deleted');
                    echo $this->Form->control('co_groups._ids', ['options' => $coGroups]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>