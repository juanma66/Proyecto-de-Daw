<?php

session_start();
session_destroy();
session_unset();

	  echo '<script language="javascript">alert("Hasta pronto: '.$_SESSION['usuario'].'");</script>';

     echo "<script>
               setTimeout(function() {
                    location.href = '../index.php';
               }, 0001);
           </script>";

?>
