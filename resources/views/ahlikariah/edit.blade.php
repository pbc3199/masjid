@extends('layouts.master')
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Kemaskini Data Ahli Kariah</h3>
				</div>
				<div class="panel-body">
                <form action="/ahlikariah/{{$ahlikariah->id}}/update" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="Nama">Nama Pemohon</label>
                <input name="Nama" type="text" class="form-control" id="Nama" aria-describedby="Nama" placeholder="Nama Pemohon" value="{{$ahlikariah->Nama}}">
            </div>
            <div class="form-group">
                <label for="noic">No. IC</label>
                <input name="ic_no" type="text" class="form-control" id="noic" aria-describedby="noic" placeholder="No.IC" value="{{$ahlikariah->ic_no}}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input name="email" type="email" class="form-control" id="email" aria-describedby="email" placeholder="Email" value="{{$ahlikariah->email}}">
            </div>
            <div class="form-group">
                <label for="umur">Umur</label>
                <input name="umur" type="umur" class="form-control" id="umur" aria-describedby="umur" placeholder="Umur" value="{{$ahlikariah->umur}}">
            </div>
            <div class="form-group">
                <label for="alamat1">Alamat Baris 1</label>
                <input name="alamat1" type="alamat1" class="form-control" id="alamat1" aria-describedby="alamat1" placeholder="Alamat Baris 1" value="{{$ahlikariah->alamat1}}">
            </div>
            <div class="form-group">
                <label for="alamat2">Alamat Baris 2</label>
                <input name="alamat2" type="alamat2" class="form-control" id="alamat2" aria-describedby="alamat2" placeholder="Alamat Baris 2" value="{{$ahlikariah->alamat2}}">
            </div>
            <div class="form-group">
                <label for="poskod">Poskod</label>
                <input name="poskod" type="poskod" class="form-control" id="poskod" aria-describedby="poskod" placeholder="12345" value="{{$ahlikariah->poskod}}">
            </div>
            <div class="form-group">
                <label for="bandar">Bandar</label>
                <input name="bandar" type="bandar" class="form-control" id="bandar" aria-describedby="bandar" placeholder="Bandar" value="{{$ahlikariah->bandar}}">
            </div>
            <div class="form-group">
                <label for="negeri">Negeri</label>
                <input name="negeri" type="negeri" class="form-control" id="negeri" aria-describedby="negeri" placeholder="Negeri" value="{{$ahlikariah->negeri}}">
            </div>
            <div class="form-group">
                <label for="phonerumah">No. Telefon Rumah</label>
                <input name="phone_rumah" type="phonerumah" class="form-control" id="phonerumah" aria-describedby="phonerumah" placeholder="03-12345678" value="{{$ahlikariah->phone_rumah}}">
            </div>
            <div class="form-group">
                <label for="phonebimbit">No. Telefon Bimbit</label>
                <input name="phone_bimbit" type="phonebimbit" class="form-control" id="phonebimbit" aria-describedby="phonebimbit" placeholder="011-1234567" value="{{$ahlikariah->phone_bimbit}}">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" class="form-control" id="status">
                    <option value="Berkahwin" @if($ahlikariah->status == 'Berkahwin') selected @endif>Berkahwin</option>
                    <option value="Bujang" @if($ahlikariah->status == 'Bujang') selected @endif>Bujang</option>
                    <option value="Ibu Tunggal" @if($ahlikariah->status == 'Ibu Tunggal') selected @endif>Ibu Tunggal</option>
                    <option value="Duda" @if($ahlikariah->status == 'Duda') selected @endif>Duda</option>

                </select>
            </div>
            <div class="form-group">
                <label for="tempoh">Tempoh Tinggal</label>
                <input name="tempoh" type="tempoh" class="form-control" id="tempoh" aria-describedby="tempoh" placeholder="Tempoh Tinggal Di Kawasan Kariah" value="{{$ahlikariah->tempoh}}">
            </div>
    </div>
    <button type="submit" class="btn btn-warning">Submit</button>
    </form>
				</div>
			</div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('content1')
