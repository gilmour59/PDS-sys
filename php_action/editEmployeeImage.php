<?php 	
require_once 'core.php';

if($_POST) {		

    $userId = $_POST['userId'];
    $old_picture = $_POST['old_picture'];
    $error = false;
    
    $valid = array('success' => false, 'messages' => "Error while updating image", 'userId' => $userId);
    
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    
    if(!empty($_FILES['editEmployeeImage'])){
        
        $new_picture = trim(time() . $_FILES['editEmployeeImage']['name']);
        $new_picture_type = explode('.', $_FILES['editEmployeeImage']['name']);
        $new_picture_type = $new_picture_type[count($new_picture_type) - 1];
    }
    
    if(!empty($new_picture)){
        if(in_array($new_picture_type, array('gif', 'jpg', 'jpeg', 'png', 'JPG', 'GIF', 'JPEG', 'PNG'))){
            if($_FILES['editEmployeeImage']['error'] == 0){
                // Move the file to the target upload folder
                $target = '../assests/images/profile/'. basename($new_picture);
                if(move_uploaded_file($_FILES['editEmployeeImage']['tmp_name'], $target)){
                    if (!empty($old_picture) && ($old_picture != $new_picture) && ($old_picture != 'photo_default.png')) {
                    @unlink('../assests/images/profile/' . $old_picture);
                    }
                }else{
                    // The new picture file move failed, so delete the temporary file and set the error flag
                    @unlink($_FILES['editEmployeeImage']['tmp_name']);
                    $error = true;
                }
            }
        }else{
            @unlink($_FILES['editEmployeeImage']['tmp_name']);
            $error = true;
        }
    }
    
    if(!$error){
        $query = "UPDATE personal_information SET image = '$new_picture' WHERE userId = $userId";				

        $data = mysqli_query($dbc, $query);

        if($data === TRUE) {									
                $valid['success'] = true;
                $valid['messages'] = "Successfully Updated";	
        } 
        
    }else{
        return false;
    }
    
    mysqli_close($dbc);
    
    echo json_encode($valid);
    
}
