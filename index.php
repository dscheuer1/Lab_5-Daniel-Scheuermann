<?php
include 'top.php';
?>

<section class="arraySection">

    <?php

    $order = isset($_GET['order'])?$_GET['order']:'pmkEmployeeId';
    $direction = isset($_GET['direction'])?$_GET['direction']:'ASC';
    $page = isset($_GET['page'])?$_GET['page']:0;
    
    $sql = 'SELECT pmkEmployeeId, fldName, fldSalary, fldHighestDegree ';
    $sql .= 'FROM tblEmployees ';
    $sql .= 'ORDER BY ' . $order . ' ' . $direction;

    $records = $thisDataBaseWriter->select($sql);

    print '<p class="sql">' . $sql . '</p>';

    print '<table id="employees">';

    print '<tr>';
    if (strcmp($direction, "ASC") == 0) {
        print '<th><a href="index.php?order=pmkEmployeeId&direction=DESC&page=0">ID</a></th>';
    } else {
        print '<th><a href="index.php?order=pmkEmployeeId&direction=ASC&page=0">ID</a></th>';
    }


    if (strcmp($direction, "ASC") == 0) {
        print '<th><a href="index.php?order=fldName&direction=DESC&page=0">Name</a></th>';
    } else {
        print '<th><a href="index.php?order=fldName&direction=ASC&page=0">Name</a></th>';
    }


    if (strcmp($direction, "ASC") == 0) {
        print '<th><a href="index.php?order=fldSalary&direction=DESC&page=0">Salary</a></th>';
    } else {
        print '<th><a href="index.php?order=fldSalary&direction=ASC&page=0">Salary</a></th>';
    }

    if (strcmp($direction, "ASC") == 0) {
        print '<th><a href="index.php?order=fldHighestDegree&direction=DESC&page=0">Degree</a></th>';
    } else {
        print '<th><a href="index.php?order=fldHighestDegree&direction=ASC&page=0">Degree</a></th>';
    }


    print '</tr>';

    for (int i = $page; i < $page+10; $page++) {
        print '<tr>' . PHP_EOL;
        print '<td>' . $records[i]['pmkEmployeeId'] . '</td>' . PHP_EOL;
        print '<td>' . $records[i]['fldName'] . '</td>' . PHP_EOL;
        print '<td>' . $records[i]['fldSalary'] . '</td>' . PHP_EOL;
        print '<td>' . $records[i]['fldHighestDegree'] . '</td>' . PHP_EOL;
        print '</tr>' . PHP_EOL;
    }

    print '</table>';
    ?>


</section>

<?php
include 'footer.php';
?>