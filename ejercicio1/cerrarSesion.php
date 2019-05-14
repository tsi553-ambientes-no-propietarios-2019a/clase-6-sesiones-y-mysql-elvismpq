<?php
session_start();
header('Location: index.php?log_out=Sesión finalizada!');
session_destroy();
?>