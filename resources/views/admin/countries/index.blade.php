@extends('admin.layout.main')
@section('title', 'List countries')
@section('content')
    <div class="row">
        <div class="col">
            <a href="{{ route('countries.create') }}" class="btn btn-outline-success">Add country</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table ">
                <thead>
                    <tr>#</tr>
                    <th>Name</th>
                    <th></th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Afgan</td>
                        <td>
                            <a href="#" class="btn btn-outline-warning">Edit</a>
                            <form class="d-inline-block" action="" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
