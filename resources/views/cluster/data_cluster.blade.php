@extends('layouts.template')

@section('title',$title)
@section('page_title',$page_title)

@section('content')
<div class="card">
  <div class="card-body">
    <button type="button" class="btn btn-rounded bg-gradient-primary" data-toggle="modal" data-target="#modal-cluster"><i class="fa fa-plus"></i>
      Add New
    </button>
    </div>
    
    <div class="col-sm-12">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Nama</th>
          <th>Kategori</th>
          <th style="width:19%">Action</th>
        </tr>
        </thead>
        <tbody>
          @foreach($clusters as $rsCluster)
          <tr>
            <td>{{ $rsCluster["nm_cluster"] }}</td>
            <td>{{ $rsCluster["kat_cluster"] }}</td>
            <td style="text-align: center">
              {{-- <a href="{{ url('cluster/form/'.$rsMenu["id_menu"]) }}" class="btn bg-gradient-warning"><i class="far fa-edit"></i></a>
              <a href="{{ url('menu/delete/'.$rsMenu["id_menu"]) }}" class="btn bg-gradient-danger"><i class="fa fa-trash"></i></a> --}}
              <a href="javascript:void(0)" class="btn bg-gradient-warning" onclick="edit_cluster()" data-toggle="modal" data-target="#modal-cluster"><i class="far fa-edit"></i> edit</a>
              <a href="{{ url('cluster/delete/'.$rsCluster["id_cluster"]) }}" type="button" class="btn bg-gradient-danger"><i class="fa fa-trash"></i> delete</a>
  
  
              
              {{-- <button type="button" class="btn bg-gradient-warning" data-toggle="modal" data-target="#modal-cluster"><i class="far fa-edit"></i></button> --}}
          </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    
    {{-- Info Transaksi , Member , Meja  --}}
    <div class="info">
      
      <input type="hidden" name="id_member" id="id_member" value="">
      
  {{-- End Info Transaksi --}}
  {{-- Modal Data Member --}}
  <form action="{{ url('cluster/save')}}">
    @csrf
    <div class="modal fade" id="modal-cluster">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Data Cluster</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="nm_cluster">Nama Cluster</label>
              <input type="hidden" name="id_cluster" id="id_cluster">
              <input type="text" class="form-control " id="nm_cluster" name="nm_cluster" placeholder="nama cluster">
            </div>
  
            <div class="form-group">
                <label for="kat_cluster">Kategori Cluster</label>
                <input type="text" class="form-control" id="kat_cluster" name="kat_cluster" placeholder="kategori cluster">
            </div>
            <div class="card-footer">
              <div class="form-group text-right">
                  <button type="submit" class="btn btn-lg bg-gradient-primary">Simpan</button>
              </div>
            </div>
          </div>
        </div>
      <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
  </div>  
  {{-- End Modal Data Member --}}
  </form>
  
  </div>
</div>
    
@endsection