function MandarInformcao(Token,CRM){
    $.ajax({
        url:'consultar.php',
        method:'get',
        dataType:'json',
        data:{
            token:Token,
            crm:CRM
        }
    }).done((response)=>{
        console.log(response);
    });
}

MandarInformcao('123','4052');