@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <div class="panel">
				<div class="panel-heading">
                    <h3 class="panel-title">Data Penceramah Masjid Al-Raudhah</h3>
                    <div class="right">
                        <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">
                        <i class="lnr lnr-plus-circle"></i>
                        </button>
                    </div>                   
				</div>
				<div class="panel-body">
					<table class="table table-hover">
						<thead>
							<tr>
                                <th>Id</th>
                                <th>Nama</th>
                                <th>Tajuk</th>
                                <th>Tarikh Mula Kuliah</th>
                                <th>Tamat Tempoh Tauliah</th>
                                <th>Kemaskini</th>
                            </tr>
						</thead>
						<tbody>
                            @foreach($data_penceramah as $penceramah)
                            <tr>
                                <td>{{$penceramah->id}}</td>
                                <td>{{$penceramah->Nama}}</td>
                                <td>{{$penceramah->tajuk}}</td>
                                <td>{{$penceramah->Date_mula_kuliah}}</td>
                                <td>{{$penceramah->End_date}}</td>
                                <td>
                                    <a href="/penceramah/{{$penceramah->id}}/edit" class="btn btn-success btn-sm">Edit</a>
                                    <a href="/penceramah/{{$penceramah->id}}/delete" class="btn btn-danger btn-sm" 
                                    onclick="return confirm('Anda Pasti Untuk Menghapus Data Ini?')">Del</a>
                                </td>
                            </tr>
                            @endforeach
						</tbody>
					</table>
				</div>
			</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Penceramah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/penceramah/create" method="POST">
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
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
