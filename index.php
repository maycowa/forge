<?php

include ('vendor/autoload.php');

$t = \Forge\StringType::val('teste');

var_dump($t->replace('e', 'a'));
