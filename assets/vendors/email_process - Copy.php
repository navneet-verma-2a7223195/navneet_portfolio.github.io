<?php 
    if(isset($_POST['btn-send']))
    {
        $UserName = $_POST['UName'];
        $Email = $_POST['Email'];
        $Subject = $_POST['Subject'];
        $Msg = $_POST['msg'];

        if(empty($UserName)||empty($Email)||empty($Subject)||empty($Msg))
        {
            header('location:index.php/welcome/contactus?error');
        }
        else 
        {
            $to = "contactme@algoqube.com";
            

            if(mail($to,$Subject,$Msg,$Email))
            {
                header("location:index.php/welcome/contactus?success");
            }
            
        }

    }
    else
    {
        header("location:index.php/welcome/contact_us.php");
    }
?>