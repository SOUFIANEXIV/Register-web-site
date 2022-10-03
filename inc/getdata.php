<?php

$sql = 'SELECT * FROM users   ORDER BY RAND() LIMIT 1';
$res= mysqli_query($connect,$sql);
$users =mysqli_fetch_all($res,MYSQLI_ASSOC);






mysqli_free_result($res);
mysqli_close($connect);



?>


