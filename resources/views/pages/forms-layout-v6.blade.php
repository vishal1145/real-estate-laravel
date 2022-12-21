<x-app-layout title="Form Layout v5" is-header-blur="true">
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
            <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">
                Form Layout 5
    </h2>
            <div class="hidden h-full py-1 sm:flex">
                <div class="h-full w-px bg-slate-300 dark:bg-navy-600"></div>
            </div>
            <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
                <li class="flex items-center space-x-2">
                    <a class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                        href="#">Forms</a>
                    <svg x-ignore xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
    stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
       </li>
                <li>Form Layout 5</li>
            </ul>
     </div>

        <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
    <div class="col-span-12 lg:col-span-4">
                <div class="card p-4 sm:p-5">
                    <div class="flex items-center space-x-4">
        <div class="avatar h-14 w-14">

            <img class="rounded-full" src="{{asset('images/200x200.png')}}" alt="avatar" />
        </div>
        <div>
            <h3 class="text-base font-medium text-slate-700 dark:text-navy-100">
                Travis Fuller
            </h3>
            <p class="text-xs+">Author</p>
        </div>
    </div>
    <ul class="mt-6 space-y-1.5 font-inter font-medium">
        <li>
            <a class="group flex space-x-2 rounded-lg px-4 py-2.5 tracking-wide outline-none transition-all
                            hover:bg-primary
                            hover:text-white
                            focus:bg-white
                            focus:text-white 
                            dark:hover:bg-primary
                            dark:hover:text-white
                            dark:focus:bg-primary
                            dark:focus:text-navy-100" href="http://127.0.0.1:8000/forms/layout-v5">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>Basic</span>
            </a>
        </li>
        <li>
            <a class="group flex space-x-2 rounded-lg px-4 py-2.5 tracking-wide outline-none transition-all
                            hover:bg-primary
                            hover:text-white
                            focus:bg-white
                            focus:text-white 
                            dark:hover:bg-primary
                            dark:hover:text-white
                            dark:focus:bg-primary
                            dark:focus:text-navy-100" href="http://127.0.0.1:8000/forms/layout-v6">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>Images</span>
            </a>
        </li>
        <li>
            <a class="group flex space-x-2 rounded-lg px-4 py-2.5 tracking-wide outline-none transition-all
                            hover:bg-primary
                            hover:text-white
                            focus:bg-white
                            focus:text-white 
                            dark:hover:bg-primary
                            dark:hover:text-white
                            dark:focus:bg-primary
                            dark:focus:text-navy-100" href="http://127.0.0.1:8000/forms/layout-v5">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
                <span>Security</span>
            </a>
        </li>
        <li>
            <a class="group flex space-x-2 rounded-lg px-4 py-2.5 tracking-wide outline-none transition-all
                            hover:bg-primary
                            hover:text-white
                            focus:bg-white
                            focus:text-white 
                            dark:hover:bg-primary
                            dark:hover:text-white
                            dark:focus:bg-primary
                            dark:focus:text-navy-100" href="#">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                </svg>
                <span>Apps</span>
            </a>
        </li>
        <li>
            <a class="group flex space-x-2 rounded-lg px-4 py-2.5 tracking-wide outline-none transition-all
                            hover:bg-primary
                            hover:text-white
                            focus:bg-white
                            focus:text-white 
                            dark:hover:bg-primary
                            dark:hover:text-white
                            dark:focus:bg-primary
                            dark:focus:text-navy-100" href="#">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                </svg>
                <span> Privacy & data </span>
            </a>
        </li>
    </ul>
    </div>
    </div>

    <div class="col-span-12 lg:col-span-8">
        <div class="card">
            <div
                class="flex flex-col items-center space-y-4 border-b border-slate-200 p-4 dark:border-navy-500 sm:flex-row sm:justify-between sm:space-y-0 sm:px-5">
                <h2 class="text-lg font-medium tracking-wide text-slate-700 dark:text-navy-100">
                    Images
                </h2>
                <form action="{{route('forms/layout-v5')}}" method="post" enctype="multipart/form-data">
                    @method('POST') @csrf
                    <input class="opacity-0" type="file" id="actual-btn" hidden />
                    <label for="actual-btn">
                        <div class="flex justify-center space-x-2">

                            <buttontype="file"
                                class="btn min-w-[7rem] rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                <b>+</b>Add New

                                </button>
                        </div>
            </div>
            </label>
        </div>
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
            <div class="col-md-4 my-5">
            @if(session('status'))
                <div class="alert alert-success">
            {{ session('status') }}
                </div>
            @endif
                <div class="card">
                    <img class="h-80 w-full rounded-lg object-cover" src="{{asset('images/800x800.png') }}"
                        alt="image" />
                    <div class="absolute inset-0 flex h-full w-full flex-col justify-between">
                        <div class="flex justify-end p-3">
                            <button
                                class="btn h-7 w-7 rounded-full bg-black/20 p-0 hover:bg-black/30 focus:bg-black/30">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                        <div
                            class="rounded-lg bg-gradient-to-t from-[#19213299] via-[#19213266] to-transparent px-4 py-3 pt-14">
                            <div>
                                <a href="#" class="text-base font-semibold text-white line-clamp-2">
                                    Bora Bora
                                </a>
                            </div>
                            <div class="mt-1 flex items-center space-x-3 text-slate-200">
                                <p class="flex items-center space-x-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <span class="text-xs+ line-clamp-1">French</span>
                                </p>
                                <p class="flex shrink-0 items-center space-x-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" stroke="currentColor" class="h-3.5 w-3.5"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M13.948 4.29l1.643 3.169c.224.44.82.864 1.325.945l2.977.477c1.905.306 2.353 1.639.98 2.953l-2.314 2.233c-.392.378-.607 1.107-.486 1.63l.663 2.763c.523 2.188-.681 3.034-2.688 1.89l-2.791-1.593c-.504-.288-1.335-.288-1.848 0l-2.791 1.594c-1.997 1.143-3.21.288-2.688-1.89l.663-2.765c.12-.522-.094-1.251-.486-1.63l-2.315-2.232c-1.362-1.314-.924-2.647.98-2.953l2.978-.477c.495-.081 1.092-.504 1.316-.945l1.643-3.17c.896-1.719 2.352-1.719 3.239 0z" />
                                    </svg>
                                    <span class="text-xs+">4.9</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-5">
                <div class="card">
                    <img class="h-80 w-full rounded-lg object-cover" src="{{asset('images/800x800.png') }}"
                        alt="image" />
                    <div class="absolute inset-0 flex h-full w-full flex-col justify-between">
                        <div class="flex justify-end p-3">
                            <button
                                class="btn h-7 w-7 rounded-full bg-black/20 p-0 hover:bg-black/30 focus:bg-black/30">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                        <div
                            class="rounded-lg bg-gradient-to-t from-[#19213299] via-[#19213266] to-transparent px-4 py-3 pt-14">
                            <div>
                                <a href="#" class="text-base font-semibold text-white line-clamp-2">
                                    Bora Bora
                                </a>
                            </div>
                            <div class="mt-1 flex items-center space-x-3 text-slate-200">
                                <p class="flex items-center space-x-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <span class="text-xs+ line-clamp-1">French</span>
                                </p>
                                <p class="flex shrink-0 items-center space-x-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" stroke="currentColor" class="h-3.5 w-3.5"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M13.948 4.29l1.643 3.169c.224.44.82.864 1.325.945l2.977.477c1.905.306 2.353 1.639.98 2.953l-2.314 2.233c-.392.378-.607 1.107-.486 1.63l.663 2.763c.523 2.188-.681 3.034-2.688 1.89l-2.791-1.593c-.504-.288-1.335-.288-1.848 0l-2.791 1.594c-1.997 1.143-3.21.288-2.688-1.89l.663-2.765c.12-.522-.094-1.251-.486-1.63l-2.315-2.232c-1.362-1.314-.924-2.647.98-2.953l2.978-.477c.495-.081 1.092-.504 1.316-.945l1.643-3.17c.896-1.719 2.352-1.719 3.239 0z" />
                                    </svg>
                                    <span class="text-xs+">4.9</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
            <div class="col-md-4 ">
                <div class="card">
                    <img class="h-80 w-full rounded-lg object-cover" src="{{asset('images/800x800.png') }}"
                        alt="image" />
                    <div class="absolute inset-0 flex h-full w-full flex-col justify-between">
                        <div class="flex justify-end p-3">
                            <button
                                class="btn h-7 w-7 rounded-full bg-black/20 p-0 hover:bg-black/30 focus:bg-black/30">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                        <div
                            class="rounded-lg bg-gradient-to-t from-[#19213299] via-[#19213266] to-transparent px-4 py-3 pt-14">
                            <div>
                                <a href="#" class="text-base font-semibold text-white line-clamp-2">
                                    Bora Bora
                                </a>
                            </div>
                            <div class="mt-1 flex items-center space-x-3 text-slate-200">
                                <p class="flex items-center space-x-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <span class="text-xs+ line-clamp-1">French</span>
                                </p>
                                <p class="flex shrink-0 items-center space-x-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" stroke="currentColor" class="h-3.5 w-3.5"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M13.948 4.29l1.643 3.169c.224.44.82.864 1.325.945l2.977.477c1.905.306 2.353 1.639.98 2.953l-2.314 2.233c-.392.378-.607 1.107-.486 1.63l.663 2.763c.523 2.188-.681 3.034-2.688 1.89l-2.791-1.593c-.504-.288-1.335-.288-1.848 0l-2.791 1.594c-1.997 1.143-3.21.288-2.688-1.89l.663-2.765c.12-.522-.094-1.251-.486-1.63l-2.315-2.232c-1.362-1.314-.924-2.647.98-2.953l2.978-.477c.495-.081 1.092-.504 1.316-.945l1.643-3.17c.896-1.719 2.352-1.719 3.239 0z" />
                                    </svg>
                                    <span class="text-xs+">4.9</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="h-80 w-full rounded-lg object-cover" src="{{asset('images/800x800.png') }}"
                        alt="image" />
                    <div class="absolute inset-0 flex h-full w-full flex-col justify-between">
                        <div class="flex justify-end p-3">
                            <button
                                class="btn h-7 w-7 rounded-full bg-black/20 p-0 hover:bg-black/30 focus:bg-black/30">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                        <div
                            class="rounded-lg bg-gradient-to-t from-[#19213299] via-[#19213266] to-transparent px-4 py-3 pt-14">
                            <div>
                                <a href="#" class="text-base font-semibold text-white line-clamp-2">
                                    Bora Bora
                                </a>
                            </div>
                            <div class="mt-1 flex items-center space-x-3 text-slate-200">
                                <p class="flex items-center space-x-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <span class="text-xs+ line-clamp-1">French</span>
                                </p>
                                <p class="flex shrink-0 items-center space-x-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" stroke="currentColor" class="h-3.5 w-3.5"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M13.948 4.29l1.643 3.169c.224.44.82.864 1.325.945l2.977.477c1.905.306 2.353 1.639.98 2.953l-2.314 2.233c-.392.378-.607 1.107-.486 1.63l.663 2.763c.523 2.188-.681 3.034-2.688 1.89l-2.791-1.593c-.504-.288-1.335-.288-1.848 0l-2.791 1.594c-1.997 1.143-3.21.288-2.688-1.89l.663-2.765c.12-.522-.094-1.251-.486-1.63l-2.315-2.232c-1.362-1.314-.924-2.647.98-2.953l2.978-.477c.495-.081 1.092-.504 1.316-.945l1.643-3.17c.896-1.719 2.352-1.719 3.239 0z" />
                                    </svg>
                                    <span class="text-xs+">4.9</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
            <div class="col-md-4 my-5">
                <div class="card">
                    <img class="h-80 w-full rounded-lg object-cover" src="{{asset('images/800x800.png') }}"
                        alt="image" />
                    <div class="absolute inset-0 flex h-full w-full flex-col justify-between">
                        <div class="flex justify-end p-3">
                            <button
                                class="btn h-7 w-7 rounded-full bg-black/20 p-0 hover:bg-black/30 focus:bg-black/30">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                        <div
                            class="rounded-lg bg-gradient-to-t from-[#19213299] via-[#19213266] to-transparent px-4 py-3 pt-14">
                            <div>
                                <a href="#" class="text-base font-semibold text-white line-clamp-2">
                                    Bora Bora
                                </a>
                            </div>
                            <div class="mt-1 flex items-center space-x-3 text-slate-200">
                                <p class="flex items-center space-x-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <span class="text-xs+ line-clamp-1">French</span>
                                </p>
                                <p class="flex shrink-0 items-center space-x-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" stroke="currentColor" class="h-3.5 w-3.5"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M13.948 4.29l1.643 3.169c.224.44.82.864 1.325.945l2.977.477c1.905.306 2.353 1.639.98 2.953l-2.314 2.233c-.392.378-.607 1.107-.486 1.63l.663 2.763c.523 2.188-.681 3.034-2.688 1.89l-2.791-1.593c-.504-.288-1.335-.288-1.848 0l-2.791 1.594c-1.997 1.143-3.21.288-2.688-1.89l.663-2.765c.12-.522-.094-1.251-.486-1.63l-2.315-2.232c-1.362-1.314-.924-2.647.98-2.953l2.978-.477c.495-.081 1.092-.504 1.316-.945l1.643-3.17c.896-1.719 2.352-1.719 3.239 0z" />
                                    </svg>
                                    <span class="text-xs+">4.9</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-5">
                <div class="card">
                    <img class="h-80 w-full rounded-lg object-cover" src="{{asset('images/800x800.png') }}"
                        alt="image" />
                    <div class="absolute inset-0 flex h-full w-full flex-col justify-between">
                        <div class="flex justify-end p-3">
                            <button
                                class="btn h-7 w-7 rounded-full bg-black/20 p-0 hover:bg-black/30 focus:bg-black/30">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                        <div
                            class="rounded-lg bg-gradient-to-t from-[#19213299] via-[#19213266] to-transparent px-4 py-3 pt-14">
                            <div>
                                <a href="#" class="text-base font-semibold text-white line-clamp-2">
                                    Bora Bora
                                </a>
                            </div>
                            <div class="mt-1 flex items-center space-x-3 text-slate-200">
                                <p class="flex items-center space-x-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <span class="text-xs+ line-clamp-1">French</span>
                                </p>
                                <p class="flex shrink-0 items-center space-x-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" stroke="currentColor" class="h-3.5 w-3.5"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M13.948 4.29l1.643 3.169c.224.44.82.864 1.325.945l2.977.477c1.905.306 2.353 1.639.98 2.953l-2.314 2.233c-.392.378-.607 1.107-.486 1.63l.663 2.763c.523 2.188-.681 3.034-2.688 1.89l-2.791-1.593c-.504-.288-1.335-.288-1.848 0l-2.791 1.594c-1.997 1.143-3.21.288-2.688-1.89l.663-2.765c.12-.522-.094-1.251-.486-1.63l-2.315-2.232c-1.362-1.314-.924-2.647.98-2.953l2.978-.477c.495-.081 1.092-.504 1.316-.945l1.643-3.17c.896-1.719 2.352-1.719 3.239 0z" />
                                    </svg>
                                    <span class="text-xs+">4.9</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    </div>
    </div>
    </form>
    </main>
    </x-app-layout>