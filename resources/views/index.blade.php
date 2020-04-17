@extends('main')
@section('content')
    <!-- Begin Slider With Banner Area -->
    @include('partials.index.slider-banner')
    <!-- Slider With Banner Area End Here -->
    <!-- Begin Product Area -->
    @include('partials.index.product-area')
    <!-- Product Area End Here -->
    <!-- Begin Li's Static Banner Area -->
    @include('partials.index.static-banner')
    <!-- Li's Static Banner Area End Here -->
    <!-- Begin Li's Laptop Product Area -->
    @include('partials.index.laptop')
    <!-- Li's Laptop Product Area End Here -->
    <!-- Begin Li's TV & Audio Product Area -->
    @include('partials.index.tv')
    <!-- Li's Tv Area End Here -->
    <!-- Begin Li's Banner & Audio Product Area -->
    @include('partials.index.banner')
    <!-- Li's Static Home Area End Here -->
    <!-- Begin Li's Trending Product Area -->
    @include('partials.index.trending')
    <!-- Li's Trending Product Area End Here -->
    <!-- Begin Li's Trendding Products Area -->
    @include('partials.index.bestsellers')
    <!-- Li's Trendding Products Area End Here -->
@endsection
