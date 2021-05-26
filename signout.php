<?php
session_start();
session_destroy();
header("Location: signInsignUp.php?logout=successful");
exit();