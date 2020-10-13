<?php

use Source\_App\Email;

require_once __DIR__."/../ext_lib/autoload.php";

$email = new Email("smtp.gmail.com","devphp.pmro@gmail.com","devpmro2020","tsl",587);
$email->sendEmail("devphp.pmro@gmail.com","Leonardo","magalhaesro1979@gmail.com","Leo","ççççççç","testeçççç");

