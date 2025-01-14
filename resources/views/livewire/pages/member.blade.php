



<div>
    <form>
        <div class="grid grid-cols-6 gap-6">
            <!-- Customer Name -->
            <div class="col-span-6 sm:col-span-3">
                <label for="customer-name" class="block mb-2 text-sm font-medium pl-3 text-gray-900 dark:text-white">Customer Name</label>
                <input type="text" wire:model="fname" id="customer-name"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Jina kamili" required>
                <div class="text-red-500">@error('fname') {{ $message }} @enderror</div>
            </div>

            <!-- Phone Number -->
            <div class="col-span-6 sm:col-span-3">
                <label for="phone-number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                <input type="number" wire:model="phone" id="phone-number" value="255"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    required>
                <div class="text-red-500">@error('phone') {{ $message }} @enderror</div>
            </div>

            <!-- Order -->
            <div class="col-span-6 sm:col-span-3">
                <label for="order" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><span class="text-red-500">*</span>Order</label>
                <select id="order" wire:model="order"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
                    <option value="" disabled selected>Select Order</option>
                    <option value="general office">General Office</option>
                    <option value="large format">Large Format</option>
                    <option value="conica minolta">Conica Minolta</option>
                    <option value="DTF">DTF</option>
                </select>
                <div class="text-red-500">@error('order') {{ $message }} @enderror</div>
            </div>

            <!-- Work Cost -->
            <div class="col-span-6 sm:col-span-3">
                <label for="work-cost" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><span class="text-red-500">*</span>Work Cost</label>
                <input type="number" wire:model="work_cost" id="work-cost" 
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    required>
                <div class="text-red-500">@error('work_cost') {{ $message }} @enderror</div>
            </div>

            <!-- Expenses Cost -->
            <div class="col-span-6 sm:col-span-3">
                <label for="expenses-cost" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Expenses Cost</label>
                <input type="number" wire:model="expenses_cost" id="expenses-cost" value="0"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    required>
                <div class="text-red-500">@error('expenses_cost') {{ $message }} @enderror</div>
            </div>

            <!-- Prepaid Payment -->
            <div class="col-span-6 sm:col-span-3">
                <label for="prepaid-payment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prepaid Payment</label>
                <input type="number" wire:model="prepaid_payment" id="prepaid-payment" value="0"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    required>
                <div class="text-red-500">@error('prepaid_payment') {{ $message }} @enderror</div>
            </div>

            <!-- Order Materials -->
            <div class="col-span-6">
                <label for="order-materials" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><span class="text-red-500">*</span>Order Materials</label>
                <textarea id="order-materials" wire:model="order_materials"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    rows="4" placeholder="Write your materials here..."></textarea>
                <div class="text-red-500">@error('order_materials') {{ $message }} @enderror</div>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="flex justify-center mt-6">
            <button type="submit"
                class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                Create Order
            </button>
        </div>
    </form>
</div>
