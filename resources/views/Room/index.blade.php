@extends('layouts.admin')

@section('main-content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">{{ __('Kamar') }}</h1>

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
                <a class="btn btn-success" href="{{ route('room.create') }}"> Create New</a>
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
                    <th>Kamar</th>
                    <th>Jenis Kamar</th>
                    <th width="280px">Action</th>
                </tr>
                @forelse($kamars as $kamar)
                <tr>
                    <td>{{ $kamar+1 }}</td>
                    <td>{{ $kamar->kamar }}</td>
                    <td>{{ $kamar->jenis_kamar }}</td>
                    <td>
                        <form action="{{ url('room/'.$kamars->id) }}" method="POST">

                            <a href="{{ url('room/'.$kamars->id.'/edit') }}">Edit</a>
                            
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