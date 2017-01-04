@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">

                    <form class="form-inline">
                        <div class="form-group">
                            <input type="text" class="form-control" id="search" placeholder="search" name="keyword" value="{{ request()->has('keyword') ? request()->input('keyword') : '' }}">
                        </div>
                        <button type="submit" class="btn btn-default">cari</button>
                    </form>

                    <br/>

                    <a class="btn btn-success" href="/kontak/create" role="button">Tambah Kontak</a>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Number</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kontaks as $kontak)
                            <tr>
                                <td>{{ $kontak->nama }}</td>
                                <td>{{ $kontak->number}}</td>
                                <td><a class="btn btn-primary" href="{{ route ('kontak.edit',['id' => $kontak->id])}}">Edit</a></td>
                                <td>
                                    <form action="{{ route('kontak.delete',['id'=> $kontak->id]) }}" method="post">
                                        {{csrf_field()}}
                                        <input type="hidden" name="_method" value="delete" />
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('anda yakin?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$kontaks->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
