$(document).ready(function(){
    let mostrarEducacion = false;
    let mostrarProyectos = false;
    let mostrarExperiencia = false;
    let mostrarAptitudes = false;
    $("#textoEducacion").hide();
    $("#textoProyectos").hide();
    $("#textoExperiencia").hide();
    $("#textoAptitudes").hide();

    $("#ampliarEducacion").click(function(){
        if(!mostrarEducacion){
            $("#ampliarEducacion").text("Contraer (-)");
            $("#textoEducacion").show();
            mostrarEducacion = true;
        }
        else{
            $("#ampliarEducacion").text("Ampliar (+)");
            $("#textoEducacion").hide();
            mostrarEducacion = false;
        }
    })
    $("#ampliarAptitudes").click(function(){
        if(!mostrarAptitudes){
            $("#ampliarAptitudes").text("Contraer (-)");
            $("#textoAptitudes").show();
            mostrarAptitudes = true;
        }
        else{
            $("#ampliarAptitudes").text("Ampliar (+)");
            $("#textoAptitudes").hide();
            mostrarAptitudes = false;
        }
    })
    $("#ampliarProyectos").click(function(){
        if(!mostrarProyectos){
            $("#ampliarProyectos").text("Contraer (-)");
            $("#textoProyectos").show();
            mostrarProyectos = true;
        }
        else{
            $("#ampliarProyectos").text("Ampliar (+)");
            $("#textoProyectos").hide();
            mostrarProyectos = false;
        }
    })
    $("#ampliarExperiencia").click(function(){
        if(!mostrarExperiencia){
            $("#ampliarExperiencia").text("Contraer (-)");
            $("#textoExperiencia").show();
            mostrarExperiencia = true;
        }
        else{
            $("#ampliarExperiencia").text("Ampliar (+)");
            $("#textoExperiencia").hide();
            mostrarExperiencia = false;
        }
    })

})