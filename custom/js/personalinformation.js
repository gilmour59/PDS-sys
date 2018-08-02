$(document).ready(function() {

    $.ajax({
        url: 'php_action/fetchPersonalInformation.php',
        type: 'post',
        data: {userId: userId},
        dataType: 'json',
        success:function(response) {				
            
            $("#empName").html(response.firstname);
            $("#empId").html(response.emp_id)
            $("#empContactNum").html(response.mobile_no);
            $("#empEmail").html(response.email_add);
            //$("#empDept").html(response.dept);
            
            console.log(response);
        }
    });

}); // document.ready fucntion


				