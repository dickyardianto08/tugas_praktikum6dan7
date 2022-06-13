@extends('layouts')
@section('content')
<section>
    <div class="row justify-content-center">
    <div class="col-md-6 mb-10">
        <form action="{{ url('table/'.$model->id) }}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <div class="form-group">
                Nama Lengkap :<input type="text" name="nama" class="form-control" value="{{ $model->nama }}" />
            </div>
            <div class="form-group">
                NRP :<input type="text" name="nrp" class="form-control" value="{{ $model->nrp }}" />
            </div>
            <div class="form-group">
                Alamat :<input type="text" name="alamat" class="form-control" value="{{ $model->alamat }}" />
            </div>
            <div class="form-group">
                Email :<input type="text" name="email" class="form-control" value="{{ $model->email }}" />
            </div><br>
            <button type="submit" name="submit" value="submit" class="btn btn-success">Update</button>
        </form>
        <br><br><br><br><br>
    </div>
</div>
</section>
@endsection
