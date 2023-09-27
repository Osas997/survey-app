@extends('layout.pages')
@section('title','Survey App')
@section('content')
@include('dashboard.murid.navbar')

<div class="container mx-auto mt-8">
   <div>
      @if ($dataLaporan)
      <h1>Skor Anda Pelaku Bullying <span>{{ $dataLaporan->skor_total_pelaku }}</span></h1>
      <h1>Skor Anda Korban Bullying <span>{{ $dataLaporan->skor_total_korban }}</span></h1>
      @else
      belum mengisi survey
      @endif
   </div>
</div>

@endsection