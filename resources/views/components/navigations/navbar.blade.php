<nav x-data="{ scrolling: false }" x-on:scroll.window="scrolling = true" x-on:scroll.window.debounce.300ms="scrolling = false"
    x-bind:class="{ 'opacity-0 -translate-y-full': scrolling }"
    class="fixed top-0 z-50 py-2 flex w-full items-center justify-between lg:flex-wrap lg:justify-start opacity-100 -translate-y-0 transition duration-100 ease-linear bg-white/50 backdrop-blur-lg border-b border-slate-900/10">
    <div class="flex w-full flex-wrap items-center justify-between container mx-auto">
        <!-- Hamburger button for mobile view -->
        <button
            class="block border-0 bg-transparent px-2 text-black/50 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 lg:hidden"
            type="button" data-twe-collapse-init data-twe-target="#navbarSupportedContent1"
            aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
            <!-- Hamburger icon -->
            <span class="[&>svg]:w-7 [&>svg]:stroke-black/50 dark:[&>svg]:stroke-neutral-200">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                        clip-rule="evenodd" />
                </svg>
            </span>
        </button>

        <!-- Collapsible navigation container -->
        <div class="!visible hidden flex-grow basis-[100%] items-center lg:!flex lg:basis-auto"
            id="navbarSupportedContent1" data-twe-collapse-item>
            <!-- Logo -->
            <a class="mb-4 me-5 ms-2 mt-3 flex items-center text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:mb-0 lg:mt-0"
                href="#">
                <img src="https://tecdn.b-cdn.net/img/logo/te-transparent-noshadows.webp" style="height: 15px"
                    alt="TE Logo" loading="lazy" />
            </a>
            <!-- Left navigation links -->
            <ul class="list-style-none mx-auto flex flex-col ps-0 lg:flex-row" data-twe-navbar-nav-ref>
                <li class="static" data-twe-nav-item-ref>
                    <!-- Dashboard link -->
                    <a class="flex items-center whitespace-nowrap py-5 text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2"
                        href="#" data-twe-nav-link-ref>Dashboard</a>
                </li>
                <!-- Team link -->
                <li class="static" data-twe-nav-item-ref>
                    <a class="flex items-center whitespace-nowrap py-5 text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2"
                        href="#" data-twe-nav-link-ref>Team</a>
                </li>
                <!-- Projects link -->
                <li class="static" data-twe-nav-item-ref>
                    <a class="flex items-center whitespace-nowrap py-5 text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2"
                        href="#" data-twe-nav-link-ref>Projects</a>
                </li>
                <li class="static" data-twe-nav-item-ref data-twe-dropdown-ref>
                    <a class="flex items-center whitespace-nowrap py-5 text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2"
                        href="#" type="button" id="dropdownMenuButtonU" data-twe-dropdown-toggle-ref
                        aria-expanded="false" data-twe-nav-link-ref>Mega menu
                        <span class="ms-2 [&>svg]:h-5 [&>svg]:w-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </a>
                    <div class="absolute left-0 right-0 top-full z-[1000] mt-0 hidden w-full border-none bg-white bg-clip-padding data-[twe-dropdown-show]:block dark:bg-neutral-700"
                        aria-labelledby="dropdownMenuButtonU" data-twe-dropdown-menu-ref>
                        <div class="px-6 py-5 lg:px-8">
                            <div class="grid gap-6 md:grid-cols-3">
                                <div>
                                    <p
                                        class="block w-full pt-2 font-semibold uppercase text-neutral-700 dark:text-white">
                                        Lorem ipsum
                                    </p>
                                    <div class="relative my-4 overflow-hidden bg-cover bg-no-repeat"
                                        data-twe-ripple-init data-twe-ripple-color="light">
                                        <img src="https://tecdn.b-cdn.net/img/new/fluid/city/113.webp"
                                            class="w-full rounded-md shadow-lg dark:shadow-black/10" alt="Louvre" />
                                        <a href="#!">
                                            <div
                                                class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden rounded-md bg-zinc-50/20 bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="mb-3 mt-1 flex items-center justify-between">
                                        <p class="flex items-center text-primary-700 dark:text-primary-500">
                                            <span class="me-2 [&>svg]:h-5 [&>svg]:w-5">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor">
                                                    <path
                                                        d="M21.721 12.752a9.711 9.711 0 00-.945-5.003 12.754 12.754 0 01-4.339 2.708 18.991 18.991 0 01-.214 4.772 17.165 17.165 0 005.498-2.477zM14.634 15.55a17.324 17.324 0 00.332-4.647c-.952.227-1.945.347-2.966.347-1.021 0-2.014-.12-2.966-.347a17.515 17.515 0 00.332 4.647 17.385 17.385 0 005.268 0zM9.772 17.119a18.963 18.963 0 004.456 0A17.182 17.182 0 0112 21.724a17.18 17.18 0 01-2.228-4.605zM7.777 15.23a18.87 18.87 0 01-.214-4.774 12.753 12.753 0 01-4.34-2.708 9.711 9.711 0 00-.944 5.004 17.165 17.165 0 005.498 2.477zM21.356 14.752a9.765 9.765 0 01-7.478 6.817 18.64 18.64 0 001.988-4.718 18.627 18.627 0 005.49-2.098zM2.644 14.752c1.682.971 3.53 1.688 5.49 2.099a18.64 18.64 0 001.988 4.718 9.765 9.765 0 01-7.478-6.816zM13.878 2.43a9.755 9.755 0 016.116 3.986 11.267 11.267 0 01-3.746 2.504 18.63 18.63 0 00-2.37-6.49zM12 2.276a17.152 17.152 0 012.805 7.121c-.897.23-1.837.353-2.805.353-.968 0-1.908-.122-2.805-.353A17.151 17.151 0 0112 2.276zM10.122 2.43a18.629 18.629 0 00-2.37 6.49 11.266 11.266 0 01-3.746-2.504 9.754 9.754 0 016.116-3.985z" />
                                                </svg>
                                            </span>
                                            Travels
                                        </p>
                                        <p><u>15.07.2021</u></p>
                                    </div>
                                    <a href="#!">
                                        <h5 class="mb-2 text-xl font-semibold">
                                            This is title of the news
                                        </h5>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Odit, iste aliquid. Sed id nihil magni, sint
                                            vero provident esse numquam perferendis ducimus
                                            dicta adipisci iusto nam temporibus modi animi
                                            laboriosam.
                                        </p>
                                    </a>
                                </div>
                                <div>
                                    <p
                                        class="block w-full pt-2 font-semibold uppercase text-neutral-700 dark:text-white">
                                        Explicabo voluptas
                                    </p>
                                    <div class="relative my-4 overflow-hidden bg-cover bg-no-repeat"
                                        data-twe-ripple-init data-twe-ripple-color="light">
                                        <img src="https://tecdn.b-cdn.net/img/new/fluid/city/011.webp"
                                            class="w-full rounded-md shadow-lg dark:shadow-black/10" alt="Louvre" />
                                        <a href="#!">
                                            <div
                                                class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden rounded-md bg-zinc-50/20 bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="mb-3 mt-1 flex items-center justify-between">
                                        <p class="flex items-center text-danger-700 dark:text-danger-500">
                                            <span class="me-2 [&>svg]:h-5 [&>svg]:w-5">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M2.25 13.5a8.25 8.25 0 018.25-8.25.75.75 0 01.75.75v6.75H18a.75.75 0 01.75.75 8.25 8.25 0 01-16.5 0z"
                                                        clip-rule="evenodd" />
                                                    <path fill-rule="evenodd"
                                                        d="M12.75 3a.75.75 0 01.75-.75 8.25 8.25 0 018.25 8.25.75.75 0 01-.75.75h-7.5a.75.75 0 01-.75-.75V3z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </span>
                                            Business
                                        </p>
                                        <p><u>15.07.2021</u></p>
                                    </div>
                                    <a href="#!">
                                        <h5 class="mb-2 text-xl font-semibold">
                                            This is title of the news
                                        </h5>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Odit, iste aliquid. Sed id nihil magni, sint
                                            vero provident esse numquam perferendis ducimus
                                            dicta adipisci iusto nam temporibus modi animi
                                            laboriosam.
                                        </p>
                                    </a>
                                </div>
                                <div>
                                    <p
                                        class="block w-full pt-2 font-semibold uppercase text-neutral-700 dark:text-white">
                                        Cras justo odio
                                    </p>
                                    <div class="relative my-4 overflow-hidden bg-cover bg-no-repeat"
                                        data-twe-ripple-init data-twe-ripple-color="light">
                                        <img src="https://tecdn.b-cdn.net/img/new/fluid/city/018.webp"
                                            class="w-full rounded-md shadow-lg dark:shadow-black/10" alt="Louvre" />
                                        <a href="#!">
                                            <div
                                                class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden rounded-md bg-zinc-50/20 bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="mb-3 mt-1 flex items-center justify-between">
                                        <p class="flex items-center text-warning-800 dark:text-warning-500">
                                            <span class="me-2 [&>svg]:h-5 [&>svg]:w-5">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M14.447 3.027a.75.75 0 01.527.92l-4.5 16.5a.75.75 0 01-1.448-.394l4.5-16.5a.75.75 0 01.921-.526zM16.72 6.22a.75.75 0 011.06 0l5.25 5.25a.75.75 0 010 1.06l-5.25 5.25a.75.75 0 11-1.06-1.06L21.44 12l-4.72-4.72a.75.75 0 010-1.06zm-9.44 0a.75.75 0 010 1.06L2.56 12l4.72 4.72a.75.75 0 11-1.06 1.06L.97 12.53a.75.75 0 010-1.06l5.25-5.25a.75.75 0 011.06 0z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </span>
                                            Technology
                                        </p>
                                        <p><u>15.07.2021</u></p>
                                    </div>
                                    <a href="#!">
                                        <h5 class="mb-2 text-xl font-semibold">
                                            This is title of the news
                                        </h5>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Odit, iste aliquid. Sed id nihil magni, sint
                                            vero provident esse numquam perferendis ducimus
                                            dicta adipisci iusto nam temporibus modi animi
                                            laboriosam.
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="static" data-twe-nav-item-ref data-twe-dropdown-ref>
                    <!-- Dropdown -->
                    <a class="py-5 flex items-center text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2"
                        href="#" type="button" id="dropdownMenuButton2" data-twe-dropdown-toggle-ref
                        aria-expanded="false">
                        Dropdown
                        <span class="ms-1 [&>svg]:w-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </a>
                    <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg data-[twe-dropdown-show]:block dark:bg-surface-dark"
                        aria-labelledby="dropdownMenuButton1" data-twe-dropdown-menu-ref>
                        <li>
                            <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                                href="#" data-twe-dropdown-item-ref>Action</a>
                        </li>
                        <li>
                            <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                                href="#" data-twe-dropdown-item-ref>Another action</a>
                        </li>
                        <li>
                            <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                                href="#" data-twe-dropdown-item-ref>Something else here</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Left links -->
        </div>

        <!-- Right elements -->
        <div class="relative flex items-center">
            <!-- Icon -->
            <a class="me-4 text-neutral-600 dark:text-white" href="#">
                <span class="[&>svg]:w-5">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
                    </svg>
                </span>
            </a>

            <!-- First dropdown container -->
            <div class="relative" data-twe-dropdown-ref data-twe-dropdown-alignment="end">
                <!-- First dropdown trigger -->
                <a class="me-4 flex items-center text-neutral-600 dark:text-white" href="#"
                    id="dropdownMenuButton1" role="button" data-twe-dropdown-toggle-ref aria-expanded="false">
                    <!-- Dropdown trigger icon -->
                    <span class="[&>svg]:w-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                    <!-- Notification counter -->
                    <span
                        class="absolute -mt-4 ms-2.5 rounded-full bg-danger px-[0.35em] py-[0.15em] text-[0.6rem] font-bold leading-none text-white">1</span>
                </a>
                <!-- First dropdown menu -->
                <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg data-[twe-dropdown-show]:block dark:bg-surface-dark"
                    aria-labelledby="dropdownMenuButton1" data-twe-dropdown-menu-ref>
                    <!-- First dropdown menu items -->
                    <li>
                        <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                            href="#" data-twe-dropdown-item-ref>Action</a>
                    </li>
                    <li>
                        <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                            href="#" data-twe-dropdown-item-ref>Another action</a>
                    </li>
                    <li>
                        <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                            href="#" data-twe-dropdown-item-ref>Something else here</a>
                    </li>
                </ul>
            </div>

            <!-- Second dropdown container -->
            <div class="relative" data-twe-dropdown-ref data-twe-dropdown-alignment="end">
                <!-- Second dropdown trigger -->
                <a class="flex items-center whitespace-nowrap transition duration-150 ease-in-out motion-reduce:transition-none"
                    href="#" id="dropdownMenuButton2" role="button" data-twe-dropdown-toggle-ref
                    aria-expanded="false">
                    <!-- User avatar -->
                    <img src="https://tecdn.b-cdn.net/img/new/avatars/2.jpg" class="rounded-full"
                        style="height: 25px; width: 25px" alt="" loading="lazy" />
                </a>
                <!-- Second dropdown menu -->
                <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg data-[twe-dropdown-show]:block dark:bg-surface-dark"
                    aria-labelledby="dropdownMenuButton2" data-twe-dropdown-menu-ref>
                    <!-- Second dropdown menu items -->
                    <li>
                        <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                            href="#" data-twe-dropdown-item-ref>Action</a>
                    </li>
                    <li>
                        <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                            href="#" data-twe-dropdown-item-ref>Another action</a>
                    </li>
                    <li>
                        <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                            href="#" data-twe-dropdown-item-ref>Something else here</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Right elements -->
    </div>
</nav>
