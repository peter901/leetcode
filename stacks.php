<?php


$q = new SplStack();

$q->push(2);
$q->push(3);

var_export($q->pop());
var_export($q->isEmpty());