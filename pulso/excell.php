<?php
header("Content-type: application/vnd.ms-excel; name='excel'");
header("Content-Disposition:attachment; filename=ficheroExcel.xls");
header("Pragma: no-cache");
header("Expires: 0");
echo $_POST['datos'];
?>