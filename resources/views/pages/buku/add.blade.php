@extends('layouts/bootstrap')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">BUKU</h5>
            <form action="{{ route('buku.store') }}" method="POST">

                {{ csrf_field() }}

                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input name="judul" type="text" class="form-control" id="judul" aria-describedby="Judul" placeholder="Judul">
                </div>
                <div class="form-group">
                    <label for="pengarang">Pengarang</label>
                    <input name="pengarang" type="text" class="form-control" id="pengarang" aria-describedby="Pengarang" placeholder="Pengarang">
                </div>
                <div class="form-group">
                    <label for="penerbit">Penerbit</label>
                    <input name="penerbit" type="text" class="form-control" id="penerbit" aria-describedby="Penerbit" placeholder="Penerbit">
                </div>
                <div class="form-group">
                    <label for="tahun_terbit">Tahun Terbit</label>
                    <input name="tahun_terbit" type="number" class="form-control" id="tahun_terbit" aria-describedby="Tahun Terbit" placeholder="Tahun Terbit">
                </div>
                <a href="" class="btn btn-danger">Back</a>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection
