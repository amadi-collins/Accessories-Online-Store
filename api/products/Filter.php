<?php

require_once dirname(__FILE__).'/../connection/connection.php';
require_once dirname(__FILE__).'/../../core/url.php';

$sql = "SELECT category, COUNT(*) AS total_items FROM `products` GROUP BY category";

$stmt = $con->prepare($sql);

if(!$stmt){
    echo <<<HTML
    <div>
        <span>Internal server error</span>
    </div>
    HTML;
}

$stmt->execute();

$result = $stmt->get_result();

$rows = $result->num_rows;

if($rows < 1){
    echo <<<HTML
    <div>
        <span>No categories available</span>
    </div>
    HTML;
}

$items = [];

while($data = $result->fetch_assoc()){

    $items[] = [
        "category"=>$data['category'],
        "total"=>$data['total_items']
    ];
}

foreach($items as $item){

    $category = $item['category'];
    $total = $item['total'];

    echo <<<HTML
    <a href="?category=$category">
    <div style="display: flex; align-items: center;">
        <span>$category</span>
        <span>$total</span>
    </div>
    </a>
    HTML;
}

exit();