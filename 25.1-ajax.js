function buscarPacientes(){
    const nombre = $("#nombre").val();
    //alert("Buscando...")
    let datos ={
        nombre : $nombre
    };
    
    $.ajax({
        url : "26-ajax-pdo.php",
        type : "post",
        data : datos,
        sucess : function(result) {
            console.log(result);
        }
    })
    return;
}