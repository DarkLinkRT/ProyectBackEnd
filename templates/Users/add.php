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
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Add User') ?></legend>
                <?php
                    echo $this->Form->control('co_group_id', ['options' => $coGroups]);
                    echo $this->Form->control('user');
                    echo $this->Form->control('password');
                    echo $this->Form->control('name');
                    echo $this->Form->control('last_name');
                    echo $this->Form->control('mother_last_name');
                    echo $this->Form->control('picture');
                    echo $this->Form->control('gender_id', ['options' => $genders]);
                    echo $this->Form->control('domicilio');
                    echo $this->Form->control('cat_locality_id', ['options' => $catLocalities, 'empty' => true]);
                    echo $this->Form->control('last_access', ['empty' => true]);
                    echo $this->Form->control('active');
                    echo $this->Form->control('deleted');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
