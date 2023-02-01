@extends('layouts.app')


@auth

    <h1>Usuário autenticado</h1>
    <p>ID {{ Auth::user()->id }}</p>
    <p>Nome {{ Auth::user()->name }}</p>
    <p>Email {{ Auth::user()->email }}</p>

@endauth
@section('content')
@guest
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
          <h1 class="display-4 fw-normal">Olá visitante!</h1>
          <p class="lead fw-normal"><br>Seja Bem Vindo ao sistema de controle de tarefas!<br>Onde você pode exportar suas tarefas em XML, PDF, entre outros formatos.....</p>
          <a class="btn btn-outline-secondary" href="{{ route('login') }}">{{ __('Faça Login!') }}</a>
        </div>
      </div>
@endguest
@endsection