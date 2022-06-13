@extends('layouts')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card w-90">
            @foreach($datas as $value)
            <div class="table-renposnsive">
                <table class="table table-striped">
                    <tr class="table-default mb-3">
                        <td>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-10">
                                        <h4 class="card-title">{{ $value->nama }}</h5>
                                    </div>
                                    <div class="col-1">
                                        <div class="col-6 col-sm-2"><a class="btn btn-primary bi bi-pencil" href="{{ url('table/'.$value->id.'/edit')}}">Edit</a>
                                    </div>
                                    <div class="col-1">
                                        <form action="{{ url('table/'.$value->id) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-danger" type="submit">Hapus</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="card-text">{{ $value->nrp }}</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="card-text">{{ $value->email }}</p>
                                        </div>
                                    </div>
                                </div>
                                <p class="card-text">{{ $value->alamat }}</p>
                            </div>
                        </td>

                    </tr>

                </table>

            </div>

            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