<h1 class="">Edit Data Ahli Kariah</h1>
@if(session('success'))
<div class="alert alert-success" role="alert">
    {{session('success')}}
</div>
@endif
<div class="row">
    <div class="col-lg-12">
        <form action="/ahlikariah/{{$ahlikariah->id}}/update" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="Nama">Nama Pemohon</label>
                <input name="Nama" type="text" class="form-control" id="Nama" aria-describedby="Nama" placeholder="Nama Pemohon" value="{{$ahlikariah->Nama}}">
            </div>
            <div class="form-group">
                <label for="noic">No. IC</label>
                <input name="ic_no" type="text" class="form-control" id="noic" aria-describedby="noic" placeholder="No.IC" value="{{$ahlikariah->ic_no}}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input name="email" type="email" class="form-control" id="email" aria-describedby="email" placeholder="Email" value="{{$ahlikariah->email}}">
            </div>
            <div class="form-group">
                <label for="umur">Umur</label>
                <input name="umur" type="umur" class="form-control" id="umur" aria-describedby="umur" placeholder="Umur" value="{{$ahlikariah->umur}}">
            </div>
            <div class="form-group">
                <label for="alamat1">Alamat Baris 1</label>
                <input name="alamat1" type="alamat1" class="form-control" id="alamat1" aria-describedby="alamat1" placeholder="Alamat Baris 1" value="{{$ahlikariah->alamat1}}">
            </div>
            <div class="form-group">
                <label for="alamat2">Alamat Baris 2</label>
                <input name="alamat2" type="alamat2" class="form-control" id="alamat2" aria-describedby="alamat2" placeholder="Alamat Baris 2" value="{{$ahlikariah->alamat2}}">
            </div>
            <div class="form-group">
                <label for="poskod">Poskod</label>
                <input name="poskod" type="poskod" class="form-control" id="poskod" aria-describedby="poskod" placeholder="12345" value="{{$ahlikariah->poskod}}">
            </div>
            <div class="form-group">
                <label for="bandar">Bandar</label>
                <input name="bandar" type="bandar" class="form-control" id="bandar" aria-describedby="bandar" placeholder="Bandar" value="{{$ahlikariah->bandar}}">
            </div>
            <div class="form-group">
                <label for="negeri">Negeri</label>
                <input name="negeri" type="negeri" class="form-control" id="negeri" aria-describedby="negeri" placeholder="Negeri" value="{{$ahlikariah->negeri}}">
            </div>
            <div class="form-group">
                <label for="phonerumah">No. Telefon Rumah</label>
                <input name="phone_rumah" type="phonerumah" class="form-control" id="phonerumah" aria-describedby="phonerumah" placeholder="03-12345678" value="{{$ahlikariah->phone_rumah}}">
            </div>
            <div class="form-group">
                <label for="phonebimbit">No. Telefon Bimbit</label>
                <input name="phone_bimbit" type="phonebimbit" class="form-control" id="phonebimbit" aria-describedby="phonebimbit" placeholder="011-1234567" value="{{$ahlikariah->phone_bimbit}}">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" class="form-control" id="status">
                    <option value="Berkahwin" @if($ahlikariah->status == 'Berkahwin') selected @endif>Berkahwin</option>
                    <option value="Bujang" @if($ahlikariah->status == 'Bujang') selected @endif>Bujang</option>
                    <option value="Ibu Tunggal" @if($ahlikariah->status == 'Ibu Tunggal') selected @endif>Ibu Tunggal</option>
                    <option value="Duda" @if($ahlikariah->status == 'Duda') selected @endif>Duda</option>

                </select>
            </div>
            <div class="form-group">
                <label for="tempoh">Tempoh Tinggal</label>
                <input name="tempoh" type="tempoh" class="form-control" id="tempoh" aria-describedby="tempoh" placeholder="Tempoh Tinggal Di Kawasan Kariah" value="{{$ahlikariah->tempoh}}">
            </div>
    </div>
    <button type="submit" class="btn btn-warning">Submit</button>
    </form>
</div>
</div>
@endsection