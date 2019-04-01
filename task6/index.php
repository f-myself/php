<?php

include "config.php";
include "lib/iInstrument.php";
include "lib/iMusician.php";
include "lib/iBand.php";
include "lib/Instrument.php";
include "lib/Musician.php";
include "lib/Band.php";

/* Create band */
$band = new Band;
if(!$band->setName("Zeroes and ones"))
{
	$statusMessage = ERR_NEW_BAND;
}
if(!$band->setGenre("Folk"))
{
	$statusMessage = ERR_BAND_GENRE;
}
if(!$band->setGenre("Indie"))
{
	$statusMessage = ERR_BAND_GENRE;
}


/* Create instruments */
$instruments = ["guitar", "bassGuitar", "drums", "violin", "piano"];
$instrumentNames = ["Guitar", "Bass Guitar", "Drums", "Violin",	"Piano"];
$instrumentCategories = ["String", "String", "Precussion", "String", "Keyboard"];

foreach ($instruments as $key => $value) 
{
	if(!$$value = new Instrument)
	{
		$statusMessage = ERR_NEW_INSTRUMENT;
	}

	if(!$$value->setName($instrumentNames[$key]))
	{
		$statusMessage = ERR_INSTRUMENT_NAME;
	}
	if(!$$value->setCategory($instrumentCategories[$key]))
	{
		$statusMessage = ERR_INSTRUMENT_CATEGORY;
	}
}

/* Create musicians */

$musicians = ["johnDoe", "janeDoe", "mikeGoldberg", "chuckNorris", "bruceStark"];
$musicianNames = ["John Doe", "Jane Doe", "Mike Goldberg", "Chuck Norris", "Bruce Stark"];

foreach ($musicians as $key => $value) 
{
	if(!$$value = new Musician)
	{
		$statusMessage = ERR_NEW_MUSICIAN;
	}

	if(!$$value->setName($musicianNames[$key]))
	{
		$statusMessage = ERR_MUSICIAN_NAME;
	}

	if(!$$value->assingToBand($band))
	{
		$statusMessage = ERR_BAND_JOIN;
	}
}

/* Adding instruments */

/* Add instruments to John Doe */
if(!$johnDoe->addInstrument($guitar))
{
	$statusMessage = ERR_MUSICIAN_INSTRUMENT;
}

/* Add instruments to Jane Doe */
if(!$janeDoe->addInstrument($violin))
{
	$statusMessage = ERR_MUSICIAN_INSTRUMENT;
}
if(!$janeDoe->addInstrument($piano))
{
	$statusMessage = ERR_MUSICIAN_INSTRUMENT;
}

/* Add instruments to Mike Goldberg */
if(!$johnDoe->addInstrument($drums))
{
	$statusMessage = ERR_MUSICIAN_INSTRUMENT;
}

/* Add instruments to Chuck Norris */
if(!$johnDoe->addInstrument($guitar))
{
	$statusMessage = ERR_MUSICIAN_INSTRUMENT;
}

/* Add instruments to Bruce Stark */
if(!$johnDoe->addInstrument($bassGuitar))
{
	$statusMessage = ERR_MUSICIAN_INSTRUMENT;
}
/* Instruments added */

/* Adding types */

/* John Doe */
if (!$johnDoe->setMusicianType("Vocal"))
{
	$statusMessage = ERR_MUSICIAN_TYPE;
}

if (!$johnDoe->setMusicianType("Rhytm guitar"))
{
	$statusMessage = ERR_MUSICIAN_TYPE;
}

/* Jane Doe */
if (!$janeDoe->setMusicianType("Back vocal"))
{
	$statusMessage = ERR_MUSICIAN_TYPE;
}

if (!$janeDoe->setMusicianType("violinist"))
{
	$statusMessage = ERR_MUSICIAN_TYPE;
}

if (!$janeDoe->setMusicianType("pianist"))
{
	$statusMessage = ERR_MUSICIAN_TYPE;
}

/* Mike Goldberg */
if (!$mikeGoldberg->setMusicianType("Drummer"))
{
	$statusMessage = ERR_MUSICIAN_TYPE;
}

/* Chuck Norris */
if (!$chuckNorris->setMusicianType("Solo guitar"))
{
	$statusMessage = ERR_MUSICIAN_TYPE;
}

/* Bruce Stark */
if (!$bruceStark->setMusicianType("Bassist"))
{
	$statusMessage = ERR_MUSICIAN_TYPE;
}
/* Types added */

$bandName = $band->getName();
$bandMusicians = $band->getMusician();


include "templates/index.php";