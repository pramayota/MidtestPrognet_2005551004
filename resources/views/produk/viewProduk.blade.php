@extends('layout.template')
@section('title', 'view')
@section('content')
<div class="btn-group" role="group" aria-label="Basic example">
    @csrf
    <a type="button" class="btn btn-info mt-3" href="{{ route('addProduk') }}"  method="post">Add</a>
</div>
<table class="table mt-3">
    <thead>
      <tr>
        <th scope="col">nomor</th>
        <th scope="col">Kategori</th>
        <th scope="col">Nama Produk</th>
        <th scope="col">Foto Produk</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $datas)
        <tr>
            <th scope="row">{{ $loop-> index+1+($data->currentPage()-1)*5 }}</th>
            <td>{{ $datas->nama_kategori }}</td>
            <td>{{ $datas->nama_produk }}</td>
            <td><img src="{{ URL::to('/') }}/img/{{ $datas->foto_produk }}" width="100" height="100" ></td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    @csrf
                    <a type="button" class="btn btn-info" href="{{ route('editProduks',$datas->id) }}"  method="post">Edit</a>
                </div>
                <form action="{{ route('deleteProduk',$datas->id) }}" method='post' class='d-inline'onsubmit="return confirm('Apakah kamu yakin ingin menghapus produk ini ?')">
                    @csrf
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
          </tr>
        @endforeach

  </table>
  <div class='mt-4 text-center'>
      showing
      {{ $data->firstItem() }}
      to
      {{ $data->lastItem() }}
  </div>
  <div>
      {{ $data->links() }}
  </div>
  @endsection
