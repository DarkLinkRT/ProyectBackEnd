<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoMenu[]|\Cake\Collection\CollectionInterface $coMenus
 */
?>

<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Roles Inactivos</h2>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <?= $this->Html->link('Inicio',$IndexPage,['escape'=>false]) ?>
                        </li>
                        <li class="breadcrumb-item active">Roles Inactivos
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
                <?= $this->Html->link('<button type="button" class="btn btn-outline-success mr-1 mb-1 waves-effect waves-light">Ver Activos</button>', ['action' => 'index'], ['escape'=> false]) ?>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Registros Inactivos</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <p class="card-text">Administra los roles que se encuentran no activos en el sistema.</p>
                        <!-- Table with outer spacing -->
                        <div class="table-responsive">
                            <table class="table table-hover-animation">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Estatus</th>
                                        <th>Creación</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($roles as $role): ?>
                                        <tr>
                                            <td> <i class="feather <?= $role->icon ?> text-<?= $role->color_icon ?>"></i> <?= $role->name ?></td>
                                            <td>
                                                <?= $role->active == 1 ? '<i class="fa fa-circle font-small-3 text-success mr-50"></i> Activo' : '<i class="fa fa-circle font-small-3 text-danger mr-50"></i> Inactivo' ?>
                                            </td>
                                            <td>
                                                <?= $role->created ?>
                                            </td>
                                            <td>
                                                <?= $this->Html->link('<span class="action-edit"><i class="feather icon-edit"></i></span>', ['action' => 'edit', $role->id],['escape'=>false]) ?>
                                                <?= $this->Html->link('<span class="action-edit"><i class="feather icon-trash"></i></span>', [ $role->id],['escape'=>false,  'data-toggle'=>'modal', 'data-target' =>'#deletedata' . $role->id]) ?>
                                            </td>
                                        </tr>
                                       <!-- Modal -->
                                       <div class="modal text-left" id="deletedata<?=  $role->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel6" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel6">Eliminando <?= $role->name ?></h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>
                                                                       ¿Realmente desea eliminar de manera permanente este registro del sistema?
                                                                    </p>
                                                                    <div class="alert alert-danger" role="alert">
                                                                        Eliminar un registro en el modulo de Administración, puede ocasionar un mal funcionamiento en el sistema.
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancelar</button>
                                                                    <?= $this->Html->link('<button type="button" class="btn btn-primary">Aceptar</button>', ['action' => 'delete', $role->id],['escape' => false]) ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <!-- END:: MODAL -->
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="paginator">
                            <ul class="pagination url1-links">
                                <?= $this->Paginator->first(' << ' . __(' Primero ')) ?>
                                <?= $this->Paginator->prev(' < ' . __(' Anterior ')) ?>
                                <?= $this->Paginator->numbers() ?>
                                <?= $this->Paginator->next(__( 'Siguiente ') . ' > ') ?>
                                <?= $this->Paginator->last(__(' Último ') . ' >> ') ?>
                            </ul>
                            <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} resultado(s) de {{count}} en total')) ?></p>
                        </div>
                        <!-- -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Basic Tables end -->
</div>
