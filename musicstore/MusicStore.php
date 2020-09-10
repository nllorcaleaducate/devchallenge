<?php
class MusicStore {
	private $db;

	function MusicStore($dbPath) {
		/*
		Driver install:

		sudo apt-get install php5.6-sqlite
		or
		sudo apt-get install php-sqlite
		*/
		$this->db = new PDO('sqlite:'.$dbPath);
	}

	/* 
	TODO: Obtener todas las playlists cuyo nombre contengan $name
	Campos por registro: PlaylistId, Name
	*/
	public function getPlaylistsByName($name) {
		$sql = "";
		return $this->fetchAll($sql);
	}

	/*
	TODO: Retonar información de un Album por Id
	Campos por registro:
		Title: Titulo del album
		Artist: Nombre del artista
		TracksNumber: Cantidad de tracks del album
		Price: Precio del album (suma de los precios de sus tracks)
		Duration: Duración del album en minutos
	*/
	public function getAlbumById($almbumId) {
		$sql = "";
		return $this->fetch($sql);
	}

	/*
	TODO: Retornar el total facturado (2 decimales) por genero entre $fromDate y $toDate ordenado de mayor a menor facturación (no incluir generos sin facturación)
	Campos por registro: Genre, Billing
	*/
	public function getGenresBilling($fromDate, $toDate) {
		$sql = "";
		return $this->fetchAll($sql);
	}

	/*
	TODO: Retonar el artista que más tracks vendió en toda la historia de facturación existente
	Campos por registro: Artist, Sales (cantidad de tracks vendidos)
	*/
	public function getBestSellingArtist() {
		$sql = "";
		return $this->fetch($sql);
	}

	private function fetch($sql, $all = false) {
		try {
			$sth = $this->db->prepare($sql);
			if(!$sth) {
				return false;
			}
			$sth->execute();
			return $all ? $sth->fetchAll(PDO::FETCH_ASSOC) : $sth->fetch(PDO::FETCH_ASSOC);			
		} catch(PDOException $e) {
			return false;
		}
	}

	private function fetchAll($sql) {
		return $this->fetch($sql, true);
	}
}
