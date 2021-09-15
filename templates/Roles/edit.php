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
                <h2 class="content-header-title float-left mb-0">Editar Rol</h2>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><?= $this->Html->link('Inicio',$IndexPage,['escape'=>false]) ?>
                        </li>
                        <li class="breadcrumb-item"> <?= $this->Html->link('Roles',['action' => 'index'],['escape'=>false]) ?>
                        </li>
                        <li class="breadcrumb-item active">Editar Rol
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
                    <h4 class="card-title"><?= $role->name ?></h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <!-- -->
                        <?= $this->Form->create($role,['class'=>'form form-vertical']) ?>
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Nombre</label>
                                            <input type="text" id="name" class="form-control" name="name" placeholder="Nombre del rol" value="<?= $role->name ?>">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Descripción</label>
                                            <input type="text" id="description" class="form-control" name="description" placeholder="Descripción del rol" value="<?= $role->description ?>">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Icono</label>
                                            <input type="text" id="icon" class="form-control" name="icon" value="<?= $role->icon ?>" placeholder="Icono del rol">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Color</label>
                                            <input type="text" id="color_icon" class="form-control" value="<?= $role->color_icon ?>"  name="color_icon" placeholder="Color de icono del rol">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Menús</label>
                                            <select class="select2-icons form-control" name="menus[_ids][]" multiple="multiple">
                                                <?php $menusContador = 0;?>
                                                    <?php foreach($menus as $menu){ ?>
                                                        <?php $haySelect = false;?>
                                                        <?php foreach($role->menus as $roleMenu){ ?>
                                                            <?php if($roleMenu->id == $menu->id){ ?>
                                                                <?php $haySelect = true;?>
                                                                <?php $menusContador++; ?>
                                                                <option data-icon="feather <?= $menu->icon ?>" selected value="<?= $menu->id ?>" ><?= $menu->name ?></option>
                                                            <?php } ?>
                                                        <?php } ?>
                                                        <?php if(!$haySelect){ ?>
                                                                <?php $menusContador++; ?>
                                                                <option data-icon="feather <?= $menu->icon ?>" value="<?= $menu->id ?>"><?= $menu->name ?></option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                    <?php if($menusContador==0){ ?>
                                                        <?php foreach($menus as $menu){ ?>
                                                            <option data-icon="feather <?= $menu->icon ?>" value="<?= $menu->id ?>"><?= $menu->name ?></option>
                                                        <?php } ?>
                                                    <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Permisos</label>
                                            <select class="select2 form-control" name="permissions[_ids][]" multiple="multiple">
                                                    <?php $permissionsContador = 0;?>
                                                    <?php foreach($permissions as $permission){ ?>
                                                        <?php $haySelect = false;?>
                                                        <?php foreach($role->permissions as $rolePermission){ ?>
                                                            <?php if($rolePermission->id == $permission->id){ ?>
                                                                <?php $haySelect = true;?>
                                                                <?php $permissionsContador++; ?>
                                                                <option selected value="<?= $permission->id ?>" ><?= $permission->name ?></option>
                                                            <?php } ?>
                                                        <?php } ?>
                                                        <?php if(!$haySelect){ ?>
                                                                <?php $permissionsContador++; ?>
                                                                <option value="<?= $permission->id ?>"><?= $permission->name ?></option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                    <?php if($permissionsContador==0){ ?>
                                                        <?php foreach($permissions as $permission){ ?>
                                                            <?php $permissionsContador++; ?>
                                                            <option value="<?= $permission->id ?>"><?= $permission->name ?></option>
                                                        <?php } ?>
                                                    <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12" id="divActivo">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Activo</label>
                                            <input type="hidden" id="actives" class="form-control" name="active" placeholder="First Name" value="<?= $role->active ? "1" : "0" ?>">
                                            <div class="custom-control custom-switch custom-switch-success mr-2 mb-1">
                                                <input type="checkbox" <?= $role->active == 1 ? "checked" : "" ?> class="custom-control-input" onclick="setActive();" id="customSwitch11">
                                                <label class="custom-control-label" for="customSwitch11">
                                                    <span class="switch-icon-left"><i class="feather icon-check"></i></span>
                                                    <span class="switch-icon-right"><i class="feather icon-check"></i></span>
                                                </label>
                                            </div>
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
                                                                    <?= $this->Form->postLink('<button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>', ['action' => 'delete', $role->id],['escape' => false]) ?>
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

    var active_switch = <?= $role->active ? "1" : "0"  ?>;

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