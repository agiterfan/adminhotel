@extends('layouts.admin')

@section('main-content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">{{ __('Jenis Kamar') }}</h1>

    @if (session('success'))
        <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger border-left-danger" role="alert">
            <ul class="pl-4 my-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('roomType.create') }}"> Create New</a>
            </div>
        </div>
    </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
    <div>
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Jenis Kamar</th>
                    <th>Fasilitas</th>
                    <th>Harga</th>
                    <th width="280px">Action</th>
                </tr>
                @forelse ($jeniskamars as $key => $jeniskamar)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $jeniskamar->Jenis_Kamar }}</td>
                    <td>{{ $jeniskamar->Fasilitas }}</td>
                    <td>{{ $jeniskamar->Harga }}</td>
                    <td>
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('roomType.destroy', $jeniskamar->id) }}" method="POST">
                            <a href="{{ route('roomType.show', $jeniskamar->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                            <a href="{{ route('roomType.edit', $jeniskamar->id) }}">Edit</a>
                            
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center">
                        Tidak Terdapat Data Kamar
                    </td>
                </tr>
                @endforelse   
            </table>     
    </div>
    
@endsection