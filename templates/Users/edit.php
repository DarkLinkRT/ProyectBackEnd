<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Editar Usuario</h2>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><?= $this->Html->link('Inicio',$IndexPage,['escape'=>false]) ?>
                        </li>
                        <li class="breadcrumb-item"> <?= $this->Html->link('Usuarios',['action' => 'index'],['escape'=>false]) ?>
                        </li>
                        <li class="breadcrumb-item active">Editar Usuario
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

                <section class="users-edit">
                    <div class="row col-12">
                        <?= $this->Html->link(' <button type="button" class="btn btn-flat-dark border-dark text-dark mr-1 mb-1 waves-effect waves-light"><span><i class="feather icon-x-circle "></i> Cancelar </span></button>', ['action' => 'index'], ['escape'=> false]) ?>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <ul class="nav nav-tabs mb-3" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#account" aria-controls="account" role="tab" aria-selected="true">
                                            <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block"><?= $user->name . " " . $user->last_name . " " . $user->mother_last_name ?></span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center" id="account-tab" data-toggle="tab" href="#password" aria-controls="account" role="tab" aria-selected="true">
                                            <i class="feather icon-lock mr-25"></i><span class="d-none d-sm-block">Contrase??a</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                                        <?= $this->Form->create($user) ?>
                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Nombre</label>
                                                            <input type="text" class="form-control" value="<?= $user->name ?>" name="name" placeholder="Nombre(s)" required="">
                                                        <div class="help-block"></div></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Apellido Paterno</label>
                                                            <input type="text" class="form-control" value="<?= $user->last_name ?>" name="last_name" placeholder="Apellido Paterno" required="">
                                                        <div class="help-block"></div></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Apellido Materno</label>
                                                            <input type="text" class="form-control" value="<?= $user->mother_last_name ?>"  name="mother_last_name" placeholder="Apellido Materno">
                                                        <div class="help-block"></div></div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Usuario</label>
                                                            <input type="text" class="form-control" value="<?= $user->user ?>" name="user" placeholder="Usuario"  required="">
                                                        <div class="help-block"></div></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Rol</label>
                                                        <select class="form-control select2-icons" name="co_group_id">
                                                            <?php foreach($roles as $rol){ ?>
                                                                <?php if($rol->id == $user->role_id){ ?>
                                                                    <option selected data-icon="feather <?= $rol->icon ?>  text-<?= $rol->color_icon ?>" value="<?= $rol->id ?>"><?= $rol->name ?></option>
                                                                <?php } else {?>
                                                                    <option data-icon="feather <?= $rol->icon ?>  text-<?= $rol->color_icon ?>" value="<?= $rol->id ?>"><?= $rol->name ?></option>
                                                                <?php } ?>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Correo</label>
                                                            <input type="email" class="form-control" value="<?= $user->email ?>" name="email" placeholder="Correo Electr??nico">
                                                        <div class="help-block"></div></div>
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
                                                <div class="col-12 d-flex flex-sm-row flex-column  mt-1">
                                                    <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1 waves-effect waves-light">Guardar</button>
                                                    <button type="reset" onclick="return resetThis();" class="btn btn-outline-warning waves-effect waves-light">Reiniciar</button>
                                                </div>
                                            </div>
                                        <?= $this->Form->end() ?>
                                        <!-- users edit account form ends -->
                                    </div>
                                    <div class="tab-pane" id="password" aria-labelledby="account-tab" role="tabpanel">
                                        <?= $this->Form->create($user) ?>
                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Contrase??a</label>
                                                            <input type="password" class="form-control"  name="password" placeholder="Contrase??a">
                                                        <div class="help-block"></div></div>
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex flex-sm-row flex-column  mt-1">
                                                    <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1 waves-effect waves-light">Guardar</button>
                                                    <button type="reset" onclick="return resetThis();" class="btn btn-outline-warning waves-effect waves-light">Reiniciar</button>
                                                </div>
                                            </div>
                                        <?= $this->Form->end() ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

<script>

    var active_switch = <?= $user->active ? "1" : "0"  ?>;

    function resetThis(){
        var r = confirm("??Reiniciar formulario? Se perder?? los cambios que no ha guardado.");
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

    
    /***************/var csrfToken = <?= json_encode($this->request->getParam('_csrfToken')) ?>;/********************* */
           
    $('#cat_municipality_id').change(function(){
        var id_municipality =  $(this).val();
        $.ajax({
            headers: {
                    'X-CSRF-Token': csrfToken
                },    
                type: "GET",
                url: "<?= $this->Url->build(["controller" => "CatLocalities","action" => "getLocalitiesByMunicipality"]);?>" + "/" + id_municipality,
                success:function(data){
                    $('#cat_locality_id').empty();
                    $(data).each(function(indice,registro){ 
                        if(data[indice]['id'] == "<?= $user->cat_locality_id ?>"){
                            $('#cat_locality_id').append('<option selected value="'+data[indice]['id']+'"> '+data[indice]['name']+' </option>');
                        }else{
                            $('#cat_locality_id').append('<option value="'+data[indice]['id']+'"> '+data[indice]['name']+' </option>');
                        }    
                       
                    })
                }
        })
    })

    $('#cat_municipality_id').change();

</script>
 