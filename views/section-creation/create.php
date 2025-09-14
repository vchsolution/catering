<?php

$this->title = 'Section Creation';
?>

<div class="mx-auto px-6 py-4">
    <h1 class="text-2xl font-bold"><i class="fa-solid fa-arrow-left mr-2"></i> Add Section Creation</h1>
</div>
<div class="mx-auto px-6 py-4">
    <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex flex-col lg:flex-row gap-6">
            <div class="w-full lg:w-2/3">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 mb-4">
                    <div>
                        <label for="name" class="block text-sm font-bold text-gray-700">Name</label>
                        <input type="text" id="name"
                            class="mt-1 block w-full rounded-md shadow-sm p-2 border border-gray-400 focus:border-green-600 focus:ring-green-600 sm:text-sm">
                    </div>
                    <div>
                        <label for="alias" class="block text-sm font-bold text-gray-700">Alias</label>
                        <input type="text" id="alias"
                            class="mt-1 block w-full rounded-md shadow-sm p-2 border border-gray-400 focus:border-green-600 focus:ring-green-600 sm:text-sm">
                    </div>
                </div>

                <div>
                    <label for="cuisine" class="block text-sm font-bold text-gray-700">Cuisine</label>
                    <input type="text" id="cuisine"
                        class="mt-1 block w-full rounded-md shadow-sm p-2 border border-gray-400 focus:border-green-600 focus:ring-green-600 sm:text-sm">
                </div>

                <hr class="my-6"/>

                <div class="mb-8">
                    <label class="block text-sm font-bold text-gray-700">Sekat</label>
                    <div class="mt-4 grid grid-cols-3 gap-x-8 gap-y-4">
                        <div class="flex items-center">
                            <input id="karbo" name="seksi" type="radio"
                                class="focus:ring-green-600 h-4 w-4 text-green-600 border-gray-300">
                            <label for="karbo" class="ml-2 block text-sm font-medium text-gray-700">Karbo</label>
                        </div>
                        <div class="flex items-center">
                            <input id="protein" name="seksi" type="radio"
                                class="focus:ring-green-600 h-4 w-4 text-green-600 border-gray-300">
                            <label for="protein" class="ml-2 block text-sm font-medium text-gray-700">Protein</label>
                        </div>
                        <div class="flex items-center">
                            <input id="add-on" name="seksi" type="radio"
                                class="focus:ring-green-600 h-4 w-4 text-green-600 border-gray-300">
                            <label for="add-on" class="ml-2 block text-sm font-medium text-gray-700">Add-on</label>
                        </div>
                        <div class="flex items-center">
                            <input id="veggie" name="seksi" type="radio"
                                class="focus:ring-green-600 h-4 w-4 text-green-600 border-gray-300">
                            <label for="veggie" class="ml-2 block text-sm font-medium text-gray-700">Veggie</label>
                        </div>
                        <div class="flex items-center">
                            <input id="extra" name="seksi" type="radio"
                                class="focus:ring-green-600 h-4 w-4 text-green-600 border-gray-300">
                            <label for="extra" class="ml-2 block text-sm font-medium text-gray-700">Extra</label>
                        </div>
                        <div class="flex items-center">
                            <input id="tanpa-karbo-sayur" name="seksi" type="radio"
                                class="focus:ring-green-600 h-4 w-4 text-green-600 border-gray-300">
                            <label for="tanpa-karbo-sayur" class="ml-2 block text-sm font-medium text-gray-700">Tanpa
                                Karbo / Sayur</label>
                        </div>
                    </div>
                </div>

                <hr class="my-6"/>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div>
                        <label for="pemrosesan" class="block text-sm font-bold text-gray-700">Pemrosesan / Potongan
                            Bahan</label>
                        <input type="text" id="name"
                            class="mt-1 block w-full rounded-md shadow-sm p-2 border border-gray-400 focus:border-green-600 focus:ring-green-600 sm:text-sm">

                    </div>
                    <div>
                        <label for="or-matang" class="block text-sm font-bold text-gray-700">Gr Matang</label>
                        <input type="text" id="name"
                            class="mt-1 block w-full rounded-md shadow-sm p-2 border border-gray-400 focus:border-green-600 focus:ring-green-600 sm:text-sm">

                    </div>
                    <div>
                        <label for="rasa" class="block text-sm font-bold text-gray-700">Rasa</label>
                        <input type="text" id="name"
                            class="mt-1 block w-full rounded-md shadow-sm p-2 border border-gray-400 focus:border-green-600 focus:ring-green-600 sm:text-sm">

                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div>
                        <label for="topping" class="block text-sm font-bold text-gray-700">Topping</label>
                        <input type="text" id="name"
                            class="mt-1 block w-full rounded-md shadow-sm p-2 border border-gray-400 focus:border-green-600 focus:ring-green-600 sm:text-sm">
                    </div>
                    <div>
                        <label for="add-on-input" class="block text-sm font-bold text-gray-700">Add On</label>
                        <input type="text" id="add-on-input"
                            class="mt-1 block w-full rounded-md shadow-sm p-2 border border-gray-400 focus:border-green-600 focus:ring-green-600 sm:text-sm">
                    </div>
                    <div>
                        <label for="garnish" class="block text-sm font-bold text-gray-700">Garnish</label>
                        <input type="text" id="name"
                            class="mt-1 block w-full rounded-md shadow-sm p-2 border border-gray-400 focus:border-green-600 focus:ring-green-600 sm:text-sm">
                    </div>
                    <div>
                        <label for="metode" class="block text-sm font-bold text-gray-700">Metode</label>
                        <input type="text" id="name"
                            class="mt-1 block w-full rounded-md shadow-sm p-2 border border-gray-400 focus:border-green-600 focus:ring-green-600 sm:text-sm">
                    </div>
                    <div class="col-span-2">
                        <label for="cooking-method" class="block text-sm font-bold text-gray-700">Cooking Method</label>
                        <textarea id="cooking-method" rows="3"
                                class="mt-1 block w-full h-24 rounded-md border border-gray-400 shadow-sm focus:border-green-600 focus:ring-green-600 sm:text-sm"></textarea>
                    </div>
                </div>
            </div>

            <div class="mt-6 lg:mt-0 w-full lg:w-1/3 h-[500px] flex items-center justify-center p-6 border-2 border-dashed border-green-400 rounded-lg text-center bg-gray-100">
                <div class="flex flex-col items-center text-center">
                    <span>
                        <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_2_9022)">
                                <path d="M2.875 11.4993C2.8748 11.279 2.92524 11.0617 3.0224 10.864C3.11956 10.6663 3.26086 10.4936 3.43538 10.3592C3.60991 10.2247 3.81298 10.1322 4.02893 10.0888C4.24489 10.0453 4.46793 10.0521 4.68086 10.1085C7.78945 10.9405 14.6337 12.9368 23 12.9368C31.3663 12.9368 38.2105 10.9405 41.3281 10.1103C41.5403 10.0556 41.7622 10.05 41.9769 10.0941C42.1915 10.1382 42.3933 10.2308 42.5667 10.3649C42.74 10.4989 42.8805 10.6708 42.9773 10.8674C43.074 11.064 43.1246 11.2802 43.125 11.4993V34.4993C43.125 34.7197 43.0743 34.937 42.977 35.1347C42.8796 35.3323 42.7381 35.5049 42.5634 35.6391C42.3886 35.7734 42.1854 35.8657 41.9694 35.9089C41.7533 35.9521 41.5302 35.945 41.3173 35.8883C38.207 35.0528 31.3645 33.0618 23 33.0618C14.6355 33.0618 7.79305 35.0528 4.68266 35.8865C4.46991 35.9432 4.24698 35.9503 4.03106 35.9072C3.81515 35.8641 3.61203 35.7719 3.43736 35.6379C3.26269 35.5039 3.12114 35.3315 3.02364 35.1341C2.92614 34.9367 2.87528 34.7195 2.875 34.4993V11.4993Z" stroke="#197953" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M36.6562 21.5625C37.8471 21.5625 38.8125 20.5971 38.8125 19.4062C38.8125 18.2154 37.8471 17.25 36.6562 17.25C35.4654 17.25 34.5 18.2154 34.5 19.4062C34.5 20.5971 35.4654 21.5625 36.6562 21.5625Z" fill="#197953"/><path d="M2.875 28.8732L12.6392 19.1071C12.7727 18.9735 12.9313 18.8675 13.1058 18.7951C13.2803 18.7228 13.4673 18.6855 13.6562 18.6855C13.8452 18.6855 14.0322 18.7228 14.2067 18.7951C14.3812 18.8675 14.5398 18.9735 14.6733 19.1071L28.9512 33.3851" stroke="#197953" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M23.5947 28.0315L28.2109 23.4207C28.4805 23.1513 28.8459 23 29.227 23C29.6081 23 29.9736 23.1513 30.2432 23.4207L42.5068 35.6844" stroke="#197953" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_2_9022">
                                    <rect width="46" height="46" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </span>
                    <p class="text-gray-500 font-bold">Upload Image</p>
                    <p class="text-xs text-gray-400 mt-2">Format: jpg / png
                        <br>ratio 3:4
                        <br>(maks. 5 mb)
                    </p>
                </div>
            </div>
        </div>
        <div class="mt-6 flex">
            <div class="bg-white rounded-lg w-full">
                <h3 class="text-lg font-semibold text-gray-800 mb-8">Main Ingredient</h3>
                
                <div class="overflow-x-auto">
                    <table class="min-w-full">
                        <thead class="bg-white divide-y border-b border-gray-600">
                            <tr class="font-bold text-gray-500">
                                <th scope="col" class="py-3 px-2 text-left text-xs tracking-wider w-72">
                                    <div class="flex items-center justify-between">
                                        Item Name
                                        <i class="fas fa-sort ml-1"></i>
                                    </div>
                                </th>
                                <th scope="col" class="py-3 px-2 text-center text-xs tracking-wider w-28">
                                    <div class="flex items-center justify-between">
                                        Mentah
                                        <i class="fas fa-sort ml-1"></i>
                                    </div>
                                </th>
                                <th scope="col" class="py-3 px-2 text-center text-xs tracking-wider w-36">
                                    <div class="flex items-center justify-between">
                                        Harga
                                        <i class="fas fa-sort ml-1"></i>
                                    </div>
                                </th>
                                <th scope="col" class="py-3 px-2 text-center text-xs tracking-wider">
                                    <div class="flex items-center justify-between">
                                        Energi (kkal)
                                    </div>
                                </th>
                                <th scope="col" class="py-3 px-2 text-center text-xs tracking-wider">
                                    <div class="flex items-center justify-between">
                                        Protein (gr)
                                    </div>
                                </th>
                                <th scope="col" class="py-3 px-2 text-center text-xs tracking-wider">
                                    <div class="flex items-center justify-between">
                                        Karbo (gr)
                                    </div>
                                </th>
                                <th scope="col" class="py-3 px-2 text-center text-xs tracking-wider">
                                    <div class="flex items-center justify-between">
                                        Lemak (gr)
                                    </div>
                                </th>
                                <th scope="col" class="py-3 px-2 text-center text-xs tracking-wider">
                                    <div class="flex items-center justify-between">
                                        Serat (gr)
                                    </div>
                                </th>
                                <th scope="col" class="py-3 px-2 text-center text-xs tracking-wider">
                                    <div class="flex items-center justify-between">
                                        Natrium (mg)
                                    </div>
                                </th>
                                <th scope="col" class="py-3 px-2 text-center text-xs tracking-wider">
                                    <div class="flex items-center justify-between">
                                        Kolesterol (mg)
                                    </div>
                                </th>
                                <th scope="col" class="py-3 px-2 text-center text-xs tracking-wider">
                                    <div class="flex items-center justify-between">
                                        Gula (gr)
                                    </div>
                                </th>
                                <th scope="col" class="py-3 px-2 text-left text-xs tracking-wider w-96">
                                    <div class="flex items-center justify-center">
                                        Kandungan
                                        <i class="fas fa-sort ml-3"></i>
                                    </div>
                                </th>
                                <th scope="col" class="relative py-3 px-2">
                                    <span class="sr-only">Delete</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="py-4 px-2 whitespace-nowrap relative">
                                    <select class="w-full rounded-md shadow-sm p-2 pr-8 border border-gray-300 focus:border-green-600 focus:ring-green-600 sm:text-sm appearance-none">
                                        <option>-</option>
                                        <option>Bawang Putih</option>
                                        <option>Gula Pasir</option>
                                        <option>Bombai</option>
                                        <option>Daun Bawang</option>
                                        <option>Minyak Goreng</option>
                                        <option>Masako Ayam @1kg</option>
                                        <option>Wijen Putih</option>
                                        <option>Aida Bubuk @500gr</option>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-2 flex items-center mr-2">
                                        <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </div>
                                </td>
                                <td class="py-4 px-2 whitespace-nowrap">
                                    <input type="text" class="w-full rounded-md shadow-sm p-2 border border-gray-300 focus:border-green-600 focus:ring-green-600 sm:text-sm">
                                </td>
                                <td class="py-4 px-2 whitespace-nowrap">
                                    <input type="text" class="w-full rounded-md shadow-sm p-2 border border-gray-300 focus:border-green-600 focus:ring-green-600 sm:text-sm">
                                </td>
                                <td class="py-4 px-2 whitespace-nowrap text-center text-gray-500">-</td>
                                <td class="py-4 px-2 whitespace-nowrap text-center text-gray-500">-</td>
                                <td class="py-4 px-2 whitespace-nowrap text-center text-gray-500">-</td>
                                <td class="py-4 px-2 whitespace-nowrap text-center text-gray-500">-</td>
                                <td class="py-4 px-2 whitespace-nowrap text-center text-gray-500">-</td>
                                <td class="py-4 px-2 whitespace-nowrap text-center text-gray-500">-</td>
                                <td class="py-4 px-2 whitespace-nowrap text-center text-gray-500">-</td>
                                <td class="py-4 px-2 whitespace-nowrap text-center text-gray-500">-</td>
                                <td class="py-4 px-2 whitespace-nowrap">
                                    <input type="text" class="w-full rounded-md shadow-sm p-2 border border-gray-300 focus:border-green-600 focus:ring-green-600 sm:text-sm">
                                </td>
                                <td class="py-4 px-2 whitespace-nowrap text-right text-sm font-medium">
                                    <button type="button" class="text-gray-400 hover:text-red-500">
                                        <i class="fa-regular fa-trash-alt text-xl"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="flex justify-end mt-4">
                    <button type="button" class="flex items-center px-4 py-2 border border-[#197953] text-[#197953] rounded-md hover:bg-green-700 hover:text-white transition">
                        <i class="fas fa-circle-plus mr-2"></i>
                        Add
                    </button>
                </div>
            </div>
        </div>
        <div class="mt-6 flex">
            <div class="bg-white rounded-lg w-full">
                <h3 class="text-lg font-semibold text-gray-800 mb-8">Complimentary</h3>
                
                <div class="overflow-x-auto">
                    <table class="min-w-full">
                        <thead class="bg-white divide-y border-b border-gray-600">
                            <tr class="font-bold text-gray-500">
                                <th scope="col" class="py-3 px-2 text-left text-xs tracking-wider w-72">
                                    <div class="flex items-center justify-between">
                                        Item Name
                                        <i class="fas fa-sort ml-1"></i>
                                    </div>
                                </th>
                                <th scope="col" class="py-3 px-2 text-center text-xs tracking-wider w-28">
                                    <div class="flex items-center justify-between">
                                        Mentah
                                        <i class="fas fa-sort ml-1"></i>
                                    </div>
                                </th>
                                <th scope="col" class="py-3 px-2 text-center text-xs tracking-wider w-36">
                                    <div class="flex items-center justify-between">
                                        Harga
                                        <i class="fas fa-sort ml-1"></i>
                                    </div>
                                </th>
                                <th scope="col" class="py-3 px-2 text-center text-xs tracking-wider">
                                    <div class="flex items-center justify-between">
                                        Energi (kkal)
                                    </div>
                                </th>
                                <th scope="col" class="py-3 px-2 text-center text-xs tracking-wider">
                                    <div class="flex items-center justify-between">
                                        Protein (gr)
                                    </div>
                                </th>
                                <th scope="col" class="py-3 px-2 text-center text-xs tracking-wider">
                                    <div class="flex items-center justify-between">
                                        Karbo (gr)
                                    </div>
                                </th>
                                <th scope="col" class="py-3 px-2 text-center text-xs tracking-wider">
                                    <div class="flex items-center justify-between">
                                        Lemak (gr)
                                    </div>
                                </th>
                                <th scope="col" class="py-3 px-2 text-center text-xs tracking-wider">
                                    <div class="flex items-center justify-between">
                                        Serat (gr)
                                    </div>
                                </th>
                                <th scope="col" class="py-3 px-2 text-center text-xs tracking-wider">
                                    <div class="flex items-center justify-between">
                                        Natrium (mg)
                                    </div>
                                </th>
                                <th scope="col" class="py-3 px-2 text-center text-xs tracking-wider">
                                    <div class="flex items-center justify-between">
                                        Kolesterol (mg)
                                    </div>
                                </th>
                                <th scope="col" class="py-3 px-2 text-center text-xs tracking-wider">
                                    <div class="flex items-center justify-between">
                                        Gula (gr)
                                    </div>
                                </th>
                                <th scope="col" class="py-3 px-2 text-left text-xs tracking-wider w-96">
                                    <div class="flex items-center justify-center">
                                        Kandungan
                                        <i class="fas fa-sort ml-3"></i>
                                    </div>
                                </th>
                                <th scope="col" class="relative py-3 px-2">
                                    <span class="sr-only">Delete</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-gray-100 divide-y divide-gray-200 ">
                            <tr>
                                <td class="py-4 px-2 whitespace-nowrap text-right text-sm font-medium" colspan="13">
                                    <div class="w-full flex justify-center items-center p-2">
                                        <div>
                                            <span class="text-gray-600">No selection has been made yet</span>
                                            <button type="button" class="mt-4 flex items-center px-4 py-2 border border-[#197953] text-[#197953] rounded-md mx-auto hover:bg-green-700 hover:text-white transition">
                                                <i class="fas fa-circle-plus mr-2"></i>
                                                Add
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="mt-10">
            <div class="flex items-center justify-between flex-wrap gap-4">
                <div class="flex items-center flex-wrap gap-y-4 bg-gray-100 border border-gray-300 rounded-lg">
                    <div class="p-4 w-96 h-full">
                        <h4 class="text-lg font-bold"> <i class="fa-solid fa-flask text-[#F16251] mr-4"></i>Nutrition</h4>
                    </div>
                    
                    <div class="p-4 w-24 border-r border-l border-gray-300 h-full text-center">
                        <p class="text-xs text-gray-500">Energi</p>
                        <p class="text-sm font-bold text-gray-800 mt-2">0 kKal</p>
                    </div>
                    <div class="p-4 w-24 border-r border-gray-300 h-full text-center">
                        <p class="text-xs text-gray-500">Protein</p>
                        <p class="text-sm font-bold text-gray-800 mt-2">0 gr</p>
                    </div>
                    <div class="p-4 w-24 border-r border-gray-300 h-full text-center">
                        <p class="text-xs text-gray-500">Carbo</p>
                        <p class="text-sm font-bold text-gray-800 mt-2">0 gr</p>
                    </div>
                    <div class="p-4 w-24 border-r border-gray-300 h-full text-center">
                        <p class="text-xs text-gray-500">Fat</p>
                        <p class="text-sm font-bold text-gray-800 mt-2">0 gr</p>
                    </div>
                    <div class="p-4 w-24 border-r border-gray-300 h-full text-center">
                        <p class="text-xs text-gray-500">Serat</p>
                        <p class="text-sm font-bold text-gray-800 mt-2">0 gr</p>
                    </div>
                    <div class="p-4 w-24 border-r border-gray-300 h-full text-center">
                        <p class="text-xs text-gray-500">Natrium</p>
                        <p class="text-sm font-bold text-gray-800 mt-2">0 gr</p>
                    </div>
                    <div class="p-4 w-24 border-r border-gray-300 h-full text-center">
                        <p class="text-xs text-gray-500">Kolesterol</p>
                        <p class="text-sm font-bold text-gray-800 mt-2">0 gr</p>
                    </div>
                    <div class="p-4 w-24 border-gray-300 h-full text-center">
                        <p class="text-xs text-gray-500">Gula</p>
                        <p class="text-sm font-bold text-gray-800 mt-2">0 gr</p>
                    </div>
                    
                </div>

                <div class="flex items-center flex-wrap gap-y-4 bg-gray-100 border border-gray-300 rounded-lg">
                    <div class="p-6 w-80 h-full">
                        <h4 class="text-lg font-bold"> <i class="fa-solid fa-coins text-[#F16251] mr-4"></i></i>Food Cost</h4>
                    </div>
                    <div class="p-6 w-40 h-full text-center">
                        <h4 class="text-lg font-bold">Rp 0 <span class="font-bold text-green-700 bg-green-100 rounded-full px-3 py-1 ml-2">Low</span></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex mt-10 w-full justify-end">
            <button type="button" class="px-6 py-2 font-bold rounded-md border border-gray-300 hover:bg-gray-400 transition mr-4">Cancel</button>
            <button type="button" class="px-6 py-2 bg-[#F16251] text-white font-bold rounded-md hover:bg-green-800 transition">Save</button>
        </div>
    </div>
</div>