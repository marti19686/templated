@extends('layout')

@section('content')

    <div id="wrapper">
        <div id="page" class="container">

            <form method="post" action="{{ '/payments' }}">
                @csrf
                <input type="submit" value="Make payments" class="btn btn-dark">
            </form>

        </div>
    </div>

@endsection
