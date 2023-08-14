@extends('layouts.main')

@section('title', 'Color Palettes for Your Creative Projects!')
@section('canonical', request()->url())
@section('description','Explore a wide variety of unique and creative color palettes on our website. Find the perfect combination of shades for your design, illustration, or decoration projects. From vibrant and bold palettes to soft and harmonious blends, discover visual inspiration and expand your creativity with our color palettes.')

@section('ogtitle','Discover Unique Color Palettes for Your Creative Projects')
@section('ogdescription','Explore a wide variety of unique and creative color palettes on our website. Find the perfect combination of shades for your design, illustration, or decoration projects. From vibrant and bold palettes to soft and harmonious blends, discover visual inspiration and expand your creativity with our color palettes.')
@section('ogurl', request()->url())
@section('ogimage','https://bmcportbucket.s3.amazonaws.com/seoCovers/vRVgRybwzymHPzfC7EFewU5al0K2zEnYVjBVTSf3.jpg')

@section('twtitle','Discover Unique Color Palettes for Your Creative Projects')
@section('twdescription','Explore a wide variety of unique and creative color palettes on our website. Find the perfect combination of shades for your design, illustration, or decoration projects. From vibrant and bold palettes to soft and harmonious blends, discover visual inspiration and expand your creativity with our color palettes.')
@section('twurl', request()->url())
@section('twimage','https://bmcportbucket.s3.amazonaws.com/seoCovers/vRVgRybwzymHPzfC7EFewU5al0K2zEnYVjBVTSf3.jpg')

@section('shared-button')
    @include('components.shareButton', ['title' => 'Color Palettes for Your Creative Projects', 'url' => 'https://bmcportbucket.s3.amazonaws.com/seoCovers/vRVgRybwzymHPzfC7EFewU5al0K2zEnYVjBVTSf3.jpg'])
@endsection

@section('content')

<section class="palettes">
    <h1>Palettes</h1>
</section>

@include('components.generalCards')

@endsection