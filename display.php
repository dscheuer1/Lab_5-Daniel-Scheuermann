<?php
include 'top.php';
?>

<section class="arraySection">

    <?php
    $sql = 'SELECT pmkEmployeeId, fldName, fldSalary, fldHighestDegree ';
    $sql .= 'FROM tblEmployees ';
    $sql .= 'ORDER BY pmkEmployeeId';

    $records = $thisDataBaseWriter->select($sql);

    foreach ($records as $record) {
        print '<a href="displayResults.php?id=' . $record['pmkPictureSurveyDataId'] . '">' . PHP_EOL;
        print '<p>' . PHP_EOL;
        print $record['fldEmployeeId'] . ', ' . PHP_EOL;
        print $record['fldName'] . ', ' . PHP_EOL;
        print $record['fldSalary'] . ', ' . PHP_EOL;
        print $record['fldHighestDegree'] . ', ' . PHP_EOL;
        print '</p>' . PHP_EOL;
        print '</a>' . PHP_EOL;
    }
    ?>

</section>

<?php
include 'footer.php';
?>