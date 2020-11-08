<?php
setcookie("name", "", time()-86400);
header("Location: index.htm");
?>