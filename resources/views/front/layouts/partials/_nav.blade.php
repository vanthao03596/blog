<header class="w-full  mx-auto flex flex-wrap items-center justify-between mt-8 mb-12" id="header">
    <div class="pl-4">
        <a class="text-black text-base no-underline hover:no-underline font-bold text-xl" href="/">
            {{ config('app.name') }}
        </a>
    </div>

    <div class="block lg:hidden pr-4">
        <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-grey border-grey-dark hover:text-black hover:border-teal appearance-none focus:outline-none">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
        </button>
    </div>

    <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-grey-lightest md:bg-transparent z-20"
        id="nav-content">
        <ul class="list-reset lg:flex justify-end flex-1 items-center">
            <li class="mr-3">
                <a class="inline-block py-2 px-4 text-black font-bold no-underline" href="#">Active</a>
            </li>
            <li class="mr-3">
                <a class="inline-block text-grey-dark no-underline hover:text-black hover:text-underline py-2 px-4" href="#">link</a>
            </li>
            <li class="mr-3">
                <a class="inline-block text-grey-dark no-underline hover:text-black hover:text-underline py-2 px-4" href="#">link</a>
            </li>
        </ul>
    </div>
</header>
