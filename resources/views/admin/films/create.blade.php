@extends('admin.layout.main')
@section('title', isset($film) ? 'Edit film:'.$film->name : 'Add new film')
@section('content')
    <div class="row">
        <div class="col">
            <form action="{{ isset($film) ? route('films.update', $film->id) : route('films.store') }}" method="POST">
                @csrf
                @isset($film)
                    @method('PATCH')
                @endisset
                <div>
                    <label class="form-label" for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ isset($film) ? old('name', $film->name) : old('name') }}">
                </div>
                <div class="mt-2">
                    <label class="form-label" for="country_id">Country</label>
                    <select class="form-select" name="country_id" id="country_id">
                        @foreach($countries as $country)
                            <option @selected(isset($film) && $film->country_id === $country->id) value="{{ $country->id }}">{{ $country->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-2">
                    <label class="form-label" for="duration">Duration</label>
                    <input type="number" class="form-control" name="duration" id="duration" value="{{ isset($film) ? old('duration', $film->duration) : old('duration') }}">
                </div>
                <div class="mt-2">
                    <label class="form-label" for="year">Year of issue</label>
                    <input type="number" class="form-control" name="year" id="year" value="{{ isset($film) ? old('year', $film->year) : old('year') }}">
                </div>
                <div class="mt-2">
                    <label class="form-label" for="age">Age</label>
                    <input type="number" class="form-control" name="age" id="age" value="{{ isset($film) ? old('age', $film->age) : old('age') }}">
                </div>
                <div class="mt-2">
                    <label class="form-label" for="link_img">Link image</label>
                    <input type="text" class="form-control" name="link_img" id="link_img" value="{{ isset($film) ? old('link_img', $film->link_img) : old('link_img') }}">
                </div>
                <div class="mt-2">
                    <label class="form-label" for="link_kinopoisk">Link Kinopoisk</label>
                    <input type="text" class="form-control" name="link_kinopoisk" id="link_kinopoisk" value="{{ isset($film) ? old('link_kinopoisk', $film->link_kinopoisk) : old('link_kinopoisk') }}">
                </div>
                <div class="mt-2">
                    <label class="form-label" for="link_video">Link video</label>
                    <input type="text" class="form-control" name="link_video" id="link_video" value="{{ isset($film) ? old('link_video', $film->link_video) : old('link_video') }}">
                </div>
                <div class="mt-3">
                    <button class="btn btn-outline-success" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
