@extends('layouts/bootstrap')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
        <h5 class="card-title"><a href="{{ route('buku.add') }}" class="btn btn-primary float-right">Tambah</a> BUKU</h5>
            <br>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Pengarang</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Tahun Terbit</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bukus as $key => $buku)
                        <tr>
                            <td>{{ $buku->id }}</td>
                            <td>{{ $buku->judul }}</td>
                            <td>{{ $buku->pengarang }}</td>
                            <td>{{ $buku->penerbit }}</td>
                            <td>{{ $buku->tahun_terbit }}</td>
                            <td>
                                <form action="{{ route('buku.destroy', $buku) }}" method="POST">
                                    {{ csrf_field() }}
                                    @method('DELETE')
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ route('buku.view', $buku) }}" class="btn btn-sm btn-info">view</a>
                                        <a href="{{ route('buku.edit', $buku) }}" class="btn btn-sm btn-warning">edit</a>
                                        <button type="submit" class="btn btn-sm btn-danger">delete</button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection