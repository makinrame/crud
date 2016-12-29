@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                <form action= "{{ route('kontak.update',['id'=> $kontak->id]) }}" method='post'>
                {{ csrf_field()}}
                <input type="hidden" name= "_method" value="put"/>
  <div class="form-group">
    <label for="kontak">Kontak</label>
    <input type="text" class="form-control" name="nama" id="nama1" placeholder="nama" value="{{ $kontak->nama }}">
    <input type="text" class="form-control" name="number" id="number1" placeholder="number" value="{{ $kontak->number }}">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
                    




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
