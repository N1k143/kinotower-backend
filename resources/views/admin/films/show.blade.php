@extends('admin.layout.main')
@section('title', 'Detail page film: '.$film->name)
@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <div class="position-relative h-100">
                            <img src="{{ $film->link_img }}" class="img-fluid h-100 w-100 rounded-start" alt="{{ $film->name }}" style="object-fit: cover;">
                            <span class="position-absolute top-0 start-0 m-3 badge bg-danger bg-opacity-90 fs-6 px-3 py-2">{{ $film->age }}+</span>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body p-4 h-100 d-flex flex-column">
                            <h2 class="card-title fw-bold mb-3 border-bottom pb-3">{{ $film->name }}</h2>

                            <div class="film-details mt-3 flex-grow-1">
                                <div class="d-flex align-items-center mb-4 p-3 bg-light bg-gradient rounded-2">
                                    <i class="fas fa-flag text-primary me-3 fs-5"></i>
                                    <div>
                                        <small class="text-muted text-uppercase fw-semibold">Country</small>
                                        <p class="mb-0 fw-bold fs-6">{{ $film->country->name }}</p>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center mb-4 p-3 bg-light bg-gradient rounded-2">
                                    <i class="fas fa-clock text-warning me-3 fs-5"></i>
                                    <div>
                                        <small class="text-muted text-uppercase fw-semibold">Duration</small>
                                        <p class="mb-0 fw-bold fs-6">{{ $film->duration }} min</p>
                                    </div>
                                </div>
                            </div>

                            <div class="film-links mt-auto">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <a href="{{ $film->link_kinopoisk }}" class="btn btn-outline-primary w-100 py-2 fw-semibold" target="_blank">
                                            <i class="fas fa-star me-2"></i>
                                            Kinopoisk
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{ $film->link_video }}" class="btn btn-success w-100 py-2 fw-semibold" target="_blank">
                                            <i class="fas fa-play me-2"></i>
                                            Watch Video
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
