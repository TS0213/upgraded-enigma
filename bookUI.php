<?php
include 'Books.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booksarray Activity</title>
    <!--offline bootstrap-->
	  <link rel="stylesheet" href="css/bootstrap.css">
	<!-- via CDN-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
	   integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
 
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col mt-3">
                <h1 class="text-primary text-center">Booksarray Activity</h1>
            </div>
            <div class="col-2"></div>
        </div>
        <div class="row mt-3">
            <div class="col-2"></div>
            <div class="col-8">
                <form action="" method="post" class="">
                    <div class="">
                        <p>How many books do you wanna save?</p>
                    </div>
               
                    <input type="number" name="num" id="num1" class="form-control m-1">
                    <label class="label-control m-1 text-secondary mb-2" for="num1">Numbers of books</label> 

                    <input type="submit" name="set" id="set" value="Submit" class="btn btn-primary form-control m-1" >
                </form>    
				<div>
                    
                    <?php
                        if(isset($_POST['set'])){
                            $num = $_POST['num'];  ?>
                            <form action="" method="post">
                               <?php for($i=1; $i <= $num; $i++){ ?>
                                    Author Name<br>
                                   <input type='text' name='author[]' class='mt-1'><br>
                                    Book Name<br>
                                    <input type='text' name='book[]' class='mt-1'><br>
                                <?php }?>
                                
                                <input type='submit' name='btn_submit' value='Submit' class='btn btn-primary mt-1'>
                            </form>
                    <?php } ?>
                    <?php
                        if(isset($_POST['btn_submit'])){

                            $obj = new Book;
                            $authors = $_POST['author'];
                            $books = $_POST['book'];

                            $obj->setValues($books, $authors);

                            $obj->display();
                            
                        }

                    ?>
                   </div>
                            
            </div>
            <div class="col-2"></div>
        </div>
		<div class="row mt-3">
            <div class="col mt-3 text-center">
               
            </div>
        </div>
    </div>

</body>
</html>