@extends('layouts.user.app')
@section('conten')

<div class="w-full">
    @include('guest.pages.landing.header')

    @include('guest.pages.landing.explore')

    @include('guest.pages.landing.packages')

    @include('guest.pages.landing.news')

    @include('guest.pages.landing.testimony')

    @include('guest.pages.landing.letsgo')
</div>

@endsection
