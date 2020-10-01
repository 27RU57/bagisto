@extends('admin.layouts.app')

@section('content')
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold">Přehled</h1>

        <div>
            dates
        </div>
    </div>

    <div class="flex flex-wrap -m-4">
        <article class="w-1/4 p-4">
            <div class="p-5 shadow-lg rounded-xl font-bold">
                <h2 class="mb-2">Celkem zákazníků</h2>
                <p class="flex items-center justify-between">
                    <span class="text-3xl">2</span>
                    <span class="flex items-center">
                        <svg class="w-6 mr-2" fill="none" viewBox="0 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <circle id="Oval" fill-opacity="0.1" fill="#115740" cx="15" cy="15" r="15"></circle>
                            <path d="M10.064973,19.8848347 L20.0131204,9.93668732" id="Path-3" stroke="#115740" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <polyline id="Path-2" stroke="#115740" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" points="20.0131204 18.1535062 20.0131204 9.93668732 11.7963015 9.93668732"></polyline>
                        </svg>
                        100%
                    </span>
                </p>
            </div>
        </article>
        <article class="w-1/4 p-4">
            <div class="p-5 shadow-lg rounded-xl font-bold">
                <h2 class="mb-2">Celkem objednávek</h2>
                <p class="flex items-center justify-between">
                    <span class="text-3xl">2</span>
                    <span class="flex items-center">
                        <svg class="w-6 mr-2" fill="none" viewBox="0 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <circle id="Oval" fill-opacity="0.1" fill="#115740" cx="15" cy="15" r="15"></circle>
                            <path d="M10.064973,19.8848347 L20.0131204,9.93668732" id="Path-3" stroke="#115740" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <polyline id="Path-2" stroke="#115740" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" points="20.0131204 18.1535062 20.0131204 9.93668732 11.7963015 9.93668732"></polyline>
                        </svg>
                        100%
                    </span>
                </p>
            </div>
        </article>
        <article class="w-1/4 p-4">
            <div class="p-5 shadow-lg rounded-xl font-bold">
                <h2 class="mb-2">Celkem prodeje</h2>
                <p class="flex items-center justify-between">
                    <span class="text-3xl">17 721 Kč</span>
                    <span class="flex items-center">
                        <svg class="w-6 mr-2" fill="none" viewBox="0 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <circle id="Oval" fill-opacity="0.1" fill="#115740" cx="15" cy="15" r="15"></circle>
                            <path d="M10.064973,19.8848347 L20.0131204,9.93668732" id="Path-3" stroke="#115740" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <polyline id="Path-2" stroke="#115740" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" points="20.0131204 18.1535062 20.0131204 9.93668732 11.7963015 9.93668732"></polyline>
                        </svg>
                        100%
                    </span>
                </p>
            </div>
        </article>
        <article class="w-1/4 p-4">
            <div class="p-5 shadow-lg rounded-xl font-bold">
                <h2 class="mb-2">Prům. hodnota objednávky</h2>
                <p class="flex items-center justify-between">
                    <span class="text-3xl">262 Kč</span>
                    <span class="flex items-center">
                        <svg class="w-6 mr-2" fill="none" viewBox="0 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <circle id="Oval" fill-opacity="0.1" fill="#115740" cx="15" cy="15" r="15"></circle>
                            <path d="M10.064973,19.8848347 L20.0131204,9.93668732" id="Path-3" stroke="#115740" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <polyline id="Path-2" stroke="#115740" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" points="20.0131204 18.1535062 20.0131204 9.93668732 11.7963015 9.93668732"></polyline>
                        </svg>
                        100%
                    </span>
                </p>
            </div>
        </article>
    </div>
    <div class="flex flex-wrap -m-4">
        <article class="w-3/4 p-4">
            <div class="p-5 shadow-lg rounded-xl font-bold">
                <h2 class="mb-2">Celkem počet objednávek</h2>

                <graph />
            </div>
        </article>
        <article class="flex w-1/4 p-4 relative">
            <div class="relative flex w-full h-full">
                <div class="absolute h-full w-full pt-5 shadow-lg rounded-xl font-bold overflow-auto">
                    <h2 class="mb-5 px-5">TOP tento měsíc</h2>
                    <ul class="-my-3">
                        <li class="flex items-center justify-between border-b px-5 py-3">
                            <div class="flex flex-1 items-center">
                                <div class="w-8 h-8 rounded-full bg-gray-500 mr-2"></div>
                                <h3>Curri</h3>
                            </div>
                            <div class="ml-2 mr-8">
                                <h4 class="text-xs font-light">Obrat celkem</h4>
                                <span>3 892 Kč</span>
                            </div>
                            <div>
                                <h4 class="text-xs font-light">Prodáno</h4>
                                <span>377 ks</span>
                            </div>
                        </li>
                        <li class="flex items-center justify-between border-b px-5 py-3">
                            <div class="flex flex-1 items-center">
                                <div class="w-8 h-8 rounded-full bg-gray-500 mr-2"></div>
                                <h3>Curri</h3>
                            </div>
                            <div class="ml-2 mr-8">
                                <h4 class="text-xs font-light">Obrat celkem</h4>
                                <span>3 892 Kč</span>
                            </div>
                            <div>
                                <h4 class="text-xs font-light">Prodáno</h4>
                                <span>377 ks</span>
                            </div>
                        </li>
                        <li class="flex items-center justify-between border-b px-5 py-3">
                            <div class="flex flex-1 items-center">
                                <div class="w-8 h-8 rounded-full bg-gray-500 mr-2"></div>
                                <h3>Curri</h3>
                            </div>
                            <div class="ml-2 mr-8">
                                <h4 class="text-xs font-light">Obrat celkem</h4>
                                <span>3 892 Kč</span>
                            </div>
                            <div>
                                <h4 class="text-xs font-light">Prodáno</h4>
                                <span>377 ks</span>
                            </div>
                        </li>
                        <li class="flex items-center justify-between border-b px-5 py-3">
                            <div class="flex flex-1 items-center">
                                <div class="w-8 h-8 rounded-full bg-gray-500 mr-2"></div>
                                <h3>Curri</h3>
                            </div>
                            <div class="ml-2 mr-8">
                                <h4 class="text-xs font-light">Obrat celkem</h4>
                                <span>3 892 Kč</span>
                            </div>
                            <div>
                                <h4 class="text-xs font-light">Prodáno</h4>
                                <span>377 ks</span>
                            </div>
                        </li>
                        <li class="flex items-center justify-between border-b px-5 py-3">
                            <div class="flex flex-1 items-center">
                                <div class="w-8 h-8 rounded-full bg-gray-500 mr-2"></div>
                                <h3>Curri</h3>
                            </div>
                            <div class="ml-2 mr-8">
                                <h4 class="text-xs font-light">Obrat celkem</h4>
                                <span>3 892 Kč</span>
                            </div>
                            <div>
                                <h4 class="text-xs font-light">Prodáno</h4>
                                <span>377 ks</span>
                            </div>
                        </li>
                        <li class="flex items-center justify-between border-b px-5 py-3">
                            <div class="flex flex-1 items-center">
                                <div class="w-8 h-8 rounded-full bg-gray-500 mr-2"></div>
                                <h3>Curri</h3>
                            </div>
                            <div class="ml-2 mr-8">
                                <h4 class="text-xs font-light">Obrat celkem</h4>
                                <span>3 892 Kč</span>
                            </div>
                            <div>
                                <h4 class="text-xs font-light">Prodáno</h4>
                                <span>377 ks</span>
                            </div>
                        </li>
                        <li class="flex items-center justify-between border-b px-5 py-3">
                            <div class="flex flex-1 items-center">
                                <div class="w-8 h-8 rounded-full bg-gray-500 mr-2"></div>
                                <h3>Curri</h3>
                            </div>
                            <div class="ml-2 mr-8">
                                <h4 class="text-xs font-light">Obrat celkem</h4>
                                <span>3 892 Kč</span>
                            </div>
                            <div>
                                <h4 class="text-xs font-light">Prodáno</h4>
                                <span>377 ks</span>
                            </div>
                        </li>
                        <li class="flex items-center justify-between border-b px-5 py-3">
                            <div class="flex flex-1 items-center">
                                <div class="w-8 h-8 rounded-full bg-gray-500 mr-2"></div>
                                <h3>Curri</h3>
                            </div>
                            <div class="ml-2 mr-8">
                                <h4 class="text-xs font-light">Obrat celkem</h4>
                                <span>3 892 Kč</span>
                            </div>
                            <div>
                                <h4 class="text-xs font-light">Prodáno</h4>
                                <span>377 ks</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </article>
    </div>
@endsection