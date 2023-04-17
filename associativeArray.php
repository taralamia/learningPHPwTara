<!DOCTYPE html>
<html>
<body>

<h1>Book Contents 
    <?php
    $books = [ ["name" => "Turtles",
                 "author" => "John",
                 "website" => "http://example.com"],
     
                 [
                    "name" => "All the bright stars",
                    "author" => "Jennifer",
                    "website" => "http://example2.com"
                 ]
    ];

    ?>
    <ul>
        <?= "Book Name"; ?>
        <?php
        foreach($books as $book) : ?>
         <li> 
            <?php
             echo $book ['name'] ; 
             ?> 
             </li> 
<?php endforeach; ?>
</ul>
<ul>
    <?= "Author"; ?>
    <?php foreach($books as $book1) : ?>

      <li>
        <?= $book1['author']; ?>
    </li>

        <?php endforeach; ?>
        </ul>

        <ul>
    <?= "Website link"; ?>
    <?php foreach($books as $book2) : ?>
        <li>
          <a href="<? echo $book2['website'] ?>">
          <?= $book2['name']?>
          </a>
    </li>  

        <?php endforeach; ?>
        </ul>

</h1>

</body>
</html>