<?php  include'db_conn.php';

if (isset($_POST['profil-btn']))
    {
        $user_id = $_POST['user_id'];
        $new_name = $_POST['username_user'];
        $new_email = $_POST['email_user'];
        $new_bday = $_POST['bd_user'];
        $new_password = md5($_POST['password_user']);
        // $img_user = $_FILES["img_user"]['name'];






        # Profile Picture Uploading
        if (isset($_FILES["img_user"]['name'])) {
            # get data and store them in var
            $img_name  = $_FILES['img_user']['name'];
            $tmp_name  = $_FILES['img_user']['tmp_name'];
            $error  = $_FILES['img_user']['error'];

            # if there is not error occurred while uploading
            if($error === 0){
               
               # get image extension store it in var
               $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);

               /** 
                convert the image extension into lower case 
                and store it in var 
                **/
                $img_ex_lc = strtolower($img_ex);

                /** 
                crating array that stores allowed
                to upload image extension.
                **/
                $allowed_exs = array("jpg", "jpeg", "png");

                
                // check if the the image extension  is present in $allowed_exs array


                if (in_array($img_ex_lc, $allowed_exs)) {
                    /** 
                     renaming the image with user's username
                     like: username.$img_ex_lc
                    **/
                    $new_img_name = $new_name. '.'.$img_ex_lc;

                    # crating upload path on root directory
                    $img_upload_path = '../upload/'.$new_img_name;

                    # move uploaded image to ./upload folder
                    move_uploaded_file($tmp_name, $img_upload_path);
                }else {

                    $em = "Can't upload this type of file";
                    echo "<script>alert('$em')</script>";
                    // header("Location: ../index.php?error=$em");
                    exit;
                }

            }
        }

# if the user upload Profile Picture
        if (isset($new_img_name)) {

# updating data into database
            $sql= "UPDATE users SET names = ?, email = ?, bday = ?, password = ?, img = ? WHERE user_id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$new_name, $new_email, $new_bday, $new_password, $new_img_name, $user_id]);
            // echo "<script>alert('Update secced')</script>";
            header("Location: ../index.php");
        }else {
# updating data into database
            $sql= "UPDATE users SET names = ?, email = ?, bday = ?, password = ? WHERE user_id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$new_name, $new_email, $new_bday, $new_password, $user_id]);
            // echo "<script>alert('Update secced')</script>";
            header("Location: ../index.php");
        }
    }



if (isset($_POST['delete-img'])) {
            
    $user_id = $_POST['user_id'];
    $img_default_name = 'user.jpg';

    $sql= "UPDATE users SET img = ? WHERE user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$img_default_name, $user_id]);
    // echo "<script>alert('Update secced')</script>";
    header("Location: ../index.php");

    }
            
?>