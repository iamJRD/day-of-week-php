<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/DayofWeek.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

// End busy code -----------^

    // Render Home Page
    $app->get("/", function() use ($app) {
        return $app['twig']->render('home.html.twig');
    });

    $app->post("/results", function() use ($app) {
        $newDayofWeek = new DayofWeek;
        $result = $newDayofWeek->week_day($_POST['input_date']);
        return $app['twig']->render('home.html.twig', array('result' => $result));
    });

    return $app;

?>
