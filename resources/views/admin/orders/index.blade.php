@extends('admin.layouts.app')

@section('content')
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold">Objednávky</h1>

        <div>
            <a href="" class="btn">
                <svg class="w-5 stroke-current mr-3" stroke-width="2" fill="none" viewBox="0 0 19 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path d="M17.3664884,12.3574007 L17.3664884,14.4032117 L17.3664884,14.433305 C17.3664884,16.6764254 15.54808,18.4948338 13.3049596,18.4948338 L5.06152876,18.4948338 C2.81840837,18.4948338 1,16.6764254 1,14.433305 L1,14.4032117 L1,12.3574007"></path>
                    <path d="M9.1832442,13 L9.1832442,1.64259934" id="Path-9" transform="translate(9.183244, 7.321300) scale(1, -1) translate(-9.183244, -7.321300) "></path>
                    <polyline id="Path-2" transform="translate(9.183244, 3.176958) scale(1, -1) translate(-9.183244, -3.176958) " points="6.11452762 1.64259934 9.1832442 4.71131592 12.2519608 1.64259934"></polyline>
                    </g>
                </svg>
                Exportovat
            </a>
        </div>
    </div>

    <div class="flex items-center justify-between mb-12">
        <div style="width: 30rem;">
            <search-bar />
        </div>

        <div class="flex items-center">
            Počet na stránku:
            <select-box class="ml-3" endpoint="orders" default="10" position="right">
                <div data-value="10">10</div>
                <div data-value="20">20</div>
                <div data-value="50">50</div>
            </select-box>
        </div>
    </div>

    <div class="mb-8">
        <data-table
            :endpoint="'orders'"
            :actions="['show', 'edit', 'download']"
            :cols="[
                {
                    value: 'id',
                    text: 'ID',
                },
                {
                    value: 'name',
                    text: 'Název',
                },
                {
                    value: 'customer',
                    text: 'Zákazník',
                },
                {
                    value: 'price',
                    text: 'Cena',
                },
                {
                    value: 'created_at',
                    text: 'Datum vytvoření',
                },
                {
                    value: 'state',
                    text: 'Stav',
                },
            ]"
            :rows="[
                {
                    id: 1,
                    name: 'Curri',
                    customer: 'David Stančík',
                    price: '2 912 Kč',
                    created_at: '2020-10-10',
                    state: {
                        text: 'Pending'
                    }
                },
                {
                    id: 2,
                    name: 'Curri 2',
                    customer: 'Lorem ipsim',
                    price: '2 000 Kč',
                    created_at: '2010-10-10',
                    state: {
                        text: 'Pending'
                    }
                },
            ]"
        ></data-table>
    </div>

    <div class="flex leading-none -m-1">
        <a href="#" class="flex items-center justify-center w-12 h-12 bg-gray-100 text-primary-500 rounded-xl m-1">
            <svg class="w-3 stroke-current transform rotate-90" viewBox="0 0 12 7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <polyline fill="none" stroke-width="2" points="1 1 6 6 11 1"></polyline>
            </svg>
        </a>
        <a href="#" class="flex items-center justify-center w-12 h-12 bg-primary-500 text-white rounded-xl shadow-md m-1">1</a>
        <a href="#" class="flex items-center justify-center w-12 h-12 bg-gray-100 text-primary-500 rounded-xl m-1">2</a>
        <a href="#" class="flex items-center justify-center w-12 h-12 bg-gray-100 text-primary-500 rounded-xl m-1">3</a>
        <a href="#" class="flex items-center justify-center w-12 h-12 bg-gray-100 text-primary-500 rounded-xl m-1">4</a>
        <a href="#" class="flex items-center justify-center w-12 h-12 bg-gray-100 text-primary-500 rounded-xl m-1">5</a>
        <a href="#" class="flex items-center justify-center w-12 h-12 bg-gray-100 text-primary-500 rounded-xl m-1">
            <svg class="w-3 stroke-current transform -rotate-90" viewBox="0 0 12 7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <polyline fill="none" stroke-width="2" points="1 1 6 6 11 1"></polyline>
            </svg>
        </a>
    </div>
@endsection