<?= $this->Html->css('dashboard.css') ?>

<div class="content-body">
                <div id="user-profile">
                    <div class="row">
                        <div class="col-12">
                            <div class="profile-header mb-2">
                                <div class="relative">
                                    <div class="cover-container">
                                        <img class="img-fluid bg-cover rounded-0 w-100" src="<?= $this->Url->Image('/files/default/banner.jpg') ?>" alt="User Profile Image" style="height: 300px;object-fit: cover;">
                                    </div>
                                    <div class="profile-img-container d-flex align-items-center justify-content-between">
                                        <img src="<?= $userData["hasPic"] ? $this->Url->Image('/files/userfiles/'.$userData["id"].'/picture/200.jpg') : $this->Url->Image('/files/default/defaultpic.jpg') ?>" style="width:150px;height:150px;object-fit:cover" class="rounded-circle img-border box-shadow-1" alt="Card image">
                                        <div class="float-right">
                                            <button type="button" class="btn btn-icon btn-icon rounded-circle btn-primary mr-1 waves-effect waves-light">
                                                <i class="feather icon-edit-2"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end align-items-center profile-header-nav">
                                    <nav class="navbar navbar-expand-sm w-100 pr-0">
                                        <button class="navbar-toggler pr-0" type="button" data-toggle="collapse" data-target="navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"><i class="feather icon-align-justify"></i></span>
                                        </button>
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                            <ul class="navbar-nav justify-content-around w-75 ml-sm-auto">
                                                <li class="nav-item px-sm-0" id="ultimas_noticias">
                                                    <a style="color:#7367f0" class="nav-link font-small-3">Últimas publicaciones</a>
                                                </li>
                                                <li class="nav-item px-sm-0" id="mi_perfil">
                                                    <button type="button" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Perfil</button>
                                                    <!-- <a style="color:#7367f0" class="nav-link font-small-3">Perfil</a> -->
                                                </li>
                                                <li class="nav-item px-sm-0" id="mis_ajustes">
                                                    <a style="color:#7367f0" class="nav-link font-small-3">Ajustes</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section id="mis_publicaciones_section">
                        <div class="row">
                            <div class="col-lg-3 col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Acerca de mi</h4>
                                        <i class="feather icon-more-horizontal cursor-pointer"></i>
                                    </div>
                                    <div class="card-body">
                                        <p><?= $userData["about"] ?></p>
                                        <div class="mt-1">
                                            <h6 class="mb-0">Se unió:</h6>
                                            <p><?= h($userData["created"]) ?></p>
                                        </div>
                                        <!-- <div class="mt-1">
                                            <h6 class="mb-0">Lives:</h6>
                                            <p>New York, USA</p>
                                        </div> -->
                                        <div class="mt-1">
                                            <h6 class="mb-0">Correo:</h6>
                                            <p><?= $userData["email"] ?></p>
                                        </div>
                                        <!-- <div class="mt-1">
                                            <h6 class="mb-0">Website:</h6>
                                            <p>www.pixinvent.com</p>
                                        </div> -->
                                        <!-- <div class="mt-1">
                                            <button type="button" class="btn btn-sm btn-icon btn-primary mr-25 p-25 waves-effect waves-light"><i class="feather icon-facebook"></i></button>
                                            <button type="button" class="btn btn-sm btn-icon btn-primary mr-25 p-25 waves-effect waves-light"><i class="feather icon-twitter"></i></button>
                                            <button type="button" class="btn btn-sm btn-icon btn-primary p-25 waves-effect waves-light"><i class="feather icon-instagram"></i></button>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="card" style="margin-bottom:10px !important" id="cardNuevo">
                                    <div class="card-body" style="padding: 0.5rem;">
                                        <div class="">
                                            <div class="default-collapse collapse-bordered">
                                                <div class="card collapse-header">
                                                    <div id="headingCollapse1" class="card-header" data-toggle="collapse" role="button" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                                        <span class="lead collapse-title">
                                                            Crear publicación <i style="margin-left:10px" class="feather icon-edit"></i>
                                                        </span>
                                                    </div>
                                                    <div id="collapse1" role="tabpanel" aria-labelledby="headingCollapse1" class="collapse">
                                                        <div class="card-content">
                                                            <div class="card-body">
                                                                <div class="">
                                                                    <fieldset class="form-label-group">
                                                                        <input type="text" class="form-control" id="title_post" placeholder="Título">
                                                                        <label for="floating-label1">Título</label>
                                                                    </fieldset>
                                                                </div>
                                                                <div class="">
                                                                    <fieldset class="form-label-group mb-0">
                                                                        <textarea class="form-control char-textarea active" id="description_post" rows="5" placeholder="Descripción" style="color: rgb(78, 81, 84);resize:none"></textarea>
                                                                        <label for="textarea-counter">Descripción</label>
                                                                    </fieldset>
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <button type="button" class="btn btn-primary mr-1 mb-1 waves-effect waves-light" id="post_name">Publicar</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="areaNoticiasUser"></div>
                            </div>
                            <div class="col-lg-3 col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Últimas fotos</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4 col-6 user-latest-img">
                                                <img src="<?= $this->Url->Image('user/user-01.jpg') ?>" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                                            </div>
                                            <div class="col-md-4 col-6 user-latest-img">
                                                <img src="<?= $this->Url->Image('user/user-02.jpg') ?>" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                                            </div>
                                            <div class="col-md-4 col-6 user-latest-img">
                                                <img src="<?= $this->Url->Image('user/user-03.jpg') ?>" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                                            </div>
                                            <div class="col-md-4 col-6 user-latest-img">
                                                <img src="<?= $this->Url->Image('user/user-04.jpg') ?>" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                                            </div>
                                            <div class="col-md-4 col-6 user-latest-img">
                                                <img src="<?= $this->Url->Image('user/user-05.jpg') ?>" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                                            </div>
                                            <div class="col-md-4 col-6 user-latest-img">
                                                <img src="<?= $this->Url->Image('user/user-06.jpg') ?>" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                                            </div>
                                            <div class="col-md-4 col-6 user-latest-img">
                                                <img src="<?= $this->Url->Image('user/user-07.jpg') ?>" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                                            </div>
                                            <div class="col-md-4 col-6 user-latest-img">
                                                <img src="<?= $this->Url->Image('user/user-08.jpg') ?>" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                                            </div>
                                            <div class="col-md-4 col-6 user-latest-img">
                                                <img src="<?= $this->Url->Image('user/user-09.jpg') ?>" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>


                    <section id="noticias_section" style="display:none">
                        <div class="row">
                            <div class="col-lg-2 col-12">
                                
                            </div>
                            <div class="col-lg-8 col-12">

                                <div id="areaNoticias"></div>
                            
                            </div>
                            <div class="col-lg-2 col-12">
                               
                            </div>
                        </div>
                    </section>

                    <section id="ajustes_section" style="display:none">
                        <div class="row">
                            <div class="col-lg-3 col-12">
                                
                            </div>
                            <div class="col-lg-6 col-12">
                                
                            </div>
                            <div class="col-lg-3 col-12">
                               
                            </div>
                        </div>
                    </section>



                </div>

            </div>

