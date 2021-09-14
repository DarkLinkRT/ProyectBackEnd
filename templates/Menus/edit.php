<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoMenu $coMenu
 */
?>

<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Editar Menú</h2>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><?= $this->Html->link('Inicio',$IndexPage,['escape'=>false]) ?>
                        </li>
                        <li class="breadcrumb-item"> <?= $this->Html->link('Menús',['action' => 'index'],['escape'=>false]) ?>
                        </li>
                        <li class="breadcrumb-item active">Editar Menú
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
                <?= $this->Html->link(' <button type="button" class="btn btn-flat-dark border-dark text-dark mr-1 mb-1 waves-effect waves-light"><span><i class="feather icon-x-circle "></i> Cancelar </span></button>', ['action' => 'index'], ['escape'=> false]) ?>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><?= $coMenu->name ?></h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <!-- -->
                        <?= $this->Form->create($coMenu,['class'=>'form form-vertical']) ?>
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Menú Principal</label>
                                            <select class="select2-icons form-control" name="co_menu_id" id="select2-icons">
                                                <option value="">Ninguno</option>
                                                <?php foreach($coMenus as $menu){ ?>
                                                    <?php if($menu->id == $coMenu->co_menu_id){ ?>
                                                        <option selected value="<?= $menu->id ?>" data-icon="feather <?= $menu->icon ?>"><?= $menu->name ?></option>
                                                    <?php } else {?>
                                                        <option value="<?= $menu->id ?>" data-icon="feather <?= $menu->icon ?>"><?= $menu->name ?></option>
                                                    <?php } ?>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Nombre</label>
                                            <input type="text" id="name" class="form-control" name="name" placeholder="Nombre del menú" value="<?= $coMenu->name ?>">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Icono</label>
                                            <input type="text" id="icon" class="form-control" name="icon" placeholder="Clase del icono" value="<?= $coMenu->icon ?>">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Destino</label>
                                            <input type="text" id="href" class="form-control" name="href" placeholder="/Controlador/acción?/" value="<?= $coMenu->href ?>">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Posición</label>
                                            <input type="number" id="position" class="form-control" name="position" placeholder="0" value="<?= $coMenu->position ?>">
                                        </div>
                                    </div>
                                    <div class="col-12" id="divActivo">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Activo</label>
                                            <input type="hidden" id="actives" class="form-control" name="active" placeholder="First Name" value="<?= $coMenu->active ? "1" : "0" ?>">
                                            <div class="custom-control custom-switch custom-switch-success mr-2 mb-1">
                                                <input type="checkbox" <?= $coMenu->active == 1 ? "checked" : "" ?> class="custom-control-input" onclick="setActive();" id="customSwitch11">
                                                <label class="custom-control-label" for="customSwitch11">
                                                    <span class="switch-icon-left"><i class="feather icon-check"></i></span>
                                                    <span class="switch-icon-right"><i class="feather icon-check"></i></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Roles</label>
                                            <select class="select2 form-control" name="co_groups[_ids][]" multiple="multiple">
                                                <?php $grupos = 0;?>
                                                <?php foreach($coGroups as $group){ ?>
                                                    <?php $haySelect = false;?>
                                                    <?php foreach($coMenu->co_groups as $groupCoMenu){ ?>
                                                        <?php if($groupCoMenu->id == $group->id){ ?>
                                                            <?php $haySelect = true;?>
                                                            <?php $grupos++; ?>
                                                            <option selected value="<?= $group->id ?>" ><?= $group->name ?></option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                    <?php if(!$haySelect){ ?>
                                                        <?php $grupos++; ?>
                                                        <option value="<?= $group->id ?>"><?= $group->name ?></option>
                                                    <?php } ?>
                                                <?php } ?>
                                                <?php if($grupos==0){ ?>
                                                    <?php foreach($coGroups as $group){ ?>
                                                        <option value="<?= $group->id ?>"><?= $group->name ?></option>
                                                    <?php } ?>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Guardar</button>
                                        <button type="reset" onclick="return resetThis();" class="btn btn-outline-warning mr-1 mb-1 waves-effect waves-light">Reiniciar</button>
                                        <button type="button" class="btn btn-outline-danger mr-1 mb-1 waves-effect waves-light" data-toggle="modal" data-target = "#deletedata">Eliminar</button>
                                    </div>
                                </div>
                            </div>
                              <!-- Modal -->
                              <div class="modal text-left" id="deletedata" tabindex="-1" role="dialog" aria-labelledby="myModalLabel6" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel6">Eliminando <?= $coMenu->name ?></h4>
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
                                                    <?= $this->Form->postLink('<button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>', ['action' => 'delete', $coMenu->id],['escape' => false]) ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <!-- END:: MODAL -->
                        <?= $this->Form->end() ?>
                        <!-- co_permisos[_ids] -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Basic Tables end -->
</div>

<script>

    var active_switch = <?= $coMenu->active ? "1" : "0"  ?>;

    function resetThis(){
        var r = confirm("¿Reiniciar formulario? Se perderá los cambios que no ha guardado.");
        if (r == true) {
            return true;
        } else {
            return false;
        }
    }

    function setActive(){
        if(active_switch == 1){
            active_switch = 0;
            $('#actives').val("0");
        } else{
            active_switch = 1;
            $('#actives').val("1");
        }
    }

</script>