@extends('layouts.main')

@section('title', 'Color Palettes for Your Creative Projects!')
@section('canonical','https://brayanmanzano.dev/palettes')
@section('description','Explore a wide variety of unique and creative color palettes on our website. Find the perfect combination of shades for your design, illustration, or decoration projects. From vibrant and bold palettes to soft and harmonious blends, discover visual inspiration and expand your creativity with our color palettes.')

@section('ogtitle','Discover Unique Color Palettes for Your Creative Projects')
@section('ogdescription','Explore a wide variety of unique and creative color palettes on our website. Find the perfect combination of shades for your design, illustration, or decoration projects. From vibrant and bold palettes to soft and harmonious blends, discover visual inspiration and expand your creativity with our color palettes.')
@section('ogurl','https://brayanmanzano.dev/palettes')

@section('twtitle','Discover Unique Color Palettes for Your Creative Projects')
@section('twdescription','Explore a wide variety of unique and creative color palettes on our website. Find the perfect combination of shades for your design, illustration, or decoration projects. From vibrant and bold palettes to soft and harmonious blends, discover visual inspiration and expand your creativity with our color palettes.')
@section('twurl','https://brayanmanzano.dev/palettes')

@include('components.shareButton', ['title' => 'Color Palettes for Your Creative Projects'])

@section('content')

<section class="palettes">
    <h1>Palettes</h1>
</section>


@include('components.generalCards')

@endsection