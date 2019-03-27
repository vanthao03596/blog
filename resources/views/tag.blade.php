@extends('front.layouts.master')
@section('content')
<div class="bg-white w-full text-xl md:text-2xl text-grey-darkest leading-normal rounded-t">
    <div class="container font-sans text-center ">
        <h1>Web</h1>
        <div class="mt-2">
            <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4">
                <path d="M14.4429008,23.7744902 L8.34787826,17.944169 L2.25285576,23.7744902 C2.10780746,23.8894094 1.94171423,23.9595562 1.77120393,23.9868714 C1.71719951,23.9954904 1.66181846,24 1.6053913,24 C0.733763643,24 4.4408921e-16,23.3090623 4.4408921e-16,22.42036 L4.4408921e-16,1.25412932 C4.4408921e-16,0.723799848 0.28433197,0.244699969 0.822236618,0.0663515255 C0.982404415,0.0132460589 1.12666656,-0.00204032517 1.28186513,0.000211809426 C1.35304676,0.0012447482 1.38046168,0.0031905923 1.50305219,0.0133965248 C1.55929016,0.0180784608 1.58577038,0.0196251488 1.6053913,0.0196251488 L15.0902609,0.0196251488 C15.1098818,0.0196251488 15.136362,0.0180784608 15.1926,0.0133965248 C15.3151905,0.0031905923 15.3426054,0.0012447482 15.413787,0.000211809426 C15.5689856,-0.00204032517 15.7132478,0.0132460589 15.8734156,0.0663515255 C16.4113202,0.244699969 16.6956522,0.723799848 16.6956522,1.25412932 L16.6956522,22.42036 C16.6956522,23.3090623 15.9618885,24 15.0902609,24 C15.0061199,24 14.9243049,23.9899728 14.8459304,23.9710405 C14.7032293,23.9368156 14.5655424,23.871657 14.4429008,23.7744902 Z"></path></svg>
            <span>
                1 post
            </span>
        </div>
    </div>
    <!--Posts Container-->
    <div class="flex flex-wrap justify-between pt-12 -mx-4">
        <!--1/3 col -->
        <div class="w-full md:w-1/3 p-3 flex flex-col flex-grow flex-shrink">
            <div class="article-wrap">
                <div style="background-image:url( 'https://source.unsplash.com/collection/225/800x600');" class="item-image"></div>
                <h2 class="mr-8 leading-tight text-4xl mb-4">
                    <a href="#" class="bg-transparent text-white no-underline">
                            Getting the latest
                        </a>
                </h2>
                <div class="mb-12 text-white text-sm">
                    <time datetime="2019201920192019-MarMar-FriFri">3 days ago</time>
                </div>
                <a class="primary-tag" href="https://miguelpiedrafita.com/tag/web">Web</a>
            </div>

        </div>
        <!--1/3 col -->
        <div class="w-full md:w-1/3 p-3 flex flex-col flex-grow flex-shrink">
            <div class="article-wrap">
                <div style="background-image:url( 'https://source.unsplash.com/collection/539527/800x600');" class="item-image"></div>
                <h2 class="mr-8 leading-tight text-4xl mb-4">
                    <a href="#" class="bg-transparent text-white no-underline">
                            Getting the latest episodes instantly
                        </a>
                </h2>
                <div class="mb-12 text-white text-sm">
                    <time datetime="2019201920192019-MarMar-FriFri">3 days ago</time>
                </div>
                <a class="primary-tag" href="https://miguelpiedrafita.com/tag/web">Web</a>
            </div>

        </div>
        <!--1/3 col -->
        <div class="w-full md:w-1/3 p-3 flex flex-col flex-grow flex-shrink">
            <div class="article-wrap">
                <div style="background-image:url( 'https://source.unsplash.com/collection/3106804/800x600');" class="item-image"></div>
                <h2 class="mr-8 leading-tight text-4xl mb-4">
                    <a href="#" class="bg-transparent text-white no-underline">
                            Getting the latest episodes instantly in
                        </a>
                </h2>
                <div class="mb-12 text-white text-sm">
                    <time datetime="2019201920192019-MarMar-FriFri">3 days ago</time>
                </div>
                <a class="primary-tag" href="https://miguelpiedrafita.com/tag/web">Web</a>
            </div>

        </div>


    </div>
    <!--/ Post Content-->

</div>
@endsection
