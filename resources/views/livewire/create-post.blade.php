<div class="p-6 lg:p-8 bg-white border-b border-gray-200">




    <form wire:submit="save" class="max-w-sm mx-auto">
        <div class="mb-5">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-500">Title
            </label>
            <input wire:model="title" autocomplete="false" type="text" id="base-input"
                class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <x-input-error for="title" class="mt-2" />
        </div>
        <div class="mb-8">
            <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-500">Content
            </label>
            <textarea autocomplete="false" wire:model="content" type="text" id="base-input"
                class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </textarea>
            <x-input-error for="content" class="mt-2" />
        </div>

        <div class="mb-5">
            <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-500">Date
                (yyyy-mm-dd)
            </label>
            <input autocomplete="false" wire:model="date" type="text" id="base-input"
                class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <x-input-error for="date" class="mt-2" />
        </div>

        <button type="submit"
            class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Save</button>
    </form>



</div>
