@extends('layouts.main')

@section('content')

@php
$aboutdata = get_about_data();
@endphp

<section id="about" class="about">
    <h2><span>Tentang</span> Kami</h2>
    <div class="row">
      {{-- <div class="about-img">
        <img src="{{ Storage::url($aboutdata->thumbnail) }}" alt="Tentang Kami" />
      </div> --}}
      <div class="content">
        <p>
          {!! $aboutdata->content !!}
        </p>
      </div>
    </div>
  </section>
@endsection