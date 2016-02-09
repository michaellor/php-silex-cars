<?php

require_once __DIR__."/../vendor/autoload.php";
require_once __DIR__."/../web/car.php";

$app = new Silex\Application();

$app->get("/", function() {
        return '
        <div class="container">
              <h1>Find a Car!</h1>
              <form action="/caroutput">
                  <div class="form-group">
                      <label for="price">Enter Maximum Price:</label>
                      <input id="price" name="price" class="form-control" type="number">
                  </div>
                  <button type="submit" class="btn-success">Submit</button>
              </form>
          </div>
        ';
});



$app->get("/caroutput", function() {

    $porsche = new Car("2014 Porshe 911", 110000, 7864);
    $subaru = new Car("2002 Subaru Outback", 3800, 128000);
    $toyota = new Car("1994 Toyota Tacoma", 5000, 195000);
    $jeep = new Car("1997 Jeep Wrangler", 1000, 300000);
    $output = '';
    $porsche->setMakeModel("2014 Porsche 911");
    $subaru->setMakeModel("2002 Subaru Forester");
    $toyota->setMakeModel("1994 Toyota Tacoma");
    $jeep->setMakeModel("1997 Jeep Wrangler");
    $cars = array($porsche, $subaru, $toyota, $jeep);


    foreach ($cars as $car) {
        if ($car->worthBuying($_GET["price"])) {
            $output .= '<li>'.$car->getMakeModel().'</li>';
            $output .= '<li>'.$car->getPrice().'</li>';
          }
    }

    return $output;
});
  return $app;

?>
