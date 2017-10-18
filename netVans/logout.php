<HEAD>
<meta charset="UTF-8">
</HEAD>
    
    <?php
error_reporting('E_ALL');
session_cache_limiter('public');
session_cache_expire(0);
session_start(); 


  	unset ($_SESSION['email']);
	unset ($_SESSION['senha']);
    unset  ($_SESSION['tipo_login']);

session_destroy();

session_write_close(); 



echo "<script type='text/javascript'>

	alert('Você saiu! Até logo!!!');

	window.location='/netvans/index.php';

</script>";

?>