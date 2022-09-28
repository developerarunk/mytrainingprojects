$(document).ready(function(){
    $("#confirm_password").keyup(function(){
       
      var p=$("#password").val();
      var cp=$("#confirm_password").val();
        if(p!=cp){
        $("#confirm_password").addClass("input-danger");  
        $('#csmt').attr("disabled", "disabled");
   }else{
       $("#confirm_password").removeClass("input-danger");
       $('#csmt').removeAttr("disabled");
       }
    });
});