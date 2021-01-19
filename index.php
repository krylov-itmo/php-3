<?php

$goods = [
    [
        'id' => 1,
        'title' => 'Flute',
        'price' => 20000,
        'img' => 'flute.jpg',
        'description' => [
            'color' => 'white',
            'material' => 'bamboo'
        ]
    ],
    [
        'id' => 2,
        'title' => 'Guitar',
        'price' => 18000,
        'img' => 'guitar.jpg',
        'description' => [
            'color' => 'brown',
            'material' => 'linden'
        ]
    ],
    [
        'id' => 3,
        'title' => 'Drum',
        'price' => 68000,
        'img' => 'drum.jpg',
        'description' => [
            'color' => 'brown',
            'material' => 'steel'
        ]
    ],
];

$items = [
    [
        'title' => 'Телефон',
        'price' => 100000,
        'count' => 4
    ],
    [
        'title' => 'Часы',
        'price' => 500000,
        'count' => 2
    ],
    [
        'title' => 'Кольцо',
        'price' => 80000,
        'count' => 10
    ],
    [
        'title' => 'Браслет',
        'price' => 120000,
        'count' => 7
    ],
    [
        'title' => 'Галстук',
        'price' => 8000,
        'count' => 50
    ],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Домашняя работа занятие 3</title>
</head>
<body>
<h1>ЗАДАНИЕ 1</h1>
    <?php foreach ($goods as $good): ?>
        <article>
            <h2> Название: <?php echo $good['title'] ?></h2>
            <p> Стоимость: <?php echo $good['price'] ?></p>
            <img src = "/img/goods/<?php echo $good['img'] ?>" height = "100" width = "100" alt = "Картинка <?php echo $good['img'] ?> ненайдена">
            
            <?php foreach ($good['description'] as $key => $desc): ?>
                <table>
                <tr>
                <td><?php echo $key ?></td>
                <td><?php echo $desc ?></td>
                </tr>   
                </table>
            <?php endforeach; ?>
               
            <a href = "index.php?id=<?php echo $good['id'] ?>"> Подробнее </a>
         </article>
    <?php endforeach; ?>
 <h1>ЗАДАНИЕ 2</h1> 
 <?php foreach ($items as $key => $row) {
        $title[$key] = $row['title'];
        $price[$key] = $row['price'];
        $count[$key] = $row['count'];
} 
      $arr_sort = array_multisort($price, SORT_ASC, $title, SORT_DESC, $count, SORT_ASC, $items);
?>  
<?php foreach ($items as $item): ?>
   <?php extract($item) ?>
    <?php echo $title . " " . $price . " " . $count ?> <br>
<?php endforeach; ?> 

<h1>ЗАДАНИЕ 3</h1> 
    <?php 
        $x = 10;
        $y = 60;
        $day = 1;
        echo "Исходные данные x= ". $x . " , y = " . $y . "<br>"; 
        for ($i = $x; $y > 0; $i= $i + ($i / 10)) {
            echo "День:" . $day . " Пробежал:" . $i . " Осталось:" . ($y-$i) . "<br>";
            $day++;
            $y = $y - $i;
        }
        $day--;
        echo "В итоге на это у него уйдет " . $day . " дней";
     ?>   
</body>
</html>