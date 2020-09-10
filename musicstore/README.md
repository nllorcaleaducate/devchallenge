# MusicStore
En el archivo MusicStore.php se encuentran cuatro métodos que hay que completar:
- getPlaylistsByName: Obtener todas las playlists cuyo nombre contengan $name
	- Campos por registro: PlaylistId, Name 
- getAlbumById: Retonar información de un Album por Id
	- Campos por registro:
		- Title: Titulo del album
		- Artist: Nombre del artista
		- TracksNumber: Cantidad de tracks del album
		- Price: Precio del album (suma de los precios de sus tracks)
		- Duration: Duración del album en minutos
- getGenresBilling: Retornar el total facturado (2 decimales) por genero entre $fromDate y $toDate ordenado de mayor a menor facturación (no incluir generos sin facturación)
	- Campos por registro: Genre, Billing
- getBestSellingArtist:Retonar el artista que más tracks vendió en toda la historia de facturación existente
	- Campos por registro: Artist, Sales (cantidad de tracks vendidos)

## Objetivo
Completar la varible $sql en cada método para lograr el output solicitado para completar los tests.