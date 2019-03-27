@extends('front.layouts.master')
@section('content')
    @php
        /** @var \Domain\Article\Models\Article[] $article */
    @endphp
<!--Title-->
<div class="text-center">
    <p class="text-sm md:text-base text-teal font-bold">{{ $article->created_at->toFormattedDateString() }} <span class="text-black">/</span> GETTING STARTED</p>
    <h1 class="break-normal text-3xl md:text-5xl">{{ $article->name }}</h1>
</div>

<!--image-->
<div class="container w-full max-w-4xl mx-auto bg-white bg-cover mt-8 rounded" style="background-image:url({{ $article->asset_url() }}); height: 75vh;"></div>

<!--Container-->
<div class="container max-w-2xl mx-auto -mt-32">

    <div class="mx-0 sm:mx-6">

        <div class="bg-white w-full p-8 md:p-24 text-xl md:text-2xl text-grey-darkest leading-normal" style="font-family:Georgia,serif;">
            <!--Post Content-->
                {!! $article->content !!}
            <!--/ Post Content-->
        </div>
@endsection
