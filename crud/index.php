<?php
    require_once("./php/component.php");
    require_once("./php/operation.php");
    $message = "";
    $data = loaddb($conn, $message);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js" integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg==" crossorigin="anonymous"></script>
    
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="style.css" />
    <title>CURD Mysql</title>
</head>
<body>
    <div class="text-center py-2 bg-dark text-light">
        <h5><?= $message ?></h5>
    </div>
    <div class="container text-center">
        <h1 class="py-2 mt-5"><i class="fas fa-swatchbook"></i> Books </h1>
        
        <div class="d-flex justify-content-center">
            <form method="post" action="" class="w-50">
                <div class="pt-2">
                    <?=
                        inputElement('<i class="fas fa-id-card"></i>', 'ID', 'book_id', "");
                    ?>
                </div>
                <div class="pt-2">
                    <?=
                        inputElement('<i class="fas fa-book"></i>', 'Name', 'book_name', "");
                    ?>
                </div>
                <div class="row pt-2">
                    <div class="col">
                        <?=
                            inputElement('<i class="fas fa-people-carry"></i>', 'Publisher', 'book_publisher', "");
                        ?>
                    </div>
                    <div class="col">
                        <?=
                            inputElement('<i class="fas fa-dollar-sign"></i>', 'Price', 'book_price', "");
                        ?>
                    </div>
                </div>
                <div class="d-flex py-2 mb-5 justify-content-between">
                    <?= buttonElement("btn_create", "btn btn-success", "<i class='fa fa-plus' aria-hidden='true'></i>", "create", "data-toggle='tooltip' data-placement='bottom' title='Create' ") ?>
                    <?= buttonElement("btn_read", "btn btn-primary", "<i class='fa fa-sync' aria-hidden='true'></i>", "read", "data-toggle='tooltip' data-placement='bottom' title='Reset' ") ?>
                    <?= buttonElement("btn_update", "btn btn-light border", "<i class='fa fa-pen-alt' aria-hidden='true'></i>", "update", "data-toggle='tooltip' data-placement='bottom' title='Update' ") ?>
                    <?= buttonElement("btn_delete", "btn btn-danger", "<i class='fa fa-trash-alt' aria-hidden='true'></i>", "delete", "data-toggle='tooltip' data-placement='bottom' title='Delete' ") ?>
                </div>
                
                
            </form>
        </div>

        <!-- Bootstrap table -->
        <div class="d-flex table-data">
            <table class="table table-dark">
                <thead class="thead-dark">
                    <tr>
                        <td>ID</td>
                        <td>Book Name</td>
                        <td>Publisher</td>
                        <td>Book Price</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                    foreach($data as $dt) :?>
                        <?php
                            $id = $dt['ID'];
                            $name = $dt['book_name'];
                            $publisher = $dt['book_publisher'];
                            $price = $dt['book_price'];
                            echo "<tr class='data-row' title='Choose' onclick=on($id,$name,$publisher,$price)>"
                        ?>
                            <td><?=$id?></td>
                            <td><?=$name?></td>
                            <td><?=$publisher?></td>
                            <td><?=$price?></td>                            
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>

    </div>
    

    <!-- Bootstrap CDN js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script src="./php/main.js"></script>
</body>
</html>