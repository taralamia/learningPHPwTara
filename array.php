<!DOCTYPE html>
<html>
<body>

<h1> Book List
    <?php
    $books = ["It ends with us",
              "Confess",
              "It starts with us"
    ];
    ?>

<ol> 
        <?php
        foreach ($books as $book)
        echo "<li> $book </li>";  
        ?>
      </ol>
      </h1>
     

</body>
</html>