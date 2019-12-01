<html>
<body>
	Ini adalah Viewnya Prodi
	@foreach($prodis as $prodi)
		nama Prodi: {{$prodi->namaProdi}} <br>
	@endforeach
</body>
</html>