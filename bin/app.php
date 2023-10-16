<?php
echo '**********************'.PHP_EOL;
echo 'Program, say "Hi" in different language.'.PHP_EOL;
$services = include('config/config.php');
echo 'Available list: ';
foreach ($services as $key=>$value)
{
    echo $key.',';
}
echo PHP_EOL;
echo 'Choose your option: ';
$option=readline();
require __DIR__ . '/../vendor/autoload.php';
$container =new \classes\Container($services);
try{
        $SayHi =$container->get($option);
    echo $SayHi->text;
}catch (NotFoundServiceException $e) {
    echo $e->getMessage();
}

echo 'Finish of program'.PHP_EOL;
echo '**********************'.PHP_EOL;
