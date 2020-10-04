<?php
require_once('php/component.php');
require_once('php/operation.php')
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
   
    <title>Bookstore</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>

<body>

<main>
    <div class="container text-center">
        <h1 class="py-4 bg-light text-dark rounded"><i class="fad fa-layer-group"></i>  Bookstore</h1>
        
 <div class="d-flex justify-content-center">
    <form action="" method="post" class="w-50">
        <div class="pt-2">
            <?php inputElement("<i class='fas fa-id-badge'></i>", "Book ID", "book_id", setID());?>
        </div>
        <div class="pt-2">
            <?php inputElement("<i class='fas fa-book'></i>","Book Name","book_name","");?>
        </div>
        <div class="row pt-2">
        <div class="col">
            <?php inputElement("<i class='fas fa-people-carry'></i>","Publisher","book_publisher","");?>
        </div>
        <div class="col">
            <?php inputElement("<i class='fas fa-dollar-sign'></i>","Price","book_price","");?>
        </div>
        </div>
            
        <div class="d-flex justify-content-center">
        <?php buttonElement("btn-create", "btn btn-success", "<i class='fas fa-plus'></i>", "create", "dat-toggle='tooltip' data-placement='bottom' title='Create'"); ?>
        <?php buttonElement("btn-read", "btn btn-primary", "<i class='fas fa-sync'></i>", "read", "dat-toggle='tooltip' data-placement='bottom' title='Read'"); ?>
        <?php buttonElement("btn-update", "btn btn-light border", "<i class='fas fa-pen-alt'></i>", "update", "dat-toggle='tooltip' data-placement='bottom' title='Update'"); ?>
        <?php buttonElement("btn-delete", "btn btn-danger", "<i class='fas fa-trash'></i>", "delete", "dat-toggle='tooltip' data-placement='bottom' title='Delete'"); ?>
        <?php deleteBtn(); ?>
    </div>
    </form>
</div>

 <div class="d-flex table-data justify-content-center">
     <table class="table table-stripped table-dark">
         <thead clas="thead-dark">
             <tr>
                 <th>ID</th>
                 <th>Book Name</th>
                 <th>Publisher</th>
                 <th>Book Price</th>
                 <th>Edit</th>
             </tr>
         </thead>
         <tbody id="tbody">
             <?php
            if(isset($_POST['read'])){
                $result = getData();

                if($result){

                    while($row = mysqli_fetch_assoc($result)){ 
                        ?>
                    <tr>
                        <td data-id="<?php echo $row['id'];?>"><?php echo $row['id'];?></td>
                        <td data-id="<?php echo $row['id'];?>"><?php echo $row['book_name'];?></td>
                        <td data-id="<?php echo $row['id'];?>"><?php echo $row['book_publisher'];?></td>
                        <td data-id="<?php echo $row['id'];?>"><?php echo '$'.$row['book_price'];?></td>
                        <td><i class="fas fa-edit btnedit" data-id="<?php echo $row['id'];?>"></i></td>
                    </tr>
        
                    <?php
                    }
                }
            }

            ?>

         </tbody>
         
     </table>

 </div>

</div>
</main>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src='php/main.js'></script>
</body>
</html>