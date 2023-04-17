<!DOCTYPE html>
<html>
<body>

<h1>  
    <?php
$book = [[ 'name' => 'Turtles',
'author' => 'John',
'website' => "http://book1.com"
],
[
 'name' => 'Confess',
'author' => 'CoHo',
'website' => "http://book2.com"
],
[
 'name' => 'Verity',
'author' => 'CoHo',
'website' => "http://book3.com"
]
];
function expectedBooks($book,$a)
{
    $receivedBook = [];
    foreach($book as $books)
    {
        if($books['author'] === $a)
        {
            $receivedBook[] = $books;
        }
    }
    return $receivedBook;
}
    ?>
   <ul>
    <?php foreach(expectedBooks($book,'John') as $books) : ?>
        <li>
          <a href="<? echo $books['website'] ?>">
          <?= $books['name']?>
          </a>
    </li>  

        <?php endforeach; ?>
        </ul>

</h1>

</body>
</html>