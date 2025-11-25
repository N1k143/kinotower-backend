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
                @foreach($countries as $country)
                <tbody>
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $country->name }}</td>
                        <td>
                            <a href="{{ route('countries.edit', $country->id) }}" class="btn btn-outline-warning">Edit</a>
                            <form class="d-inline-block" action="{{ route('countries.destroy', $country->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
@endsection
