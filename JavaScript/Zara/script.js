$(document).ready(function(){

    $('#saveButton').click(function(event){
        event.preventDefault();

        var nome = $('#name').val();
        var email = $('#email').val();

        if (nome != "" && email != "") {
            $('.add-to-cart').attr('disabled', false);   
            $('#userInfo').show(function(){
                $(this).append = `${nome} <br> ${email}`;
            }); 

        }
        
        
    });
});