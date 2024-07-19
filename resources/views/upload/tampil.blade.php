@extends('template')
@section('main')
    <h1>Upload File</h1>
    <form action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data" class="d-flex">
        @csrf
        <div class="custom-file w-25">
            <input type="file" class="custom-file-input" name="image">
            <label class="custom-file-label" for="customFile">Pilih Gambar</label>
        </div>
        <div>
            <button class="btn btn-success mx-3" type="submit">Submit</button>
        </div>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td><img width="300" src="{{ asset('storage/'.$item->image) }}" alt=""></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
