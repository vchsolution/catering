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

            <div id="upload-image" class="mt-6 lg:mt-0 w-full lg:w-1/3 h-[500px] flex items-center justify-center p-6 border-2 border-dashed border-green-400 rounded-lg text-center bg-gray-100">
                <div id="upload-content" class="flex flex-col items-center text-center">
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
                <input type="file" id="file-input" accept="image/png, image/jpeg" class="hidden">
            </div>
        </div>
        <div class="mt-6 flex">
            <div class="bg-white rounded-lg w-full" id="component-ingredient">
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
                        <tbody class="bg-gray-100 divide-y divide-gray-200" id="table-body-ingredient">
                            <tr class="empty-row">
                                <td class="py-4 px-2 whitespace-nowrap text-right text-sm font-medium" colspan="13">
                                    <div class="w-full flex justify-center items-center p-2">
                                        <div>
                                            <span class="text-gray-600">No selection has been made yet</span>
                                            <button type="button" onclick="addRowIngredient()" class="mt-4 flex items-center px-4 py-2 border border-[#197953] text-[#197953] rounded-md mx-auto hover:bg-green-700 hover:text-white transition">
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
        <div class="mt-6 flex">
            <div class="bg-white rounded-lg w-full" id="component-complimentary">
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
                        <tbody class="bg-gray-100 divide-y divide-gray-200" id="table-body-complimentary">
                            <tr class="empty-row">
                                <td class="py-4 px-2 whitespace-nowrap text-right text-sm font-medium" colspan="13">
                                    <div class="w-full flex justify-center items-center p-2">
                                        <div>
                                            <span class="text-gray-600">No selection has been made yet</span>
                                            <button type="button" onclick="addRowComplimentary()" class="mt-4 flex items-center px-4 py-2 border border-[#197953] text-[#197953] rounded-md mx-auto hover:bg-green-700 hover:text-white transition">
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

                    <div class="flex flex-1">
                        <div class="p-4 flex-1 border-l border-r border-gray-300 text-center">
                            <p class="text-xs text-gray-500">Energi</p>
                            <div class="flex justify-center items-baseline mt-2 gap-1">
                                <span class="text-sm font-bold text-gray-800">0</span>
                                <span class="text-xs text-gray-500">kKal</span>
                            </div>
                        </div>

                        <div class="p-4 flex-1 border-r border-gray-300 text-center">
                            <p class="text-xs text-gray-500">Protein</p>
                            <div class="flex justify-center items-baseline mt-2 gap-1">
                                <span class="text-sm font-bold text-gray-800">0</span>
                                <span class="text-xs text-gray-500">gr</span>
                            </div>
                        </div>

                        <div class="p-4 flex-1 border-r border-gray-300 text-center">
                            <p class="text-xs text-gray-500">Carbo</p>
                            <div class="flex justify-center items-baseline mt-2 gap-1">
                                <span class="text-sm font-bold text-gray-800">0</span>
                                <span class="text-xs text-gray-500">gr</span>
                            </div>
                        </div>

                        <div class="p-4 flex-1 border-r border-gray-300 text-center">
                            <p class="text-xs text-gray-500">Fat</p>
                            <div class="flex justify-center items-baseline mt-2 gap-1">
                                <span class="text-sm font-bold text-gray-800">0</span>
                                <span class="text-xs text-gray-500">gr</span>
                            </div>
                        </div>

                        <div class="p-4 flex-1 border-r border-gray-300 text-center">
                            <p class="text-xs text-gray-500">Serat</p>
                            <div class="flex justify-center items-baseline mt-2 gap-1">
                                <span class="text-sm font-bold text-gray-800">0</span>
                                <span class="text-xs text-gray-500">gr</span>
                            </div>
                        </div>

                        <div class="p-4 flex-1 border-r border-gray-300 text-center">
                            <p class="text-xs text-gray-500">Natrium</p>
                            <div class="flex justify-center items-baseline mt-2 gap-1">
                                <span class="text-sm font-bold text-gray-800">0</span>
                                <span class="text-xs text-gray-500">mg</span>
                            </div>
                        </div>

                        <div class="p-4 flex-1 border-r border-gray-300 text-center">
                            <p class="text-xs text-gray-500">Kolesterol</p>
                            <div class="flex justify-center items-baseline mt-2 gap-1">
                                <span class="text-sm font-bold text-gray-800">0</span>
                                <span class="text-xs text-gray-500">mg</span>
                            </div>
                        </div>

                        <div class="p-4 flex-1 text-center">
                            <p class="text-xs text-gray-500">Gula</p>
                            <div class="flex justify-center items-baseline mt-2 gap-1">
                                <span class="text-sm font-bold text-gray-800">0</span>
                                <span class="text-xs text-gray-500">gr</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-between flex-wrap gap-y-4 bg-gray-100 border border-gray-300 rounded-lg">
                    <div class="p-6 h-full">
                        <h4 class="text-lg font-bold"> <i class="fa-solid fa-coins text-[#F16251] mr-4"></i></i>Food Cost</h4>
                    </div>
                    <div class="p-6 h-full text-center">
                        <h4 class="text-lg font-bold" id="total-cost">Rp 0 <span class="font-bold text-green-700 bg-green-100 rounded-full px-3 py-1 ml-2">Low</span></h4>
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

