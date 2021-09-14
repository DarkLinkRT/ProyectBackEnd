//Funcion para alternar el modo claro a modo escuro //

function changeeTheme(){

    if(mode_white){

        $('#bodyEelements').addClass("dark-layout");
        $('#iconThemee').addClass("icon-sun");
        $('#iconThemee').removeClass("icon-moon");
        mode_white = false;
        mode_dark = true;
        saveDataTheme("dark");

    } else if( mode_dark ){

        $('#bodyEelements').removeClass("dark-layout");
        $('#iconThemee').removeClass("icon-sun");
        $('#iconThemee').addClass("icon-moon");
        mode_white = true;
        mode_dark = false;
        saveDataTheme("light");
    }

}

function saveDataTheme(theme){
    $.ajax({
        headers: {
            'X-CSRF-Token': csrfToken
        },    
        type : "GET",
        data: { "theme" : theme },
        url : route_theme_change,
        success: function(r){
            
        }
    })
}