<?php
$goods = [
    ["Товар 1", "good1", "2300"],
    ["Товар 2", "good2", "5600"],
    ["Товар 3", "good3", "300"],
    ["Товар 4", "good4", "5900"],
    ["Товар 5", "good5", "34000"],
    ["Товар 6", "good6", "19000"],
];

$goods = [
    [
        "title" => "Товар 1",
        "image" => "good1",
        "price" => "2300"
    ],
    [
        "title" => "Товар 2",
        "image" => "good2",
        "price" => "4566"
    ],
    [
        "title" => "Товар 3",
        "image" => "good3",
        "price" => "8766"
    ],
    [
        "title" => "Товар 4",
        "image" => "good4",
        "price" => "26000"
    ],
    [
        "title" => "Товар 5",
        "image" => "good5",
        "price" => "10000"
    ],
    [
        "title" => "Товар 1",
        "image" => "good1",
        "price" => "2300"
    ],
];

//foreach ($goods as $good) {
//    var_dump($good); // ["Товар 1", "good1", "2300"]
//    foreach ($good as $good_param) {
//        var_dump($good_param);
//    }
//}
?>
<div>
    <div>
        <?php foreach ($goods as $good): ?>
        <div>
            <img src="<?php echo $good['image'];?>" alt="<?php echo $good['title'];?>">
        </div>
        <p><?php echo $good['title'];?></p>
        <p><?php echo $good['price'];?></p>
        <?php endforeach; ?>
    </div>
</div>


