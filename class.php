<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        class Book {
            var $title;
            var $author;
            var $pages;

            function __construct($aTitle, $aAuthor, $aPages) {
                $this->title = $aTitle;
                $this->author = $aAuthor;
                $this->pages = $aPages;
            }
        }

        $book1 = new Book("Harry Potter <br>", "J. K. Rowling <br>", 500);
        $book2 = new Book("Lord of the Rings <br>", "J. R. R. Tolkien", 600);

        echo $book1->title;
        echo $book1->author;

        echo $book2->title;
        echo $book2->author;
    ?>
</body>
</html>