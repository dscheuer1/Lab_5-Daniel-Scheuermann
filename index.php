<?php
include 'top.php';
?>

<section class="arraySection">

    <?php

    $order = isset($_GET['order'])?$_GET['order']:'pmkEmployeeId';
    $direction = isset($_GET['direction'])?$_GET['direction']:'ASC';
    $page = isset($_GET['page'])?$_GET['page']:1;
    
    $sql = 'SELECT pmkEmployeeId, fldName, fldSalary, fldHighestDegree ';
    $sql .= 'FROM tblEmployees ';
    $sql .= 'ORDER BY ' . $order . ' ' . $direction;

    $records = $thisDataBaseWriter->select($sql);

    print '<p class="sql">' . $sql . '</p>';

    print '<table id="employees">';

    print '<tr>';

    if (strcmp($direction, "ASC") == 0) {
        print '<th><a class="head" href="index.php?order=pmkEmployeeId&direction=DESC">ID</a></th>';
    } else {
        print '<th><a class="head" href="index.php?order=pmkEmployeeId&direction=ASC">ID</a></th>';
    }


    if (strcmp($direction, "ASC") == 0) {
        print '<th><a class="head" href="index.php?order=fldName&direction=DESC">Name</a></th>';
    } else {
        print '<th><a class="head" href="index.php?order=fldName&direction=ASC">Name</a></th>';
    }


    if (strcmp($direction, "ASC") == 0) {
        print '<th><a class="head" href="index.php?order=fldSalary&direction=DESC">Salary</a></th>';
    } else {
        print '<th><a class="head" href="index.php?order=fldSalary&direction=ASC">Salary</a></th>';
    }

    if (strcmp($direction, "ASC") == 0) {
        print '<th><a class="head" href="index.php?order=fldHighestDegree&direction=DESC">Degree</a></th>';
    } else {
        print '<th><a class="head" href="index.php?order=fldHighestDegree&direction=ASC">Degree</a></th>';
    }


    print '</tr>';

    foreach (array_slice($records, $page*10, 10) as $record) {
        print '<tr>' . PHP_EOL;
        print '<td>' . $record['pmkEmployeeId'] . '</td>' . PHP_EOL;
        print '<td>' . $record['fldName'] . '</td>' . PHP_EOL;
        print '<td>' . $record['fldSalary'] . '</td>' . PHP_EOL;
        print '<td>' . $record['fldHighestDegree'] . '</td>' . PHP_EOL;
        print '</tr>' . PHP_EOL;
    }

    print '<tr>';
    print '<th colspan="4" class="nav">';
    if ($page > 0) {
        print '<a class="head arrow" href="index.php?order=' . $order . '&direction=' . $direction . "&page=" . $page-1 . '" class="arrow"> << </a>';
    } else {
        print '<a class="head arrow" href="index.php?order=' . $order . '&direction=' . $direction . "&page=0" . '"> << </a>';

    }
    print '   ' . $page+1 . '   ';
    print '<a class="head arrow" href="index.php?order=' . $order . '&direction=' . $direction . "&page=" . $page+1 . '"> >> </a>';
    print '</th>';
    print '</tr>';

    print '</table>';
    ?>


</section>

<?php
include 'footer.php';
?>