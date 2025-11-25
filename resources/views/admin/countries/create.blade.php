@extends('admin.layout.main')
@section('title', isset($country) ? 'Edit country:'.$country->name : 'Add new country')
@section('content')
    <div class="row">
        <div class="col">
            <form action="{{ isset($country) ? route('countries.update', $country->id) : route('countries.store') }}" method="POST">
                @csrf
                @isset($country)
                    @method('PATCH')
                @endisset
                <div>
                    <label class="form-label" for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ isset($country) ? old('name', $country->name) : old('name') }}">
                </div>
                <div class="mt-3">
                    <button class="btn btn-outline-success" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
