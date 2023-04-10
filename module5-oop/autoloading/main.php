<?php
namespace CloudStorage;

include "autoloader.php";

use \CloudStorage\Mail\Mailer;
use \CloudStorage\FileSystem\Scanner;
use \CloudStorage\FileSystem\Files\Images\Jpeg;
class Main{
    function __construct()
    {
        // (new Mail\Mailer())->sendMail();
        $mailer = new Mailer();
        $mailer->sendMail();

        $canner = new Scanner();
        $canner->Scan();

        $jpeg = new Jpeg();
        echo $jpeg->getDimension();
    }
}

new Main();