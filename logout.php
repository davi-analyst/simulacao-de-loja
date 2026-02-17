<?php
session_start();
session_destroy(); // Remove a "chave" de acesso do servidor
header("Location: index.php"); // Manda de volta para o início
exit;
