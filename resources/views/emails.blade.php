@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

          @foreach($emails as $email)

            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-tittle">{{ $email->subject }}</h5>
                    <p class="card-text">
                      {{ $email->get_excerpt }}
                      <a href="{{ route('email', $email) }}">Leer más</a>
                    </p>
                    <p class="text-muted mb-0">
                      <em>
                        &ndash; {{ $email->user->name }}
                      </em>
                      {{ $email->created_at->format('d M Y') }}
                    </p>
                </div>
            </div>

          @endforeach

          {{ $emails->links() }}

        </div>
    </div>
</div>
@endsection
