@extends('layouts/bootstrap')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">VIEW BUKU</h5>
            <form>

                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input disabled type="text" class="form-control" id="judul" aria-describedby="Judul" placeholder="Judul" value="{{ $buku->judul }}">
                </div>
                <div class="form-group">
                    <label for="pengarang">Pengarang</label>
                    <input disabled type="text" class="form-control" id="pengarang" aria-describedby="Pengarang" placeholder="Pengarang" value="{{ $buku->pengarang }}">
                </div>
                <div class="form-group">
                    <label for="penerbit">Penerbit</label>
                    <input disabled type="text" class="form-control" id="penerbit" aria-describedby="Penerbit" placeholder="Penerbit" value="{{ $buku->penerbit }}">
                </div>
                <div class="form-group">
                    <label for="tahun_terbit">Tahun Terbit</label>
                    <input disabled type="number" class="form-control" id="tahun_terbit" aria-describedby="Tahun Terbit" placeholder="Tahun Terbit" value="{{ $buku->tahun_terbit }}">
                </div>
                <a href="{{ route('buku.index') }}" class="btn btn-danger">Back</a>
            </form>
        </div>
    </div>
</div>
@endsection
