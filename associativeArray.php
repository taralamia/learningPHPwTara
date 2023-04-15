<!DOCTYPE html>
<html>
<body>

<h1>Book Contents 
    <?php
    $books = [ ["name" => "Turtles",
                 "author" => "John",
                 "website" => "http//example.com"],
     
                 [
                    "name" => "All the bright stars",
                    "author" => "Jennifer",
                    "website" => "http//example2.com"
                 ]
    ];

    ?>
    <ul>
        <?php
        foreach($books as $book) : ?>
         <li> 
            <?php
             echo $book ['name'] ; 
             ?> 
             </li> 
         
        
<?php endforeach; ?>
</ul>
</h1>

</body>
</html>