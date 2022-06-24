@extends('layouts.app')

 @section('content')
 <div class="container">

 <h3>Tambah Data Pelanggan</h3>
 <form action="{{ url('/pelanggan') }}" method="POST">
 @csrf
 <div class="mb-3">
 <label>NO PELANGGAN</label>
 <input type="text" class="form-control" name="pel_no">
</div>
<div class="mb-3">
<label>NAMA PELANGGAN</label>
<input type="text" class="form-control" name="pel_nama">
</div>
<div class="mb-3">
 <label>ALAMAT PELANGGAN</label>
 <input type="text" class="form-control" name="pel_alamat">
</div>
<div class="mb-3">
<label>NO HP PELANGGAN</label>
<input type="text" class="form-control" name="pel_hp">
</div>
<div class="mb-3">
 <label>NO KTP PELANGGAN</label>
 <input type="text" class="form-control" name="pel_ktp">
</div>
<div class="mb-3">
<label>SERI PELANGGAN</label>
<input type="text" class="form-control" name="pel_seri">
</div>
<div class="mb-3">
<label>METERAN PELANGGAN</label>
<input type="text" class="form-control" name="pel_meteran">
</div>
<div class="mb-3">
<input type="submit" value="SIMPAN">
</div>
</form>
</div>
@endsection
