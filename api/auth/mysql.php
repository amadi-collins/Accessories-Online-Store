<?php 

include_once "./../connection/connection.php";

$sql = "SELECT category, product_name, price, COUNT(*) AS total_products FROM `products` GROUP BY category";

$res = $con->query($sql);

if(!$res)exit('Database connection failed');

$items = [];

while($data = $res->fetch_assoc()){

    $items[] = [
        "name"=>$data['product_name'],
        "price"=>$data['price'],
        "category"=>$data['category'],
        "total"=>$data['total_products']
    ];
}

foreach($items as $item){

    $product = "<div><h3>".$item['category']."</h3></div>".
    "<div style=\"display: flex; width: 500px;justify-content: space-between;font-size: 14px;\">
        <span>".$item['name']."</span>
        <span>".$item['price']."</span>
        <span>".$item['total']."</span>
        <span></span>
    </div>";

    echo $product;
}

exit();