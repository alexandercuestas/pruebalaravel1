@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  {{ __('Listado de emails') }}
                  <a href="{{ route('emails.create') }}" class="btn btn-sm btn-primary float-right">Redactar</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Asunto</th>
                          <th>&nbsp</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($emails as $email)
                          <tr>
                            <td>{{ $email->id }}</td>
                            <td>{{ $email->subject }}</td>
                            <td>
                              <form action="{{ route('emails.destroy', $email) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input
                                  type="submit"
                                  value="Eliminar"
                                  class="btn btn-danger btn-sm"
                                  onclick="return confirm('¿Desea eliminar...?')"
                                >
                              </form>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
