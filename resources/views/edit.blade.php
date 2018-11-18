<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" action="{{asset('update/'.Crypt::encrypt($mahasiswa->id))}}">
  NIM:<br>
  <input type="text" name="nim" value="{{$mahasiswa->nim}}"><br>
  Nama:<br>
  <input type="text" name="nama" value="{{$mahasiswa->nama}}"><br><br>
  <div class="col-md-6">
	<button >Edit</button>
	<input type="hidden" name="_token" value="{{csrf_token()}}">
</div>
</body>
</html>