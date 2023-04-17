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
             ?>
     <ul>
        
        <?php foreach($book as $book1) : ?>

        <?php if($book1['author'] == "CoHo") : ?>

            <li>
                <a href ="<?= $book1['website']?>">
                <?= $book1['name'] ?>
        </a>
        </li>
            <?php endif; ?>
            <?php endforeach; ?>
            </ul>        

</h1>

</body>
</html>