@extends('layout')

@section('content')

    <div id="wrapper">
        <div id="page" class="container">
            <form method="POST" action="/contact" class="form-group" style="width: 300px">
                @csrf

                <div class="mb-5">
                    <label for="email">Email Address</label>
                    <input type="text" id="email" name="email" class="form-control">

                    @error('email')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Email Me</button>

                @if (session('message'))
                <p class="alert alert-success"> {{ session('message') }}</p>
                @endif

            </form>
        </div>
    </div>

@endsection
