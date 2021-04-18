@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar datos personales') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('users.update', $user) }}" method="POST">
                      <div class="form-group">
                        <label>Nombre *</label>
                        <input type="text" name="name" class="form-control" required value="{{ old('name', $user->name) }}">
                      </div>
                      <div class="form-group">
                        <label>Documento *</label>
                        <input type="text" name="" class="form-control" required value="{{ $user->document }}" readonly>
                      </div>
                      <div class="form-group">
                        <label>Email *</label>
                        <input type="email" name="" class="form-control" required value="{{ $user->name }}" readonly>
                      </div>
                      <div class="form-group">
                        <label>Movil *</label>
                        <input type="text" name="phone" class="form-control" required value="{{ old('phone', $user->phone) }}">
                      </div>
                      <div class="form-group">
                        <label>Fecha de nacimiento *</label>
                        <input type="date" name="date" class="form-control" required value="{{ old('date', $user->date) }}">
                        <em>
                          &ndash; {{ Carbon\Carbon::parse($user->date)->age }} años
                        </em>
                      </div>
                      <div class="form-group">
                        @csrf
                        @method('PUT')
                        <input type="submit" value="Actualizar" class="btn btn-sm btn-primary">
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
