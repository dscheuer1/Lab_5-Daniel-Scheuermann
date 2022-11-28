<?php
include 'top.php';
?>

<section class="arraySection">

    <?php
    $sql = 'SELECT pmkEmployeeId, fldName, fldSalary, fldHighestDegree ';
    $sql .= 'FROM tblEmployees ';
    $sql .= 'ORDER BY pmkEmployeeId';

    $records = $thisDataBaseWriter->select($sql);

    print '<p class="sql">' . $sql . '</p>';

    print '<table id="employees">';

    print '<tr>';
    print '<th>ID</th>';
    print '<th>Name</th>';
    print '<th>Salary</th>';
    print '<th>Degree</th>';
    print '</tr>';

    foreach ($records as $record) {
        print '<tr>' . PHP_EOL;
        print '<td>' . $record['pmkEmployeeId'] . '</td>' . PHP_EOL;
        print '<td>' . $record['fldName'] . '</td>' . PHP_EOL;
        print '<td>' . $record['fldSalary'] . '</td>' . PHP_EOL;
        print '<td>' . $record['fldHighestDegree'] . '</td>' . PHP_EOL;
        print '</tr>' . PHP_EOL;
    }

    print '</table>';
    ?>


</section>

<?php
include 'footer.php';
?>