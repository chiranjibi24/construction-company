@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="card shadow">

        <div class="card-header">

            <h3>Add Gallery Image</h3>

        </div>

        <div class="card-body">

            <form action="{{ route('gallery.store') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                <div class="mb-3">

                    <label class="form-label">
                        Title
                    </label>

                    <input type="text"
                           name="title"
                           class="form-control">

                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Category Image
                    </label>

                    <input type="file"
                            name="image"
                            class="form-control"
                            accept="image/*">

                    @error('image')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>

                <button class="btn btn-success">
                    Save Gallery
                </button>

            </form>

        </div>

    </div>

</div>

@endsection