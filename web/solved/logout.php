<?php
setcookie("email", "", time()-86400);
header("Location: index.htm");
?>