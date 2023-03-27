@extends('layouts.app')
@section('title','Login')

@section('content')
  <div class="w-full h-[100vh] flex gap-4 overflow-hidden">
    <div class="flex-1 relative">
      <div class="absolute left-0 top-0 bg-auth-background w-full h-full p-5">
        <div class="flex flex-col justify-center items-center h-full pb-5 text-gray-200 text-center px-12">
          <img src="{{ asset("images/logo-01.png") }}" width="300" class="mb-4" alt="Logo AirJet" />
          {{-- <strong class="text-3xl">Seja um AirJet</strong> --}}
          <p>O nosso objectivo é de tornar o impossivel em possível.</p>
        </div>
      </div>
      <video src="{{ asset("videos/background.mp4") }}" autoplay muted loop></video>
    </div>
    <div class="flex-1 h-full">
      <div class="h-full w-full p-12">
        <form action="#" method="post" class="w-10/12 mt-20">
          <strong class="leading-relaxed text-3xl text-blue-700">Entrar</strong>
          <p class="text-md text-gray-600">Informa as suas credências de autenticação para entrar</p>
          <div class="flex flex-col mt-8">
            <label for="email" class="text-gray-600 font-medium">E-mail</label>
            <input
              type="text"
              name="email"
              placeholder="Seu e-mail de usuário"
              class="p-2.5 mt-4 rounded outline-0 border-zinc-400 border-[1px] focus:border-1 focus:outline-0"
            />
          </div>
          <div class="flex flex-col mt-8">
            <label for="password" class="text-gray-600 font-medium">Senha</label>
            <div>
              <input
                type="password"
                name="password"
                placeholder="Sua senha de usuário"
                class="p-2.5 mt-4 w-full rounded outline-0 border-zinc-400 border-[1px] focus:border-1 focus:outline-0"
              />
              <p class="mt-2"><a href="#" class="text-blue-800 text-sm">Esqueceste a senha?</a></p>
            </div>
          </div>
          <div class="flex flex-col gap-4 mt-8">
            <button type="submit" class="p-2.5 rounded bg-blue-600 text-white font-medium transition hover:bg-blue-700">Entrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection