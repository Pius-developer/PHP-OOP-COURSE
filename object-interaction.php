<?php

// Create a song Class

class song
{


	// Create a songId and a public song properties

	public $songId;

	public $title;
}

// instantiate the class object

$juicewrld = new song();

$juicewrld->songId = 1;

$juicewrld->title = "World on Drugs";

// var_dump($juicewrld);


/**
 * 
 */
class playlists
{
	
	public $name;

	public $songs = [];

	public function addSong($song){

		$this->songs[] = $song;
	}
	
}

$playlist = new playlists();

$playlist->name = "Rocknet!";

$playlist->addSong($juicewrld);


var_dump($playlist);





?>