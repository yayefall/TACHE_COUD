<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
     integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Listes des Revenues</title>
</head>

<body>
<main class="container" style="text-align:center;">
        <div class="row">
            <section class="col-12 text-center">
             <h1>Etat des retenues sur salaire</h1> 
                <?php
                    $k=1;
                    for($j=1; $j<100; $j++){
                        echo "Page".$k;
                        ?>
                        <table class="table" border="1">
                            <thead>
                                <th>Matricule</th>
                                <th>Prenom</th>
                                <th>Nom</th>
                                <th>Numero compte</th>
                                <th>Montant</th>
                            </thead>
                            <tbody>
                                <?php
                                    for($i=1; $i<28; $i++){
                                        ?>
                                        <tr>
                                            <td> <?php echo $i; ?></td>
                                            <td>yaye fall</td>
                                            <td>Dev</td>
                                            <td>TES0468TD</td>
                                            <td>1000000</td>
                                        </tr>
                                        <?php 
                                    }
                                ?>                        
                            </tbody>
                        </table>
                        <?php 
                        $k++;
                    }
                ?> 
            </section>
        </div>
        <a href="excel.php"class="text-center;" >
      <button type="button" class="btn btn-info" >Exporter Salaires</button></a>
    </main>
</body>
</html>