$(document).ready(function() {

    $.ajax({
        url: 'php_action/fetchEmployeeData_Image.php',
        type: 'post',
        data: {userId: userId},
        dataType: 'json',
        success:function(response) {				

                $("#editEmployeeImage").fileinput({
                overwriteInitial: true,
                maxFileSize: 1500,
                showClose: false,
                showCaption: false,
                browseLabel: '',
                removeLabel: '',
                browseIcon: '<i class="glyphicon glyphicon-folder-open"></i>',
                removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
                removeTitle: 'Cancel or reset changes',
                elErrorContainer: '#kv-avatar-errors-1',
                msgErrorClass: 'alert alert-block alert-danger',
                //defaultPreviewContent: '<img src="assests/images/profile/photo_default.png" alt="Profile Image" style="width:100%; height:auto;" />',
                defaultPreviewContent: '<img src="assests/images/profile/'+response.image+'" alt="Profile Image" style="width:100%;">',
                layoutTemplates: {main2: '{preview} {remove} {browse} {upload}'},
                allowedFileExtensions: ["jpg", "png", "gif", "JPG", "PNG", "GIF"],
            });
            		
            //To send $_POST['userId'] to #updateEmployeeImageForm.
            $(".editEmployeePhotoFooter").append('<input type="hidden" name="userId" id="userId" value="'+response.userId+'" />');
            //Old_picture
            $(".editEmployeePhotoFooter").append('<input type="hidden" name="old_picture" id="old_picture" value="'+response.image+'" />');
        }
    });

    $("#updateEmployeeImageForm").off('submit').on('submit', function(){
        
        var employeeImage = $("#editEmployeeImage").val();
        
        if(employeeImage){
            
            var form = $(this);
            var formData = new FormData(this);
            
            $.ajax({
                url : form.attr('action'),
                type: form.attr('method'),
                data: formData,
                dataType: 'json',
                cache: false,
                contentType: false,
                processData: false,
                success:function(response) {
                    if(response.success == true) {																		

                        location.reload();
                    } // /if response.success
                } // /success function
            }); // /ajax function    
        }
        return false;
    });
}); // document.ready fucntion


				