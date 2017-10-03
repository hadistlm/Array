<?php
$unieq = range(11, 20);
shuffle($unieq);

print_r(array_slice($unieq, 0, 10));
?>