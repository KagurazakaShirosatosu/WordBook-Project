<?php
setcookie("username",'',time()-3600,'/');
echo "<script>alert('Logout success.');document.location.href='../index.php'</script>";
?>