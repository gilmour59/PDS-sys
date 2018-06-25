$(document).ready(function() {

    $.ajax({
        url: 'php_action/fetchPersonalInformation.php',
        type: 'post',
        data: {userId: userId},
        dataType: 'json',
        success:function(response) {				
            
            $("#empName").html(response.firstname);
            console.log(response);
        }
    });

}); // document.ready fucntion


				