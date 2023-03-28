@extends('layouts.app')
@section('title','Esqueci a senha')

@section('content')
  <div class="w-full h-[100vh] bg-blue-700 flex items-center justify-center">
    <form action="#" method="post" class="w-4/12 mt-20 bg-white px-4 py-6 rounded">
      <strong class="leading-relaxed text-2xl text-blue-800">Esqueceste a senha?</strong>
      <p class="text-sm text-gray-600">Informa seu e-mail para receber o link de redifinição de senha.</p>
      <div class="flex flex-col mt-6">
        <label for="email" class="text-gray-600 font-medium">E-mail</label>
        <input
          type="text"
          name="email"
          placeholder="Seu e-mail de usuário"
          class="p-2.5 mt-4 rounded outline-0 border-zinc-400 border-[1px] focus:border-1 focus:outline-0"
        />
      </div>
      <div class="flex flex-col gap-2 mt-8">
        <button type="submit" class="p-2.5 rounded bg-blue-700 text-white font-medium transition hover:bg-blue-800">Enviar</button>
        <a href="{{ route("pages.login") }}" class="p-2.5 rounded bg-zinc-200 text-zinc-500 font-medium transition hover:bg-zinc-300 text-center">Fazer login</a>
      </div>
    </form>
  </div>
@endsection