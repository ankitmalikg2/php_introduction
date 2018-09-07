<?php

$conn = oci_connect('hr', 'welcome', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, 'SELECT department_id, department_name FROM departments');
oci_execute($stid);

while (($row = oci_fetch_assoc($stid)) != false) {
    echo $row['DEPARTMENT_ID'] . " " . $row['DEPARTMENT_NAME'] . "<br>\n";
}

oci_free_statement($stid);
oci_close($conn);
?>  