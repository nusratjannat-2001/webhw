<?php

$books = [
[
'title' => 'To Kill A Mockingbird',
'author' => 'Harper Lee',
'available' => true,
'pages' => 336,
'isbn' => 9780061120084
],
[
'title' => '1984',
'author' => 'George Orwell',
'available' => true,
'pages' => 267,
'isbn' => 9780547249643
],
[
'title' => 'One Hundred Years Of Solitude',
'author' => 'Gabriel Garcia Marquez',
'available' => false,
'pages' => 457,
'isbn' => 9785267006323
],
];
?>
<table border="1" width="900">
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Available</th>
        <th>Pages</th>
        <th>Isbn</th>
    </tr>
    <?php foreach($books as $p)

    {
    ?>
    <tr>
    <td><?php echo $p['title'];?></td>
    <td><?php echo $p['author'];?></td>
    <td><?php echo $p['available'];?></td>
    <td><?php echo $p['pages'];?></td>
    <td><?php echo $p['isbn'];?></td>
    </tr>
    <?php
    }
    ?>
</table>