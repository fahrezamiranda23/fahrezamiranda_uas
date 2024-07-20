@extends('layout.main')
@section('content')

<h1>Master Kurikulum</h1>
<div class="card">
        <div class="card-header">
        <a class="btn btn-success btn-sm" href="{{ route('kurikulum.create') }}">Tambah Data</a>
        <a href="{{ route('cetak_kurikulum') }}" class="btn btn-primary btn-sm">Cetak Kurikulum</a>
        </div>
        <div class="card-body">   
            <table class="table table-sm table-stripped table-bordered">
                <thead>
            <tr>
                <td>No</td>
                <td>Nama Kurikulum</td>
                <td>Tahun</td>
                <td>Aksi</td>
                <td>Delete</td>
            </tr>
            </thead>
            @foreach ($kurikulum as $rows)
            <tbody>
                 <tr>
                    <td>{{ $loop->iteration }} </td>
                    <td>{{ $rows->nama_kurikulum }}</td>
                    <td>{{ $rows->tahun }} </td>
                    <td>
                        <a href="{{ route('kurikulum.edit', $rows->id) }}">Edit</a>  
                                     
                </td>
                <td> 
                    <form action="{{ route('kurikulum.destroy', $rows->id) }}" method="POST">
                            @csrf 
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Del</button>
                        </form>  </td>
                 </tr>   
            @endforeach
            </tbody>
            </table>
        </div>
</div>

@endsection