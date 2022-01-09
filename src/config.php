<?php
define('SERVER', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DATABASENAME', '175a071511_employees');
$connect = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASENAME);
if ($connect == false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
