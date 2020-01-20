@extends('layouts.master')
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Kemaskini Data Penceramah</h3>
				</div>
				<div class="panel-body">
                <form action="/penceramah/{{$penceramah->id}}/update" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                        <label for="Nama">Nama Penceramah</label>
                        <input name="Nama" type="text" class="form-control" id="Nama" aria-describedby="Nama" placeholder="Nama Penceramah">
                    </div>
                    <div class="form-group">
                        <label for="noic">No. IC</label>
                        <input name="ic_no" type="text" class="form-control" id="noic" aria-describedby="noic" placeholder="No.IC">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input name="email" type="email" class="form-control" id="email" aria-describedby="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="umur">Umur</label>
                        <input name="umur" type="umur" class="form-control" id="umur" aria-describedby="umur" placeholder="Umur">
                    </div>
                    <div class="form-group">
                        <label for="jantina">Status</label>
                        <select name="jantina" class="form-control" id="jantina">
                            <option value="Lelaki">Lelaki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat1">Alamat Baris 1</label>
                        <input name="alamat1" type="alamat1" class="form-control" id="alamat1" aria-describedby="alamat1" placeholder="Alamat Baris 1">
                    </div>
                    <div class="form-group">
                        <label for="alamat2">Alamat Baris 2</label>
                        <input name="alamat2" type="alamat2" class="form-control" id="alamat2" aria-describedby="alamat2" placeholder="Alamat Baris 2">
                    </div>
                    <div class="form-group">
                        <label for="poskod">Poskod</label>
                        <input name="poskod" type="poskod" class="form-control" id="poskod" aria-describedby="poskod" placeholder="12345">
                    </div>
                    <div class="form-group">
                        <label for="bandar">Bandar</label>
                        <input name="bandar" type="bandar" class="form-control" id="bandar" aria-describedby="bandar" placeholder="Bandar">
                    </div>
                    <div class="form-group">
                        <label for="negeri">Negeri</label>
                        <input name="negeri" type="negeri" class="form-control" id="negeri" aria-describedby="negeri" placeholder="Negeri">
                    </div>
                    <div class="form-group">
                        <label for="phonerumah">No. Telefon Rumah</label>
                        <input name="phone_rumah" type="phonerumah" class="form-control" id="phonerumah" aria-describedby="phonerumah" placeholder="03-12345678">
                    </div>
                    <div class="form-group">
                        <label for="phonebimbit">No. Telefon Bimbit</label>
                        <input name="phone_bimbit" type="phonebimbit" class="form-control" id="phonebimbit" aria-describedby="phonebimbit" placeholder="011-1234567">
                    </div>
                    <div class="form-group">
                        <label for="tajuk">Tajuk Kuliah</label>
                        <input name="tajuk" type="tajuk" class="form-control" id="tajuk" aria-describedby="tajuk" placeholder="Tajuk Kuliah/Kitab">
                    </div>
                    <div class="form-group">
                        <label for="datemulakuliah">Tempoh Tinggal</label>
                        <input name="Date_mula_kuliah" type="datemulakuliah" class="form-control" id="datemulakuliah" aria-describedby="datemulakuliah" placeholder="Tarikh Mula Kuliah">
                    </div>
                    <div class="form-group">
                        <label for="tamattempohtauliah">Tempoh Tinggal</label>
                        <input name="End_date" type="tamattempohtauliah" class="form-control" id="tamattempohtauliah" aria-describedby="tamattempohtauliah" placeholder="Tarikh Tamat Tempoh Tauliah">
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
