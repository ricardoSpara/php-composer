<?php

require '../vendor/autoload.php';
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// reference the Dompdf namespace
use Dompdf\Dompdf;


// $query = new RS\DB\Query;

// $query->query();

// $home = new APP\Controllers\HomeController;

// var_dump($home->index());


//var_dump(getTrim("asd asdas  asdasd   asd      "));

// $obj = new Myclass();


// $obj->mymethod();


// create a log channel
// $log = new Logger('name');
// $log->pushHandler(new StreamHandler('path/to/your.log', Logger::WARNING));

// // add records to the log
// $log->warning('Foo');
// $log->error('Bar');



// instantiate and use the dompdf class
$dompdf = new Dompdf();

$html = "<table border='1' width='100%' style='border-collapse: collapse;'>
        <tr>
            <th>Username</th><th>Email</th>
        </tr>
        <tr>
            <td>yssyogesh</td>
            <td>yogesh@makitweb.com</td>
        </tr>
        <tr>
            <td>sonarika</td>
            <td>sonarika@gmail.com</td>
        </tr>
        <tr>
            <td>vishal</td>
            <td>vishal@gmail.com</td>
        </tr>
        </table>";
        
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();