<?php $this->beginBlock('styles'); ?>
<style>
    
</style>
<?php $this->endBlock(); ?>

<?php $this->beginBlock('scripts'); ?>
<script>
    const tableBodyComplimentary = document.getElementById("table-body-complimentary");
    const componentComplimentary = document.getElementById("component-complimentary");
    const tableBodyIngredient = document.getElementById("table-body-ingredient");
    const componentIngredient = document.getElementById("component-ingredient");
    let ingredientRowCounter = 0;
    
    const items = [
        {
            name: "Bawang Putih",
            price: 12000,
            unit: "g",
            energi: 145.3,
            protein: 4.8,
            karbo: 26.5,
            lemak: 1.7,
            serat: 11.0,
            natrium: 160.5,
            kolesterol: 0.0,
            gula: 0.1,
        },
        {
            name: "Gula Pasir",
            price: 15000,
            unit: "g",
            energi: 387.0,
            protein: 0.0,
            karbo: 99.8,
            lemak: 0.0,
            serat: 0.0,
            natrium: 1.0,
            kolesterol: 0.0,
            gula: 99.8,
        },
        {
            name: "Bombai",
            price: 8000,
            unit: "g",
            energi: 40.0,
            protein: 1.1,
            karbo: 9.3,
            lemak: 0.1,
            serat: 1.2,
            natrium: 4.0,
            kolesterol: 0.0,
            gula: 4.7,
        },
        {
            name: "Daun Bawang",
            price: 7000,
            unit: "g",
            energi: 32.0,
            protein: 1.8,
            karbo: 7.3,
            lemak: 0.2,
            serat: 2.1,
            natrium: 5.0,
            kolesterol: 0.0,
            gula: 0.6,
        },
        {
            name: "Minyak Goreng",
            price: 25000,
            unit: "g",
            energi: 884.0,
            protein: 0.0,
            karbo: 0.0,
            lemak: 100.0,
            serat: 0.0,
            natrium: 0.0,
            kolesterol: 0.0,
            gula: 0.0,
        },
        {
            name: "Masako Ayam @1kg",
            price: 18000,
            unit: "g",
            energi: 375.0,
            protein: 10.0,
            karbo: 45.0,
            lemak: 15.0,
            serat: 2.0,
            natrium: 800.0,
            kolesterol: 0.0,
            gula: 5.0,
        },
        {
            name: "Wijen Putih",
            price: 14000,
            unit: "g",
            energi: 573.0,
            protein: 17.7,
            karbo: 23.0,
            lemak: 49.7,
            serat: 12.2,
            natrium: 11.0,
            kolesterol: 0.0,
            gula: 0.3,
        },
        {
            name: "Aida Bubuk @500gr",
            price: 22000,
            unit: "g",
            energi: 364.0,
            protein: 7.0,
            karbo: 76.0,
            lemak: 1.0,
            serat: 2.0,
            natrium: 0.0,
            kolesterol: 0.0,
            gula: 70.0,
        },
    ];

    function addRowComplimentary() {
        const emptyRow = tableBodyComplimentary.querySelector(".empty-row");
        if (emptyRow) {
            emptyRow.remove();
            tableBodyComplimentary.classList.remove("bg-gray-100");
            tableBodyComplimentary.classList.add("bg-white");
        }
    
        const tr = document.createElement("tr");
        const dropdownList = items.map(item => `<li>${item.name}</li>`).join("");
        tr.innerHTML = `
            <td class="py-4 px-2 whitespace-nowrap relative">
                <div class="custom-select-container">
                    <div class="select-box" data-dropdown="true">
                        <input type="text" />
                        <span class="dropdown-icon">
                            <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </span>
                    </div>
                    <ul class="dropdown-list">
                        ${dropdownList}
                    </ul>
                </div>
                </td>
                <td class="py-4 px-2 whitespace-nowrap">
                <div class="rounded-md border border-gray-300 p-2 focus-within:border-[#197953] focus-within:ring-2 focus-within:ring-emerald-400">
                    <input type="text" class="w-full outline-none sm:text-sm">
                </div>
                </td>
                <td class="py-4 px-2 whitespace-nowrap">
                <div class="rounded-md border border-gray-300 p-2 focus-within:border-[#197953] focus-within:ring-2 focus-within:ring-emerald-400">
                    <input type="text" class="w-full outline-none sm:text-sm">
                </div>
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
                <div class="rounded-md border border-gray-300 p-2 focus-within:border-[#197953] focus-within:ring-2 focus-within:ring-emerald-400">
                    <input type="text" class="w-full outline-none sm:text-sm">
                </div>
                </td>
                <td class="py-4 px-2 whitespace-nowrap text-right text-sm font-medium">
                <button type="button" onclick="deleteRowComplimentary(this)"  class="text-gray-400 hover:text-red-500">
                    <i class="fa-regular fa-trash-alt text-xl"></i>
                </button>
                </td>
        `;

        tableBodyComplimentary.appendChild(tr);
        const newSelectBox = tr.querySelector('.select-box[data-dropdown="true"]');
        if (newSelectBox) {
            initDropdown(newSelectBox);
        }

        if (!document.getElementById("add-complimentary")) {
            const div = document.createElement("div");
            div.id = "add-complimentary";
            div.className = "flex justify-end mt-4";
            div.innerHTML = `
                <button type="button" onclick="addRowComplimentary()" class="flex items-center px-4 py-2 border border-[#197953] text-[#197953] rounded-md hover:bg-green-700 hover:text-white transition">
                    <i class="fas fa-circle-plus mr-2"></i>Add
                </button>
            `;
            componentComplimentary.appendChild(div);
        }
    }

    function deleteRowComplimentary(btn) {
        const row = btn.closest("tr");
        row.remove();

        if (tableBodyComplimentary.children.length === 0) {
            tableBodyComplimentary.classList.remove("bg-white");
            tableBodyComplimentary.classList.add("bg-gray-100");

            const emptyRow = document.createElement("tr");
            emptyRow.classList.add("empty-row");
            emptyRow.innerHTML = `
                <td class="py-4 px-2 whitespace-nowrap text-right text-sm font-medium" colspan="13">
                    <div class="w-full flex justify-center items-center p-2">
                        <div>
                            <span class="text-gray-600">No selection has been made yet</span>
                            <button type="button" onclick="addRowComplimentary()" class="mt-4 flex items-center px-4 py-2 border border-[#197953] text-[#197953] rounded-md mx-auto hover:bg-green-700 hover:text-white transition">
                                <i class="fas fa-circle-plus mr-2"></i>
                                Add
                            </button>
                        </div>
                    </div>
                </td>
            `;
            tableBodyComplimentary.appendChild(emptyRow);
            const addDiv = componentComplimentary.querySelector("#add-complimentary");
            if (addDiv) addDiv.remove();
        }
    }

    function addRowIngredient() {
        const emptyRow = tableBodyIngredient.querySelector(".empty-row");
        if (emptyRow) {
            emptyRow.remove();
            tableBodyIngredient.classList.remove("bg-gray-100");
            tableBodyIngredient.classList.add("bg-white");
        }

        ingredientRowCounter++;
        const rowId = `ingredient-row-${ingredientRowCounter}`;
        const dropdownId = `dropdown-ingredient-${ingredientRowCounter}`;
    
        const tr = document.createElement("tr");
        tr.id = rowId;

        const dropdownList = items.map(item => `<li>${item.name}</li>`).join("");
        tr.innerHTML = `
            <td class="py-4 px-2 whitespace-nowrap relative">
                <div class="custom-select-container">
                    <div class="select-box" data-dropdown="true">
                        <input type="text" onblur="handleBlurIngredient(event, '${rowId}')" />
                        <span class="dropdown-icon">
                            <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </span>
                    </div>
                    <ul class="dropdown-list" id="${dropdownId}" onclick="selectItemIngredient(event, '${rowId}')">
                        ${dropdownList}
                    </ul>
                </div>
                </td>
                <td class="py-4 px-2 whitespace-nowrap">
                <div class="flex justify-between rounded-md border border-gray-300 p-2 focus-within:border-[#197953] focus-within:ring-2 focus-within:ring-emerald-400">
                    <input type="text" class="w-full outline-none sm:text-sm" oninput="this.value = this.value.replace(/[^0-9]/g, '')" onkeyup="calculatePriceIngredient(event, '${rowId}')" placeholder="0" disabled>
                    <span></span>
                </div>
                </td>
                <td class="py-4 px-2 whitespace-nowrap">
                <div class="rounded-md border border-gray-300 p-2 focus-within:border-[#197953] focus-within:ring-2 focus-within:ring-emerald-400">
                    <input type="text" class="w-full outline-none sm:text-sm" oninput="formatRupiah(this)" onkeyup="updateTotalCost()" placeholder="Rp 0" disabled>
                </div>
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
                <div class="multiple-select-container">
                <div class="relative">
            <!-- Main Input Container -->
            <div class="rounded-md border border-gray-300 p-2 focus-within:border-[#197953] focus-within:ring-2 focus-within:ring-emerald-400 bg-white min-h-[42px] flex flex-wrap gap-1 items-center cursor-text select-input-container">
                <!-- Selected Tags -->
                <div class="tags-container flex flex-wrap gap-1">
                    <!-- Tags akan muncul di sini -->
                </div>

                <!-- Input untuk mengetik -->
                <input
                        type="text"
                        class="main-input outline-none sm:text-sm flex-1 min-w-[120px] border-none p-0"
                        placeholder="Ketik untuk mencari kategori..."
                        autocomplete="off"
                >
            </div>

            <!-- Options Dropdown -->
            <div class="options-dropdown absolute top-full left-0 right-0 mt-1 bg-white border border-gray-300 rounded-md shadow-lg z-10 hidden max-h-48 overflow-y-auto">
                <div class="option-item p-2 hover:bg-[#197953] cursor-pointer border-gray-100 text-sm" data-value="elektronik">
                    Elektronik
                </div>
                <div class="option-item p-2 hover:bg-[#197953] cursor-pointer border-gray-100 text-sm" data-value="fashion">
                    Fashion
                </div>
                <div class="option-item p-2 hover:bg-[#197953] cursor-pointer border-gray-100 text-sm" data-value="makanan">
                    Makanan & Minuman
                </div>
                <div class="option-item p-2 hover:bg-[#197953] cursor-pointer border-gray-100 text-sm" data-value="olahraga">
                    Olahraga
                </div>
                <div class="option-item p-2 hover:bg-[#197953] cursor-pointer text-sm" data-value="kesehatan">
                    Kesehatan & Kecantikan
                </div>
            </div>
        </div>
    </div>
                </td>
                <td class="py-4 px-2 whitespace-nowrap text-right text-sm font-medium">
                <button type="button" onclick="deleteRowIngredient(this)"  class="text-gray-400 hover:text-red-500">
                    <i class="fa-regular fa-trash-alt text-xl"></i>
                </button>
                </td>
        `;

        tableBodyIngredient.appendChild(tr);
        const newSelectBox = tr.querySelector('.select-box[data-dropdown="true"]');
        const newMultipleSelect = tr.querySelector('.multiple-select-container');
        if (newSelectBox) {
            initDropdown(newSelectBox);
            initMultipleSelect(newMultipleSelect)
        }

        if (!document.getElementById("add-ingredient")) {
            const div = document.createElement("div");
            div.id = "add-ingredient";
            div.className = "flex justify-end mt-4";
            div.innerHTML = `
                <button type="button" onclick="addRowIngredient()" class="flex items-center px-4 py-2 border border-[#197953] text-[#197953] rounded-md hover:bg-green-700 hover:text-white transition">
                    <i class="fas fa-circle-plus mr-2"></i>Add
                </button>
            `;
            componentIngredient.appendChild(div);
        }
    }

    function deleteRowIngredient(btn) {
        const row = btn.closest("tr");
        row.remove();
        
        if (tableBodyIngredient.children.length === 0) {
            tableBodyIngredient.classList.remove("bg-white");
            tableBodyIngredient.classList.add("bg-gray-100");

            const emptyRow = document.createElement("tr");
            emptyRow.classList.add("empty-row");
            emptyRow.innerHTML = `
                <td class="py-4 px-2 whitespace-nowrap text-right text-sm font-medium" colspan="13">
                    <div class="w-full flex justify-center items-center p-2">
                        <div>
                            <span class="text-gray-600">No selection has been made yet</span>
                            <button type="button" onclick="addRowIngredient()" class="mt-4 flex items-center px-4 py-2 border border-[#197953] text-[#197953] rounded-md mx-auto hover:bg-green-700 hover:text-white transition">
                                <i class="fas fa-circle-plus mr-2"></i>
                                Add
                            </button>
                        </div>
                    </div>
                </td>
            `;
            tableBodyIngredient.appendChild(emptyRow);
            const addDiv = componentIngredient.querySelector("#add-ingredient");
            if (addDiv) addDiv.remove();
            ingredientRowCounter = 0;
        }

        updateTotalCost();
    }

    function selectItemIngredient(event, rowId) {
        const li = event.target.closest("li");
        if (!li) return;

        const selectedItemName = li.textContent;
        const selectedItem = items.find(item => item.name === selectedItemName);
        if (!selectedItem) return;

        const row = document.getElementById(rowId);
        if (!row) return;

        const cells = row.getElementsByTagName("td");
        if (cells.length < 13) return;
        
        cells[1].querySelector("input").placeholder = 0;
        cells[1].querySelector("input").disabled = false;
        cells[1].querySelector("span").textContent = selectedItem.unit;
        cells[2].querySelector("input").disabled = false;
        cells[3].textContent = 0;
        cells[4].textContent = 0;
        cells[5].textContent = 0;
        cells[6].textContent = 0;
        cells[7].textContent = 0;
        cells[8].textContent = 0;
        cells[9].textContent = 0;
        cells[10].textContent = 0;
        cells[11].querySelector("input").value = ""; 

        const dropdownList = row.querySelector(".dropdown-list");
        if (dropdownList) {
            dropdownList.style.display = "none";
        }
    }

    function handleBlurIngredient(event, rowId) {
        setTimeout(() => {
            const value = event.target.value;
            if (value === '') {
                const row = document.getElementById(rowId);
                if (!row) return;
    
                const cells = row.getElementsByTagName("td");
                if (cells.length < 13) return;
    
                cells[1].querySelector("input").value = '';
                cells[1].querySelector("input").disabled = true;
                cells[2].querySelector("input").value = '';
                cells[2].querySelector("input").disabled = true;
                for (let i = 3; i <= 10; i++) {
                    cells[i].textContent = '-';
                }
                cells[11].querySelector("input").value = '';
            }
        }, 0);
    }

    function calculatePriceIngredient(event, rowId) {
        const input = event.target;
        const row = document.getElementById(rowId);
        if (!row) return;

        const cells = row.getElementsByTagName("td");
        if (cells.length < 13) return;

        const quantity = parseFloat(input.value.replace(/[^0-9]/g, ''));
        if (isNaN(quantity)) {
            cells[2].querySelector('input').value = '';
            cells[3].textContent = 0;
            cells[4].textContent = 0;
            cells[5].textContent = 0;
            cells[6].textContent = 0;
            cells[7].textContent = 0;
            cells[8].textContent = 0;
            cells[9].textContent = 0;
            cells[10].textContent = 0;

            updateNutrition();
            updateTotalCost();
            return
        };


        const itemName = cells[0].querySelector('input').value;
        const selectedItem = items.find(item => item.name === itemName);
        if (!selectedItem) return;

        const pricePerUnit = selectedItem.price;
        const totalPrice = pricePerUnit * quantity; 
        cells[2].querySelector('input').value = `Rp ${new Intl.NumberFormat('id-ID').format(totalPrice)}`;

        const energi = selectedItem.energi * quantity;
        const protein = selectedItem.protein * quantity;
        const karbo = selectedItem.karbo * quantity;
        const lemak = selectedItem.lemak * quantity;
        const serat = selectedItem.serat * quantity;
        const natrium = selectedItem.natrium * quantity;
        const kolesterol = selectedItem.kolesterol * quantity;
        const gula = selectedItem.gula * quantity;

        cells[3].textContent = energi.toFixed(1);
        cells[4].textContent = protein.toFixed(1);
        cells[5].textContent = karbo.toFixed(1);
        cells[6].textContent = lemak.toFixed(1);
        cells[7].textContent = serat.toFixed(1);
        cells[8].textContent = natrium.toFixed(1);
        cells[9].textContent = kolesterol.toFixed(1);
        cells[10].textContent = gula.toFixed(1);

        updateNutrition();
        updateTotalCost();
    }

    function formatRupiah(input) {
        let value = input.value.replace(/[^0-9]/g, '');
    
        if (value) {
            // Format ribuan
            value = new Intl.NumberFormat('id-ID').format(value);
            input.value = `Rp ${value}`;
        } else {
            input.value = '';
        }
    }

    function updateTotalCost() {
        let totalCost = 0;

        // ambil semua row <tr>
        tableBodyIngredient.querySelectorAll("tr").forEach(row => {
            const cells = row.getElementsByTagName("td");
            if (cells.length >= 3) {
                const priceInput = cells[2].querySelector("input");
                if (priceInput && priceInput.value) {
                    const number = parseFloat(priceInput.value.replace(/[^0-9]/g, '')) || 0;
                    totalCost += number;
                }
            }
        });

        // update ke element
        const totalCostElement = document.getElementById("total-cost");
        if (totalCostElement) {
            totalCostElement.innerHTML = `Rp ${new Intl.NumberFormat('id-ID').format(totalCost)} <span class="font-bold text-green-700 bg-green-100 rounded-full px-3 py-1 ml-2">Low</span>`;
        }
    }

    function updateNutrition() {
        let totalEnergi = 0,
            totalProtein = 0,
            totalKarbo = 0,
            totalLemak = 0,
            totalSerat = 0,
            totalNatrium = 0,
            totalKolesterol = 0,
            totalGula = 0;

        tableBodyIngredient.querySelectorAll("tr").forEach(row => {
            const cells = row.getElementsByTagName("td");
            if (cells.length >= 11) {
                totalEnergi     += parseFloat(cells[3].textContent) || 0;
                totalProtein    += parseFloat(cells[4].textContent) || 0;
                totalKarbo      += parseFloat(cells[5].textContent) || 0;
                totalLemak      += parseFloat(cells[6].textContent) || 0;
                totalSerat      += parseFloat(cells[7].textContent) || 0;
                totalNatrium    += parseFloat(cells[8].textContent) || 0;
                totalKolesterol += parseFloat(cells[9].textContent) || 0;
                totalGula       += parseFloat(cells[10].textContent) || 0;
            }
        });

        const nutritionBox = document.querySelector(".flex .flex-1");
        if (nutritionBox) {
            const valueSpans = nutritionBox.querySelectorAll("div.flex span:first-child"); // span pertama di tiap flex = angka
            if (valueSpans.length >= 8) {
                valueSpans[0].textContent = totalEnergi.toFixed(1);
                valueSpans[1].textContent = totalProtein.toFixed(1);
                valueSpans[2].textContent = totalKarbo.toFixed(1);
                valueSpans[3].textContent = totalLemak.toFixed(1);
                valueSpans[4].textContent = totalSerat.toFixed(1);
                valueSpans[5].textContent = totalNatrium.toFixed(1);
                valueSpans[6].textContent = totalKolesterol.toFixed(1);
                valueSpans[7].textContent = totalGula.toFixed(1);
            }
        }
    }

    const uploadBox = document.getElementById("upload-image");
    const fileInput = document.getElementById("file-input");
    const uploadContent = document.getElementById("upload-content");

    uploadBox.addEventListener("click", () => fileInput.click());
    
    fileInput.addEventListener("change", (event) => {
        const file = event.target.files[0];
        if (!file) return;
    
        if (file.size > 5 * 1024 * 1024) { 
            alert("Ukuran file maksimal 5MB");
            fileInput.value = "";
            return;
        }
    
        if (!["image/jpeg", "image/png"].includes(file.type)) {
            alert("Format harus JPG atau PNG");
            fileInput.value = "";
            return;
        }
    
        uploadBox.innerHTML = "";
        const wrapper = document.createElement("div");
        wrapper.className = "w-full h-full flex items-center justify-center";
    
        const preview = document.createElement("img");
        preview.src = URL.createObjectURL(file);
        preview.className = "object-cover rounded-lg";
        preview.style.aspectRatio = "3 / 4";
        preview.style.maxHeight = "100%";
        preview.style.maxWidth = "100%";
    
        wrapper.appendChild(preview);
        uploadBox.appendChild(wrapper);
    });
</script>
<?php $this->endBlock(); ?>