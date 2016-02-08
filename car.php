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


    $honda = new Car("1999 Honda CRV", 6000, 90000);
    $tesla = new Car("2014 Tesla Model S", 35000, 5000);
    $nissan = new Car("2013 Nissan Leaf", 20000, 8000);
    $toyota = new Car("2009 Toyota Prius", 15000, 20000);

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
