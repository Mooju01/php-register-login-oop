<?php

    session_start();

    if($_SESSION['id'] == ""){
       header("location: signin.php"); 
    }else{

    
 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome Page</title>

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
     crossorigin="anonymous">

</head>
<body>
        <div class="container">
            <h1 class="mt-5">Welcome <?php echo $_SESSION['fname']; ?></h1>   
            <hr>
            <p>
            
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, repellat alias facere pariatur aut laboriosam officiis, maxime, magnam cumque ea soluta quasi aliquam officia molestiae exercitationem voluptate perspiciatis voluptatibus nostrum assumenda mollitia consequuntur ipsum provident? Sint ipsam ut, odio repellendus temporibus animi architecto eveniet harum dignissimos vitae nihil, aspernatur provident dicta maxime tempore ex iusto fuga quos dolor, nisi quibusdam nulla. Dignissimos odit vero doloribus placeat soluta! Ducimus, atque! Enim neque voluptas totam expedita magnam eligendi temporibus alias quos recusandae a repellendus inventore voluptatem necessitatibus nulla, non eaque earum cum laboriosam qui similique animi! Temporibus officia nisi a totam reprehenderit dolore consequatur atque optio molestiae veniam est illum sed fuga veritatis sequi, in ipsum sint eos blanditiis alias voluptatibus ipsa dicta. Rem nam ab velit in aliquid aspernatur placeat, maiores repudiandae voluptatum corrupti, atque nemo, repellendus tenetur veritatis ex! Reiciendis, magnam possimus? Veritatis hic quae voluptatem necessitatibus sequi quidem distinctio odio, commodi ducimus autem. Natus esse harum blanditiis veniam ratione nesciunt qui, culpa quia tempora aliquid reprehenderit dignissimos ipsam id voluptates tenetur deserunt modi velit eligendi quis voluptatibus maiores? Voluptate repellat esse dignissimos quas, animi accusantium molestias maxime repudiandae ipsa alias temporibus architecto rem voluptates fugit ut dolorum nam dolore?

            </p>
            <hr>
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>

   <!-- Option 2: Separate Popper and Bootstrap JS -->
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  
</body>
</html>
<?php
}
?>