<script>

     var csrfToken = <?= json_encode($this->request->getAttribute('csrfToken')) ?>;/********************* */

    $('#post_name').click(function(){

        $('#cardNuevo').css('opacity','0.5');
        $('#post_name').attr('disabled','disabled');

        var title = $('#title_post').val();
        var description = $('#description_post').val();

        $('#title_post').attr("disabled","disabled");
        $('#description_post').attr("disabled","disabled");

        //Validar los campos que no esten vacios

        $.ajax({
            headers: {
                'X-CSRF-Token': csrfToken
            },    
            type: "POST",
            data: { title : title , description : description },
            url: "<?= $this->Url->build(["controller" => "posts","action" => "new"]);?>",
            success:function(data){
               
                $('#cardNuevo').css('opacity','1');
                $('#post_name').removeAttr('disabled','disabled');

                $('#title_post').removeAttr("disabled","disabled");
                $('#description_post').removeAttr("disabled","disabled");

                $('#title_post').val("");
                $('#description_post').val("");

                loadMyNews();

                $('#headingCollapse1').click();

            }
        })
    })
    
    loadNoticias();
    loadMyNews();

    //Funcion de carga de noticias
    function loadNoticias(){
        $('#areaNoticias').empty();
        $.ajax({
            headers: {
                'X-CSRF-Token': csrfToken
            },    
            type: "GET",
            url: "<?= $this->Url->build(["controller" => "posts","action" => "getNews"]);?>",
            success:function(data){
               
                $(data).each(function(indice,registro){        
                    //$('#areaNoticias').append('<option value="'+data[indice]['id']+'"> '+data[indice]['name']+' </option>');
                    var fechaFormat = "";
                    var fechasyhoras = data[indice]['created'].split("T");
                    var fecha = fechasyhoras[0].split("-");
                    var mes = "";
                    if( fecha[1] == "01"){ mes = "Enero";}
                    if( fecha[1] == "02"){ mes = "Febrero";}
                    if( fecha[1] == "03"){ mes = "Marzo";}
                    if( fecha[1] == "04"){ mes = "Abril";}
                    if( fecha[1] == "05"){ mes = "Mayo";}
                    if( fecha[1] == "06"){ mes = "Junio";}
                    if( fecha[1] == "07"){ mes = "Julio";}
                    if( fecha[1] == "08"){ mes = "Agosto";}
                    if( fecha[1] == "09"){ mes = "Septiembre";}
                    if( fecha[1] == "10"){ mes = "Octubre";}
                    if( fecha[1] == "11"){ mes = "Noviembre";}
                    if( fecha[1] == "12"){ mes = "Diciembre";}
                    var horas = fechasyhoras[1].split("-");
                    var horaB = horas[0].split(":");
                    var hora = horaB[0] + ":" + horaB[1];

                    fechaFormat = fecha[2] + " de " + mes + " del " + fecha[0] + " a las " + hora;

                    var pic = "";

                    $.ajax({
                        url : '<?= $this->Url->Image('/files/userfiles/') ?>'+data[indice]['user']['id']+'/picture/200.jpg',
                        type : "get",
                        async: false,
                        success : function(userStatus) {
                           pic = '<?= $this->Url->Image('/files/userfiles/') ?>'+data[indice]['user']['id']+'/picture/200.jpg';
                        },
                        error: function() {
                            pic = "<?= $this->Url->Image('/files/default/defaultpic.jpg') ?>"
                        }
                    });

                    $('#areaNoticias').append('<div class="card" style="margin-bottom:10px !important">'+
                                                    '<div class="card-body">'+
                                                        '<div class="d-flex justify-content-start align-items-center mb-1">'+
                                                            '<div class="avatar mr-1">'+
                                                                ' <img src="'+pic+'" alt="avtar img holder" height="45" width="45">'+
                                                            ' </div>'+
                                                            ' <div class="user-page-info">'+
                                                                ' <p class="mb-0">' + data[indice]['user']['name'] + " " + data[indice]['user']['last_name'] + " " + data[indice]['user']['mother_last_name'] +'</p>'+
                                                                '<span class="font-small-2">' + fechaFormat +'</span>'+
                                                            '</div>'+
                                                            '<div class="ml-auto user-like text-danger"></div>'+
                                                            '<div class="btn-group dropdown mr-1 mb-1 ">'+
                                                                '  <button type="button" class="btn btn-outline-info dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+
                                                                    '  <i class="feather icon-settings"></i> '+
                                                                    '  </button>'+
                                                                    '  <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">'+
                                                                    '<a data-toggle="modal" data-target="#edit1'+data[indice]['id']+'" class="dropdown-item" href="#">Editar</a>'+
                                                                            ' <a data-toggle="modal" data-target="#delete1'+data[indice]['id']+'" class="dropdown-item" href="#">Eliminar</a>'+
                                                                        '</div>'+
                                                                '  </div>'+
                                                        ' </div>'+
                                                        '<p style="font-size:16px"><b>' + data[indice]['title'] + '</b></p>'+
                                                        '<p>' + data[indice]['description'] + '</p>'+
                                                        //' <img class="img-fluid card-img-top rounded-sm mb-2" src="../../../app-assets/images/profile/post-media/2.jpg" alt="avtar img holder">'+
                                                    '</div>'+
                                                    '<div class="modal fade text-left" id="edit1'+data[indice]['id']+'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true" style="display: none;">'+
                                                        ' <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">'+
                                                            '  <div class="modal-content">'+
                                                                '  <div class="modal-header">'+
                                                                    '  <h4 class="modal-title" id="myModalLabel33">'+ data[indice]['title']+'</h4>'+
                                                                    '  <button type="button" class="close" data-dismiss="modal" aria-label="Close">'+
                                                                    ' <span aria-hidden="true">×</span>'+
                                                                    '</button>'+
                                                                ' </div>'+
                                                                ' <form action="#">'+
                                                                    '   <div class="modal-body">'+
                                                                        '    <label>Título: </label>'+
                                                                        '   <div class="form-group">'+
                                                                        '    <input type="text" placeholder="" id="title'+data[indice]['id']+'" class="form-control" value="'+ data[indice]['title']+'">'+
                                                                        '</div>'+

                                                                        '<label>Descripción: </label>'+
                                                                        ' <div class="form-group">'+
                                                                            ' <textarea class="form-control char-textarea active"  id="description'+data[indice]['id']+'" rows="5" placeholder="Descripción" style="color: rgb(78, 81, 84);resize:none">'+ data[indice]['description']+'</textarea>'+
                                                                        '  </div>'+
                                                                        '  </div>'+
                                                                        ' <div class="modal-footer">'+
                                                                             ' <button type="button" id="'+data[indice]['id']+'" class="btn btn-primary waves-effect waves-light" data-dismiss="modal" onclick="updatePost(this);">Guardar</button>'+
                                                                        ' </div>'+
                                                                ' </form>'+
                                                            ' </div>'+
                                                        '</div>'+
                                                    ' </div>'+
                                                    '<div class="modal fade text-left" id="delete1'+data[indice]['id']+'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel6" aria-hidden="true">'+
                                                    '   <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">'+
                                                    '       <div class="modal-content">'+
                                                    '           <div class="modal-header">'+
                                                    '               <h4 class="modal-title" id="myModalLabel6">Eliminando '+ data[indice]['title']+'</h4>'+
                                                    '               <button type="button" class="close" data-dismiss="modal" aria-label="Close">'+
                                                    '                   <span aria-hidden="true">&times;</span>'+
                                                    '               </button>'+
                                                    '           </div>'+
                                                    '           <div class="modal-body">'+
                                                    '               <p>'+
                                                    '                  ¿Realmente desea eliminar de manera permanente este registro del sistema?'+
                                                    '               </p>'+
                                                    '              <div class="alert alert-danger" role="alert">'+
                                                    '                   Se eliminará la publicación de la sección de publicaciones.'+
                                                    '               </div>'+
                                                    '           </div>'+
                                                    '           <div class="modal-footer">'+
                                                    '               <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancelar</button>'+
                                                    '               <button id="'+data[indice]['id']+'" type="button" class="btn btn-primary"  data-dismiss="modal" onclick="deletePost(this);">Aceptar</button>'+
                                                    '           </div>'+
                                                    '       </div>'+
                                                    '   </div>'+
                                                    '</div>'+
                                            ' </div>');                        
                })
            }
        })
    }

    //Funcion de carga
    function loadMyNews(){
        $('#areaNoticiasUser').empty();
        $.ajax({
            headers: {
                'X-CSRF-Token': csrfToken
            },    
            type: "GET",
            url: "<?= $this->Url->build(["controller" => "posts","action" => "getNewsByUser"]);?>",
            success:function(data){
               
                $(data).each(function(indice,registro){        
                    //$('#areaNoticias').append('<option value="'+data[indice]['id']+'"> '+data[indice]['name']+' </option>');
                    var fechaFormat = "";
                    var fechasyhoras = data[indice]['created'].split("T");
                    var fecha = fechasyhoras[0].split("-");
                    var mes = "";
                    if( fecha[1] == "01"){ mes = "Enero";}
                    if( fecha[1] == "02"){ mes = "Febrero";}
                    if( fecha[1] == "03"){ mes = "Marzo";}
                    if( fecha[1] == "04"){ mes = "Abril";}
                    if( fecha[1] == "05"){ mes = "Mayo";}
                    if( fecha[1] == "06"){ mes = "Junio";}
                    if( fecha[1] == "07"){ mes = "Julio";}
                    if( fecha[1] == "08"){ mes = "Agosto";}
                    if( fecha[1] == "09"){ mes = "Septiembre";}
                    if( fecha[1] == "10"){ mes = "Octubre";}
                    if( fecha[1] == "11"){ mes = "Noviembre";}
                    if( fecha[1] == "12"){ mes = "Diciembre";}
                    var horas = fechasyhoras[1].split("-");
                    var horaB = horas[0].split(":");
                    var hora = horaB[0] + ":" + horaB[1];

                    fechaFormat = fecha[2] + " de " + mes + " del " + fecha[0] + " a las " + hora;

                    
                    var pic = "";

                    $.ajax({
                        url : '<?= $this->Url->Image('/files/userfiles/') ?>'+data[indice]['user']['id']+'/picture/200.jpg',
                        type : "get",
                        async: false,
                        success : function(userStatus) {
                        pic = '<?= $this->Url->Image('/files/userfiles/') ?>'+data[indice]['user']['id']+'/picture/200.jpg';
                        },
                        error: function() {
                            pic = "<?= $this->Url->Image('/files/default/defaultpic.jpg') ?>"
                        }
                    });

                    $('#areaNoticiasUser').append('<div class="card" style="margin-bottom:10px !important">'+
                                                    '<div class="card-body">'+
                                                         '<div class="d-flex justify-content-end align-items-center mb-1">'+
                                                             
                                                            '</div>'+
                                                        '<div class="d-flex justify-content-start align-items-center mb-1">'+
                                                            '<div class="avatar mr-1">'+
                                                                ' <img src="'+pic+'" alt="avtar img holder" height="45" width="45">'+
                                                            ' </div>'+
                                                            ' <div class="user-page-info">'+
                                                                ' <p class="mb-0">' + data[indice]['user']['name'] + " " + data[indice]['user']['last_name'] + " " + data[indice]['user']['mother_last_name'] +'</p>'+
                                                                '<span class="font-small-2">' + fechaFormat +'</span>'+
                                                            '</div>'+
                                                            '<div class="ml-auto user-like text-danger"></div>'+
                                                            '<div class="btn-group dropdown mr-1 mb-1 ">'+
                                                                '  <button type="button" class="btn btn-outline-info dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+
                                                                    '  <i class="feather icon-settings"></i> '+
                                                                    '  </button>'+
                                                                    '  <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">'+
                                                                            '<a data-toggle="modal" data-target="#edit2'+data[indice]['id']+'" class="dropdown-item" href="#">Editar</a>'+
                                                                            ' <a data-toggle="modal" data-target="#delete2'+data[indice]['id']+'" class="dropdown-item" href="#">Eliminar</a>'+
                                                                        '</div>'+
                                                                '  </div>'+
                                                        ' </div>'+
                                                        '<p style="font-size:16px"><b>' + data[indice]['title'] + '</b></p>'+
                                                        '<p>' + data[indice]['description'] + '</p>'+
                                                        //' <img class="img-fluid card-img-top rounded-sm mb-2" src="../../../app-assets/images/profile/post-media/2.jpg" alt="avtar img holder">'+
                                                    '</div>'+
                                                    '<div class="modal fade text-left" id="edit2'+data[indice]['id']+'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true" style="display: none;">'+
                                                        ' <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">'+
                                                            '  <div class="modal-content">'+
                                                                '  <div class="modal-header">'+
                                                                    '  <h4 class="modal-title" id="myModalLabel33">'+ data[indice]['title']+'</h4>'+
                                                                    '  <button type="button" class="close" data-dismiss="modal" aria-label="Close">'+
                                                                    ' <span aria-hidden="true">×</span>'+
                                                                    '</button>'+
                                                                ' </div>'+
                                                                ' <form action="#">'+
                                                                    '   <div class="modal-body">'+
                                                                        '    <label>Título: </label>'+
                                                                        '   <div class="form-group">'+
                                                                        '    <input type="text" placeholder="" id="title'+data[indice]['id']+'" class="form-control" value="'+ data[indice]['title']+'">'+
                                                                        '</div>'+

                                                                        '<label>Descripción: </label>'+
                                                                        ' <div class="form-group">'+
                                                                            ' <textarea class="form-control char-textarea active"  id="description'+data[indice]['id']+'" rows="5" placeholder="Descripción" style="color: rgb(78, 81, 84);resize:none">'+ data[indice]['description']+'</textarea>'+
                                                                        '  </div>'+
                                                                        '  </div>'+
                                                                        ' <div class="modal-footer">'+
                                                                        ' <button type="button" id="'+data[indice]['id']+'" class="btn btn-primary waves-effect waves-light" data-dismiss="modal" onclick="updatePost(this);">Guardar</button>'+
                                                                        ' </div>'+
                                                                ' </form>'+
                                                            ' </div>'+
                                                        '</div>'+
                                                    ' </div>'+
                                                    '<div class="modal fade text-left" id="delete2'+data[indice]['id']+'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel6" aria-hidden="true">'+
                                                    '   <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">'+
                                                    '       <div class="modal-content">'+
                                                    '           <div class="modal-header">'+
                                                    '               <h4 class="modal-title" id="myModalLabel6">Eliminando '+ data[indice]['title']+'</h4>'+
                                                    '               <button type="button" class="close" data-dismiss="modal" aria-label="Close">'+
                                                    '                   <span aria-hidden="true">&times;</span>'+
                                                    '               </button>'+
                                                    '           </div>'+
                                                    '           <div class="modal-body">'+
                                                    '               <p>'+
                                                    '                  ¿Realmente desea eliminar de manera permanente este registro del sistema?'+
                                                    '               </p>'+
                                                    '              <div class="alert alert-danger" role="alert">'+
                                                    '                   Se eliminará la publicación de la sección de publicaciones.'+
                                                    '               </div>'+
                                                    '           </div>'+
                                                    '           <div class="modal-footer">'+
                                                    '               <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancelar</button>'+
                                                    '               <button id="'+data[indice]['id']+'" type="button" class="btn btn-primary"  data-dismiss="modal" onclick="deletePost(this);">Aceptar</button>'+
                                                    '           </div>'+
                                                    '       </div>'+
                                                    '   </div>'+
                                                    '</div>'+
                                            ' </div>');    

                                                 
                })
            }
        })
    }

    //Funcion para actualizar el post
    function updatePost(e){
        var id = e.id;
        var title = $('#title' + id).val();
        var description = $('#description' + id).val();

        $.ajax({
            headers: {
                'X-CSRF-Token': csrfToken
            },    
            type: "POST",
            data: { title : title , description : description },
            url: "<?= $this->Url->build(["controller" => "posts","action" => "edit" ]);?>/"+id,
            success:function(data){

                loadMyNews();
                loadNoticias();

            }
        })
    }

    function deletePost(e){
        var id = e.id;
    
        $.ajax({
            headers: {
                'X-CSRF-Token': csrfToken
            },    
            type: "POST",
            url: "<?= $this->Url->build(["controller" => "posts","action" => "delete" ]);?>/"+id,
            success:function(data){

                loadMyNews();
                loadNoticias();

            }
        })
    }

    // Funcion del switcheo de botones
    $('#ultimas_noticias').click(function(){
        loadNoticias();
        setBtnNoticias();
        $('#ultimas_noticias').empty();
        $('#ultimas_noticias').append('<button type="button" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Últimas publicaciones</button>');
        $('#noticias_section').show();
    })

    $('#mi_perfil').click(function(){
        loadMyNews();
        setBtnPerfil();
        $('#mi_perfil').empty();
        $('#mi_perfil').append('<button type="button" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Perfil</button>');
        $('#mis_publicaciones_section').show();
    })

    $('#mis_ajustes').click(function(){
        setAjustes();
        $('#mis_ajustes').empty();
        $('#mis_ajustes').append('<button type="button" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Ajustes</button>');
        $('#ajustes_section').show();
    })

    function setBtnNoticias(){
        $('#mi_perfil').empty();
        $('#mis_ajustes').empty();

        $('#mis_publicaciones_section').hide();
        $('#ajustes_section').hide();

        $('#mi_perfil').append('<a style="color:#7367f0" class="nav-link font-small-3">Perfil</a>');
        $('#mis_ajustes').append('<a style="color:#7367f0" class="nav-link font-small-3">Ajustes</a>');
    }

    function setBtnPerfil(){
        $('#ultimas_noticias').empty();
        $('#mis_ajustes').empty();

        $('#noticias_section').hide();
        $('#mis_publicaciones_section').hide();

        $('#ultimas_noticias').append('<a style="color:#7367f0" class="nav-link font-small-3">Últimas publicaciones</a>');
        $('#mis_ajustes').append('<a style="color:#7367f0" class="nav-link font-small-3">Ajustes</a>');
    }

    function setAjustes(){
        $('#ultimas_noticias').empty();
        $('#mi_perfil').empty();

        $('#noticias_section').hide();
        $('#mis_publicaciones_section').hide();

        $('#ultimas_noticias').append('<a style="color:#7367f0" class="nav-link font-small-3">Últimas publicaciones</a>');
        $('#mi_perfil').append('<a style="color:#7367f0" class="nav-link font-small-3">Perfil</a>');
    }

</script>