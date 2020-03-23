@extends('layout')

@section('content')

    <div id="wrapper">
        <div id="page" class="container">

        <ul>
            @forelse($notifications as $notification)
                <li>
                    @if ($notification->type === 'App\Notifications\PaymentRecieve')
                    We have payment {{ $notification->data['ammount'] }} for you !
                    @endif
                </li>
            @empty
                <li>You have no unread notifications at this moment</li>
            @endforelse
        </ul>
        </div>
    </div>

@endsection
