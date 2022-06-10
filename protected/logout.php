<?php

include_once 'session.php'?>
<?php

session_destroy();
header('Location: index.php');
?>