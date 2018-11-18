<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" action="{{url('mhs-save')}}">
  NIM:<br>
  <input type="text" name="nim"><br>
  Nama:<br>
  <input type="text" name="nama"><br><br>
  <div class="col-md-6">
	<button href="{{asset('tambah')}}">Tambah</button>
	<input type="hidden" name="_token" value="{{csrf_token()}}">
</div>
</body>
</html>