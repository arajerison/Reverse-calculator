//Evenement clic sur les touches numeriques
$(function(){
    var valeur_input;
    $("input[type=button][class=touch]").click(function(){
        //e.preventDefault();
        var input_actuel = $(this).val();
        valeur_input = $("#input").val($("#input").val()+input_actuel);
           
    });

    
//Evenement clic sur les touches operandes

    $("input[type=button][class=operand]").click(function(){

        $.post(
            "../controleur/c-index.php",
            {
                valeur_input: valeur_input.val(),
                valeur_operand: $(this).val()
            },
            
            function (data){
                //var json=$.parseJSON(data);
                $("#result").val(data);
                
            }
            
        );
        $("#input").val("");
    });
});


//Effacement des champs textes
$(function (){
    $("input.clear").on('click',(function(){
        $.get(
              "../controleur/c-index.php",
              {clear:""}
              
        );
            
        
        $("#input").val("");   
        $("#result").val("");
        
    }));        
    
});
      



    
          
        
  