<?php

include "config.php";
include "lib/iInstrument.php";
include "lib/iMusician.php";
include "lib/iBand.php";
include "lib/Instrument.php";
include "lib/Musician.php";
include "lib/Band.php";

$guitar = new Instrument;
$bassGuitar = new Instrument;

$guitar->setName('Guitar');
$guitar->setCategory('String');
$bassGuitar->setName('Bass guitar');
$bassGuitar->setCategory('String');

$ben = new Musician;

$ben->addInstrument($guitar);
$ben->addInstrument($bassGuitar);
foreach ($ben->getInstrument() as $value) {
	echo $value->getName();
}




include "templates/index.php";