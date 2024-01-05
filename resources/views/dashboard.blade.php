<x-app-layout>
    <main>
        <div class="px-4 pt-6">
            <div class="grid w-full grid-cols-1 gap-4 mt-4 xl:grid-cols-2 2xl:grid-cols-3">
                <div
                    class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <div class="w-full">
                        <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Total Orders</h3>
                        <span
                            class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">0</span>
                    </div>
                </div>
                <div
                    class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <div class="w-full">
                        <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Total Income</h3>
                        <span
                            class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">Rs 0.00</span>
                        <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400">
                    </div>
                </div>
                <div
                    class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <div class="w-full">
                        <h3 class="mb-2 text-base font-normal text-gray-500 dark:text-gray-400">Orders By Catergories</h3>
                        <div class="flex items-center mb-2">
                            <div class="w-16 text-sm font-medium dark:text-white">Logo</div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-primary-600 h-2.5 rounded-full dark:bg-primary-500" style="width: 18%">
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center mb-2">
                            <div class="w-16 text-sm font-medium dark:text-white">Web</div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-primary-600 h-2.5 rounded-full dark:bg-primary-500" style="width: 15%">
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center mb-2">
                            <div class="w-16 text-sm font-medium dark:text-white">Social</div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-primary-600 h-2.5 rounded-full dark:bg-primary-500" style="width: 60%">
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center mb-2">
                            <div class="w-16 text-sm font-medium dark:text-white">Flyer</div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-primary-600 h-2.5 rounded-full dark:bg-primary-500" style="width: 30%">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="traffic-channels-chart" class="w-full"></div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
