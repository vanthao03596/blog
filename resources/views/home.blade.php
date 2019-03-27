@extends('front.layouts.master')

@section('content')
<div class="bg-grey-lighter w-full text-xl md:text-2xl text-grey-darkest leading-normal rounded-t">

        <!--Lead Card-->
        <div class="flex h-full bg-white rounded overflow-hidden shadow-lg">
            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                <div class="w-full md:w-2/3 rounded-t">
                    <img src="https://source.unsplash.com/collection/494263/800x600" class="h-full w-full shadow">
                </div>

                <div class="w-full md:w-1/3 flex flex-col flex-grow flex-shrink">
                    <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                        <p class="w-full text-grey-dark text-xs md:text-sm pt-6 px-6">GETTING STARTED</p>
                        <div class="w-full font-bold text-xl text-black px-6">👋 Welcome fellow Tailwind CSS and Ghost fan</div>
                        <p class="text-grey-darkest font-serif text-base px-6 mb-5">
                            This starter template is an attempt to replicate the default Ghost theme "Casper" using Tailwind CSS and vanilla Javascript.
                        </p>
                    </div>

                    <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                        <div class="flex items-center justify-between">
                            <img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
                            <p class="text-grey-dark text-xs md:text-sm">1 MIN READ</p>
                        </div>
                    </div>
                </div>

            </a>
        </div>
        <!--/Lead Card-->


        <!--Posts Container-->
        <div class="flex flex-wrap justify-between pt-12 -mx-4">
            <!--1/3 col -->
            @foreach($articles as $article)
            <div class="w-full md:w-1/3 p-3 flex flex-col flex-grow flex-shrink">
                <div class="article-wrap">
                    <div style="background-image:url({{ $article->asset_url() }});" class="item-image"></div>
                    <h2 class="mr-8 leading-tight text-4xl mb-4">
                        <a href="{{ route('articles.show', $article) }}" class="bg-transparent text-white no-underline">
                            {{ $article->name }}
                        </a>
                    </h2>
                    <div class="mb-12 text-white text-sm">
                        <time datetime="2019201920192019-MarMar-FriFri">{{ $article->created_at }}</time>
                    </div>
                    <a class="primary-tag" href="#">Web</a>
                </div>

            </div>
            @endforeach
        </div>
        <!--/ Post Content-->

    </div>

@endsection
