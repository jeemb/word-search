<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/WordSearch.php";

    use Symfony\Component\Debug\Debug;

    Debug::enable();

    session_start();

    if (empty($_SESSION['list_of_searches'])) {
    $_SESSION['list_of_searches'] = array();
    }

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use($app) {

        return $app['twig']->render('input.html.twig', array('searches' => RepeatCounter::getAll()));
    });

    $app->post("/results", function() use($app) {
        $word_input = $_POST['word'];
        $phrase_input = $_POST['phrase'];
        $new_repeat_counter = new RepeatCounter($word_input, $phrase_input);
        $result = $new_repeat_counter->countRepeats($word_input, $phrase_input);
        $new_repeat_counter->save();

        return $app['twig']->render('results.html.twig', array('result' => $result));
    });

    return $app;

?>
