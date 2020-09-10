<?php
require('MusicStore.php');
define('DB_PATH',__DIR__.DIRECTORY_SEPARATOR.'db'.DIRECTORY_SEPARATOR.'chinook.db');

class MusicStoreTest extends PHPUnit\Framework\TestCase
{
    public function testGetPlaylistsByName()
    {
        $musicStore = new MusicStore(DB_PATH);
        $playlists = $musicStore->getPlaylistsByName("Brazilian");

        $this->assertTrue($playlists !== false && count($playlists) == 1);
        $this->assertTrue($playlists[0]['PlaylistId'] == 11);
        $this->assertTrue($playlists[0]['Name'] == 'Brazilian Music');
    }

    public function testGetAlbumById()
    {
        $musicStore = new MusicStore(DB_PATH);
        $album = $musicStore->getAlbumById(1);

        $this->assertTrue($album !== false && count($album) == 5);
        $this->assertTrue($album['Title'] == 'For Those About To Rock We Salute You');
        $this->assertTrue($album['TracksNumber'] == '10');
        $this->assertTrue($album['Price'] == '9.9');
        $this->assertTrue($album['Duration'] == '40');
    }

    public function testGetGenresBilling()
    {
        $musicStore = new MusicStore(DB_PATH);
        $genresBilling = $musicStore->getGenresBilling('2013-12-01 00:00:00','2013-12-31 23:59:59');

        $this->assertTrue($genresBilling !== false && count($genresBilling) == 5);
        $this->assertTrue($genresBilling[0]['Genre'] == 'Rock');
        $this->assertTrue($genresBilling[0]['Billing'] == '29.7');
        $this->assertTrue($genresBilling[4]['Genre'] == 'Reggae');
        $this->assertTrue($genresBilling[4]['Billing'] == '0.99');
    }

    public function testGetBestSellingArtist()
    {
        $musicStore = new MusicStore(DB_PATH);
        $artist = $musicStore->getBestSellingArtist();

        $this->assertTrue($artist !== false && count($artist) == 2);
        $this->assertTrue($artist['Artist'] == 'Iron Maiden');
        $this->assertTrue($artist['Sales'] == '140');
    }
   
   
}