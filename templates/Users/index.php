<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>

<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Usuarios</h2>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <?= $this->Html->link('Inicio',$IndexPage,['escape'=>false]) ?>
                        </li>
                        <li class="breadcrumb-item active">Usuarios
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content-body">
    <!-- Basic Tables start -->
    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="row col-12">
                <?= $this->Html->link('<button type="button" class="btn btn-flat-primary border-primary text-primary mr-1 mb-1 waves-effect waves-light"><span><i class="feather icon-plus"></i> Nuevo </span></button>', ['action' => 'add'], ['escape'=> false]) ?>
                <!-- < ?= $this->Html->link('<button type="button" class="btn btn-outline-danger mr-1 mb-1 waves-effect waves-light">Ver Inactivos</button>', ['action' => 'inactives'], ['escape'=> false]) ?> -->
            </div>
            <p class="card-text">Administra los usuarios que tienen acceso al sistema.</p>
            <!-- Lista de usuarios -->
            <div class="row">
                <?php foreach ($users as $user): ?>
                    <div class="col-xl-4 col-md-6 col-sm-12 profile-card-1">
                        <div class="card" style="height: 329.188px;">
                            <div class="card-header mx-auto">
                                <div class="avatar avatar-xl">
                                    <img class="img-fluid" src="<?= hasPic($user->id) ? $this->Url->Image('/files/userfiles/'.$userData["id"].'/picture/200.jpg') : $this->Url->Image('/files/default/defaultpic.jpg') ?>" alt="img placeholder">
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body text-center">
                                    <h4><?= $user->name . " " . $user->last_name ?></h4>
                                    <p class=""> <i class="feather <?= $user->role->icon ?> text-<?= $user->role->color_icon ?>"></i> <?= $user->role->name ?></p>
                                    <div class="card-btns d-flex justify-content-between">
                                        <?= $this->Html->link('<button class="btn gradient-light-primary waves-effect waves-light">Editar</button>', ['action' => 'edit', $user->id],['escape'=>false]) ?>
                                        <?= $this->Html->link('<button class="btn btn-outline-danger waves-effect waves-light">Eliminar</button>', [ $user->id],['escape'=>false,  'data-toggle'=>'modal', 'data-target' =>'#deletedata' . $user->id]) ?>
                                    </div>
                                    <hr class="my-2">
                                    <div class="d-flex justify-content-between">
                                        <div class="float-left">
                                            Creación : <?= $user->created ?>
                                        </div>
                                        <div class="float-right">
                                            <?= $user->active == 1 ? '<i class="fa fa-circle font-small-3 text-success mr-50"></i> Activo' : '<i class="fa fa-circle font-small-3 text-danger mr-50"></i> Inactivo' ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal text-left" id="deletedata<?= $user->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel6" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel6">Eliminando <?= $user->name . " " . $user->last_name ?></h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                        ¿Realmente desea eliminar de manera permanente este registro del sistema?
                                        </p>
                                        <div class="alert alert-danger" role="alert">
                                            Eliminar un usuario, evitará que pueda iniciar de nuevo en este sistema.
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancelar</button>
                                        <?= $this->Html->link('<button type="button" class="btn btn-primary">Aceptar</button>', ['action' => 'delete', $user->id],['escape' => false]) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- END:: MODAL -->
                <?php endforeach; ?>
            </div>
            <!-- Lista -->
        </div>
    </div>
    <!-- Basic Tables end -->
</div>

<?php

 function hasPic($id){
    $hasPic = false;
    if( is_file( WWW_ROOT . 'files' . DS . 'userfiles' . DS .  $id . DS . 'picture' . DS . 'pic.jpg') ){
        $hasPic = true;
    }
    return $hasPic;
 }

?>


<?php /*
<div class="users index content">
    <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Users') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('co_group_id') ?></th>
                    <th><?= $this->Paginator->sort('user') ?></th>
                    <th><?= $this->Paginator->sort('password') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('last_name') ?></th>
                    <th><?= $this->Paginator->sort('mother_last_name') ?></th>
                    <th><?= $this->Paginator->sort('gender_id') ?></th>
                    <th><?= $this->Paginator->sort('cat_locality_id') ?></th>
                    <th><?= $this->Paginator->sort('last_access') ?></th>
                    <th><?= $this->Paginator->sort('active') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= h($user->id) ?></td>
                    <td><?= $user->has('co_group') ? $this->Html->link($user->co_group->name, ['controller' => 'CoGroups', 'action' => 'view', $user->co_group->id]) : '' ?></td>
                    <td><?= h($user->user) ?></td>
                    <td><?= h($user->password) ?></td>
                    <td><?= h($user->name) ?></td>
                    <td><?= h($user->last_name) ?></td>
                    <td><?= h($user->mother_last_name) ?></td>
                    <td><?= $user->has('gender') ? $this->Html->link($user->gender->name, ['controller' => 'Genders', 'action' => 'view', $user->gender->id]) : '' ?></td>
                    <td><?= $user->has('cat_locality') ? $this->Html->link($user->cat_locality->name, ['controller' => 'CatLocalities', 'action' => 'view', $user->cat_locality->id]) : '' ?></td>
                    <td><?= h($user->last_access) ?></td>
                    <td><?= h($user->active) ?></td>
                    <td><?= h($user->deleted) ?></td>
                    <td><?= h($user->created) ?></td>
                    <td><?= h($user->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
*/