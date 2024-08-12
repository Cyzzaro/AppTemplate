@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6">
        <!-- Título de la Sección -->
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Financial Overview</h2>

        <!-- Grid de Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Card: Ingresos -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <div class="flex items-center">
                    <div class="bg-green-100 text-green-500 p-3 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.65 0-3-1.35-3-3s1.35-3 3-3 3 1.35 3 3-1.35 3-3 3zm0 2c2.97 0 5.79 1.17 7.91 3.09C21.14 15.19 22 17.24 22 19.43v2.07A2.5 2.5 0 0119.5 24H4.5A2.5 2.5 0 012 21.5v-2.07c0-2.19.86-4.24 2.09-5.94C6.21 11.17 9.03 10 12 10z" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-gray-600">Revenue</p>
                        <p class="text-xl font-semibold">$15,000</p>
                    </div>
                </div>
            </div>

            <!-- Card: Gastos -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <div class="flex items-center">
                    <div class="bg-red-100 text-red-500 p-3 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20.69 6.83a1.72 1.72 0 00-1.07-.47H4.38a1.72 1.72 0 00-1.07.47L2 8v12.29A2.73 2.73 0 004.73 23h14.54A2.73 2.73 0 0022 20.29V8z" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-gray-600">Expenses</p>
                        <p class="text-xl font-semibold">$9,500</p>
                    </div>
                </div>
            </div>

            <!-- Card: Ganancias Netas -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <div class="flex items-center">
                    <div class="bg-blue-100 text-blue-500 p-3 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 10h7a1 1 0 011 1v7h6a1 1 0 011 1v1H3v-9z" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-gray-600">Net Profit</p>
                        <p class="text-xl font-semibold">$5,500</p>
                    </div>
                </div>
            </div>

            <!-- Card: Resumen de Cuentas -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <div class="flex items-center">
                    <div class="bg-yellow-100 text-yellow-500 p-3 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 12l-2-2m0 0l2-2m-2 2h12.5m0 4H8m5 4l-2-2m0 0l2-2m-2 2h-6" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-gray-600">Account Summary</p>
                        <p class="text-xl font-semibold">$24,000</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
