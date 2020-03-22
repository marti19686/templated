@extends('layout')

@section('content')

    <div id="wrapper">
        <div id="page" class="container">
            <form class="form-group" style="width: 300px">
                @csrf

                <div class="mb-5">
                    <label for="email">Email Address</label>
                    <input type="text" id="email" name="email" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Email Me</button>
            </form>
        </div>
    </div>

@endsection
