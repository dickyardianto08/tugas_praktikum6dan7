@extends('layouts')
@section('content')
<section>

    <div class="row justify-content-center">
    <div class="col-md-6">
        <form action="{{ url('table') }}" method="POST">
            @csrf
            <div class="form-group">
                Nama Lengkap :<input type="text" name="nama" class="form-control"  />
            </div>
            <div class="form-group">
                NRP :<input type="text" name="nrp" class="form-control" />
            </div>
            <div class="form-group">
                Alamat :<input type="text" name="alamat" class="form-control"  />
            </div>
            <div class="form-group">
                Email :<input type="text" name="email" class="form-control"  />
            </div><br>
            <button type="submit" name="submit" value="submit" class="btn btn-success">Tambah</button>
            <br><br><br><br><br>
        </form>
    </div>
</div>

    </div>
</section>
@endsection
