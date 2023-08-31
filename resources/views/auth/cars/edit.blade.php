@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">Edit Car</div>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.cars.update', $car->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="nama_mobil">Car Name</label>
                <input type="text" name="nama_mobil" class="form-control" value="{{ old('nama_mobil', $car->nama_mobil)}}">
            </div>
            <div class="form-group">
                <label for="harga_sewa">Rent Price</label>
                <input type="number" name="harga_sewa" class="form-control" value="{{ old('harga_sewa', $car->harga_sewa )}}">
            </div>
            <div class="form-group">
                <label for="bahan_bakar">Fuel Type</label>
                <input type="text" name="bahan_bakar" class="form-control" value="{{ old('bahan_bakar', $car->bahan_bakar )}}">
            </div>

            <div class="form-group">
                <label for="jumlah_kursi">Number of Seats</label>
                <input type="number" name="jumlah_kursi" class="form-control" value="{{ old('jumlah_kursi', $car->jumlah_kursi )}}">
            </div>
            <div class="form-group">
                <label for="transmisi">Transmission</label>
                <select name="transmisi" id="transmisi" class="form-control">
                    <option {{ $car->transmisi == 'manual' ? 'selected' : null }} value="manual">Manual</option>
                    <option {{ $car->transmisi == 'otomatis' ? 'selected' : null }}value="otomatis">Matic</option>
                </select>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option {{ $car->status == 'available' ? 'selected' : null }} value="available">Available</option>
                    <option {{ $car->status == 'unavailable' ? 'selected' : null }} value="unavailable">Unavailable</option>
                </select>
            </div>
            <div class="form-group">
                <label for="deskripsi">Description</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="5">{{ old('deskripsi',$car->deskripsi) }}</textarea>
            </div>
            <div class="form-group">
                <label for="p3k">First Aids Kit</label>
                <select name="p3k" id="p3k" class="form-control">
                    <option {{ $car->p3k == 1 ? 'selected' : null }} value="1">Available</option>
                    <option {{ $car->p3k == 0 ? 'selected' : null }} value="0">Unavailable</option>
                </select>
            </div>
            <div class="form-group">
                <label for="audio">Audio</label>
                <select name="audio" id="audio" class="form-control">
                    <option {{ $car->audio == 1 ? 'selected' : null }} value="1">Available</option>
                    <option {{ $car->audio == 0 ? 'selected' : null }} value="0">Unavailable</option>
                </select>
            </div>
            <div class="form-group">
                <label for="charger">Charger</label>
                <select name="charger" id="charger" class="form-control">
                    <option {{ $car->charger == 1 ? 'selected' : null }} value="1">Available</option>
                    <option {{ $car->charger == 0 ? 'selected' : null }} value="0">Unavailable</option>
                </select>
            </div>
            <div class="form-group">
                <label for="ac">AC</label>
                <select name="ac" id="ac" class="form-control">
                    <option {{ $car->ac == 1 ? 'selected' : null }} value="1">Available</option>
                    <option {{ $car->ac == 0 ? 'selected' : null }} value="0">Unavailable</option>
                </select>
            </div>
            <div class="form-group">
                <img src="{{ Storage::url($car->gambar) }}" width="200" class="img-fluid" >
            </div>
            <div class="form-group">
                <label for="gambar">Picture</label>
                <input type="file" class="form-control" name="gambar">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
