@extends('layouts.app')

@section('content')
  <div class="bg-purple-800 flex flex-col flex-1 max-md:p-[16px] md:items-center justify-center">
    <h1 class="mb-[40px] md:mb-[56px] text-white text-[2.25rem]/[2.5rem] tracking-[-0.025rem] md:text-[3.25rem]/[3.5rem] md:tracking-[-0.05rem] xl:text-[4rem]/[4.25rem] xl:tracking-[-0.0625rem]"><span class="text-pink">404</span><br class="md:hidden"> Pagina niet gevonden</h1>
    <x-button text="Naar homepage" variant="secondary" href="/" />
  </div>
@endsection
