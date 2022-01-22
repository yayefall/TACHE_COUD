<?php
include ('connexion.php');
        
$select = $con->prepare('SELECT * FROM retenues');

$select->setFetchMode(PDO::FETCH_ASSOC);
$select->execute();

$newExcel = $select->fetchAll();

$excel = "";
$excel .=  "Id\trubrique1\tRubrique2\tMontant\n";

foreach($newExcel as $row) {
    $excel .= "$row[id]\t$row[rubrique1]\t$row[rubrique2]\t$row[montant]\n";
}

header("Content-type: application/vnd.ms-excel");
header("Content-disposition: attachment; filename=Liste-des-revenues.xls");

print $excel;
exit;

?>