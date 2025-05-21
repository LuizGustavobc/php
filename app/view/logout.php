<?php
require_once '../controller/auth.php';

Auth::logout();

header("Location: ../../public/index.php");

exit;

?>