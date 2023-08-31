@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">Add Car</div>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.cars.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama_mobil">Car Name</label>
                <input type="text" name="nama_mobil" class="form-control" value="{{ old('nama_mobil') }}">
            </div>
            <div class="form-group">
                <label for="harga_sewa">Rent Price</label>
                <input type="number" name="harga_sewa" class="form-control" value="{{ old('harga_sewa') }}">
            </div>
            <div class="form-group">
                <label for="bahan_bakar">Fuel Type</label>
                <input type="text" name="bahan_bakar" class="form-control" value="{{ old('bahan_bakar') }}">
            </div>

            <div class="form-group">
                <label for="jumlah_kursi">Number of Seats</label>
                <input type="number" name="jumlah_kursi" class="form-control" value="{{ old('jumlah_kursi') }}">
            </div>
            <div class="form-group">
                <label for="transmisi">Transmission</label>
                <select name="transmisi" id="transmisi" class="form-control">
                    <option value="manual">Manual</option>
                    <option value="otomatis">Matic</option>
                </select>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="available">Available</option>
                    <option value="unavailable">Unavailable</option>
                </select>
            </div>
            <div class="form-group">
                <label for="deskripsi">Description</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="5">{{ old('deskripsi') }}</textarea>
            </div>
            <div class="form-group">
                <label for="p3k">First Aids Kit</label>
                <select name="p3k" id="p3k" class="form-control">
                    <option value="1">Available</option>
                    <option value="0">Unavailable</option>
                </select>
            </div>
            <div class="form-group">
                <label for="audio">Audio</label>
                <select name="audio" id="audio" class="form-control">
                    <option value="1">Available</option>
                    <option value="0">Unavailable</option>
                </select>
            </div>
            <div class="form-group">
                <label for="charger">Charger</label>
                <select name="charger" id="charger" class="form-control">
                    <option value="1">Available</option>
                    <option value="0">Unavailable</option>
                </select>
            </div>
            <div class="form-group">
                <label for="ac">AC</label>
                <select name="ac" id="ac" class="form-control">
                    <option value="1">Tersedia</option>
                    <option value="0">Tidak Tersedia</option>
                </select>
            </div>
            <div class="form-group">
                <label for="gambar">Picture</label>
                <input type="file" class="form-control" width="200" name="gambar">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
