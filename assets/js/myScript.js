$(document).ready(function(){
    console.log("Bonjour1");
    $('#ClASup').click( function(event){
        console.log("Bonjour2");
        var btnClick = $(event.target).closest('.btn btn-sm btn-danger text-white ml-2');
        var idAsupprimer = $(btnClick).attr("idAsupprimer");
        if (idAsupprimer) {
            var suppression = confirm("Voulez-vous vraiment supprimer cette operation");
            if (suppression) {
                $.ajax({
                    url : '/mesprojets/BanqueDuPeuple/assets/ajax/supprimer.php',
                    type : 'GET',
                    data : {id : idAsupprimer},
                    success : function(data){
                        if (data == 1) {
                            window.location.reload();
                        }
                    }
                });
            }
        }
    });
});
