<?php 

  session_start(); 
  if(!isset($_SESSION['fname'])){
    echo "<script type= 'text/javascript'>alert('Please Login First!');
                  window.location.assign('index'); </script>";
  }

?>