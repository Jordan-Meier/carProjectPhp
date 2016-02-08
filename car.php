<? php
    class Car
    {
        public $make_model;
        public $price;
        public $miles;
    }

    $honda = new Car();
    $honda->make_model = "1999 Honda CRV";
    $honda->price = 6000;
    $honda->miles = 90000;

    $tesla = new Car();
    $tesla->make_model =  "2014 Model S";
    $tesla->price = 35000;
    $tesla->miles = 5000;

    $nissan = new Car();
    $nissan->make_model = "2013 Leaf";
    $nissan->price = 20000;
    $nissan->miles = 8000;

    $toyota = new Car();
    $toyota->make_model = "2009 Prius";
    $toyota->price = 15000;
    $toyota->miles = 20000;

    $cars = array($honda, $tesla, $nissan, $toyota);
?>
