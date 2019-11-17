<html>
	<body> ini adalah Viewnya prodi <br>
	@foreach ($prodis as $prodi)
	Nama Prodi : {{$prodi->nama_prodi}} <br>
	@endforeach
	</body>
</html>