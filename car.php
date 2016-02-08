<?php
    class Car
    {
        public $make_model;
        public $price;
        public $miles;

        function __construct($car_model, $car_price, $car_miles)
        {
            $this->make_model = $car_model;
            $this->price = $car_price;
            $this->miles = $car_miles;
        }

        function worthBuying($max_price)
        {
            return $this->price <= ($max_price + 500);
        }
    }


    $cars = array($honda, $tesla, $nissan, $toyota);

    $cars_matching_search = array();
    foreach ($cars as $car) {
        if ($car->worthBuying($_GET["price"])) {
            array_push($cars_matching_search, $car);
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Your Car Dealership's Homepage</title>
</head>
<body>
    <h1>Your Car Dealership</h1>
    <ul>
        <?php
            foreach ($cars_matching_search as $car) {
                echo "<li> $car->make_model </li>";
                echo "<ul>";
                    echo "<li> $$car->price </li>";
                    echo "<li> Miles: $car->miles </li>";
                echo "</ul>";
            }
        ?>
    </ul>
</body>
</html>
