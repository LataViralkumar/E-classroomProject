<?php 
error_reporting(0);
session_start();
if($_SESSION['admin_login_id'])
{
    session_destroy();
    echo '<script>
        window.location.href="http://127.0.0.1/admin/index.php";
        </script>';
}

?>