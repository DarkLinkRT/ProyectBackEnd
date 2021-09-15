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
                <h2 class="content-header-title float-left mb-0">Nuevo Menú</h2>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><?= $this->Html->link('Inicio',$IndexPage,['escape'=>false]) ?>
                        </li>
                        <li class="breadcrumb-item"> <?= $this->Html->link('Menús',['action' => 'index'],['escape'=>false]) ?>
                        </li>
                        <li class="breadcrumb-item active">Nuevo Menú
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
                    <h4 class="card-title">Nuevo Registro</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <p class="card-text">Registrar un nuevo menú para mostrarse en el sistema.</p>
                        <!-- -->
                        <?= $this->Form->create($menu,['class'=>'form form-vertical']) ?>
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Menú Principal</label>
                                            <select class="select2-icons form-control" name="menu_id" id="select2-icons">
                                                <option value="">Ninguno</option>
                                                <?php foreach($menus as $_menu){ ?>
                                                    <option value="<?= $menu->id ?>" data-icon="feather <?= $menu->icon ?>"><?= $menu->name ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Nombre</label>
                                            <input type="text" id="name" class="form-control" name="name" placeholder="Nombre del menú">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Icono</label>
                                            <input type="text" id="icon" class="form-control" name="icon" placeholder="Clase del icono">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Destino</label>
                                            <input type="text" id="href" class="form-control" name="href" placeholder="/Controlador/acción?/">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Posición</label>
                                            <input type="number" id="position" class="form-control" name="position" placeholder="0">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Roles</label>
                                            <select class="select2 form-control" name="roles[_ids][]" multiple="multiple">
                                                <?php foreach($roles as $role){ ?>
                                                    <option value="<?= $role->id ?>"><?= $role->name ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Activo</label>
                                            <input type="hidden" id="actives" class="form-control" name="active" placeholder="First Name" value="1">
                                            <div class="custom-control custom-switch custom-switch-success mr-2 mb-1">
                                                <input type="checkbox" checked class="custom-control-input" onclick="setActive();" id="customSwitch11">
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
                                    </div>
                                </div>
                            </div>
                        <?= $this->Form->end() ?>
                        <!-- -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Basic Tables end -->
</div>

<script>

    var active_switch = true;

    function resetThis(){
        var r = confirm("¿Reiniciar formulario? Se perderá los cambios que no ha guardado.");
        if (r == true) {
            return true;
        } else {
            return false;
        }
    }

    function setActive(){
        if(active_switch){
            active_switch = false;
            $('#actives').val("0");
        } else{
            active_switch = true;
            $('#actives').val("1");
        }
    }

</script>