<?php
    class Car
    {
        private $make_model;
        private $price;
        private $miles;
        private $photo;

        function __construct($car_model, $car_miles, $car_price, $car_photo)
        {
            $this->make_model = $car_model;
            $this->price = $car_price;
            $this->miles = $car_miles;
            $this->photo = $car_photo;
        }


        function setPrice($new_price)
        {
            $float_price = (float) $new_price;
            if ($float_price != 0) {
                $this->price = $float_price;
            }
            else {
              $this->price = $new_price;
            }
        }

        function getPrice()
        {
            return $this->price;
        }

        function getModel()
        {
            return $this->make_model;
        }

        function getMiles ()
        {
            return $this->miles;
        }

        function getPhoto ()
        {
            return $this->photo;
        }

        function worthBuying($max_price)
        {
            return $this->price <= ($max_price + 500);
        }
    }


    $honda = new Car("1999 Honda CRV", 90000, 6000, "img/honda.jpg");
    $tesla = new Car("2014 Tesla Model S", 5000, 35000, "img/tesla.jpg");
    $nissan = new Car("2013 Nissan Leaf", 8000, 20000, "img/leaf.jpg");
    $toyota = new Car("2009 Toyota Prius", 20000, 15000, "img/toyota.jpg");
    $toyota->setPrice("$12000");

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
              $car_price = $car->getPrice();
              $car_model = $car->getModel();
              $car_miles = $car->getMiles();
              $car_photo = $car->getPhoto();
                echo "<li> $car_model </li>";
                echo "<ul>";
                    echo "<li> $$car_price </li>";
                    echo "<li> Miles: $car_miles </li>";
                    echo "<li><img src=$car_photo></li>";
                echo "</ul>";
            }
        ?>
    </ul>
</body>
</html>
