<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Home-Page</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .dropdown-menu {
            display: none;
        }

        .shift-up {
            animation: shiftUp 1s ease-out forwards;
        }

        @keyframes shiftUp {
            0% {
                transform: translateY(50px);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <div class="bg-white">
        <header class="absolute inset-x-0 top-0 z-50">
            <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="#" class="-m-1.5 p-1.5">
                        <img class="h-8 w-auto" src="https://img.icons8.com/ios-filled/50/000000/rfid-signal.png"
                            alt="RFID">
                    </a>
                </div>
                <div class="hidden lg:flex lg:gap-x-12">
                    <div class="relative dropdown text-center">
                        <a href="#" class="text-sm font-semibold text-gray-900">Features</a>
                        <div
                            class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white ring-1 shadow-lg ring-black/5 focus:outline-none dropdown-menu">
                            <div class="py-1" role="none">
                                <a href="/"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                    role="menuitem" tabindex="-1">Generate UID</a>
                                <a href="/rfid-logs"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                    role="menuitem" tabindex="-1">Data Log</a>
                                <a href="/rfid-logs"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                    role="menuitem" tabindex="-1">Delete UID</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">

                </div>
                <button type="button"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700"
                    onclick="document.querySelector('.lg\\:hidden[role=dialog]').style.display='block'">
                    <span class="sr-only">Open main menu</span>
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </nav>
            <div class="lg:hidden" role="dialog" aria-modal="true">
                <div class="fixed inset-0 z-50"></div>
                <div
                    class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                    <div class="flex items-center justify-between">
                        <a href="#" class="-m-1.5 p-1.5">
                            <span class="sr-only">RFID</span>
                            <img class="h-8 w-auto" src="https://img.icons8.com/ios-filled/50/000000/rfid-signal.png"
                                alt="RFID">
                        </a>
                        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700"
                            onclick="document.querySelector('.lg\\:hidden[role=dialog]').style.display='none'">
                            <span class="sr-only">Close menu</span>
                            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-6 flow-root">
                        <div class="-my-6 divide-y divide-gray-500/10">
                            <div class="space-y-2 py-6">
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Features</a>
                                <ul class="space-y-2 pl-4">
                                    <li>
                                        <a href="/" class="block rounded-lg px-3 py-2 text-gray-700 hover:bg-gray-100">
                                            Generate UID
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/rfid-logs"
                                            class="block rounded-lg px-3 py-2 text-gray-700 hover:bg-gray-100">
                                            Data Log
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/rfid-logs"
                                            class="block rounded-lg px-3 py-2 text-gray-700 hover:bg-gray-100">
                                            Delete UID
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <div class="relative isolate px-6 pt-14 lg:px-8">
            <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
                aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-1155/678 w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
            <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
                <div class="text-center shift-up">
                    <h1 class="text-5xl font-semibold tracking-tight text-gray-900 sm:text-7xl">RFID Data Logging</h1>
                    <p class="mt-8 text-lg font-medium text-gray-500 sm:text-xl">Recording and managing data from RFID
                        tags, enabling tracking and automatic storage of unique IDs for streamlined operations.</p>
                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <a id="showButton"
                            class="rounded-md border-2 border-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-indigo-600 bg-white shadow-xs hover:bg-indigo-100 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Click Here To View UID
                        </a>
                        <div id="modal"
                            class="fixed inset-0 flex items-center justify-center hidden bg-gray-500 bg-opacity-50">
                            <div class="bg-white p-6 rounded-lg shadow-lg w-96">
                                <h2 class="text-lg font-semibold text-indigo-600">Generated UID</h2>
                                <p id="uidDisplay" class="break-words"></p>
                                <button id="saveButton"
                                    class="mt-4 px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">
                                    Save
                                </button>
                            </div>
                        </div>
                        <a href="/rfid-logs" class="text-sm font-semibold text-gray-900">Log Data <span
                                aria-hidden="true">→</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>