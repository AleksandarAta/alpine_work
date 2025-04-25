<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg mb-10" x-data = "{open: false}"  @keydown.escape.prevent = "open = false" >
                    <button x-on:click= "open=!open">Drop Down</button>
                <ul x-show="open" x-transition @click.outside = "open = false">
                    <li>Lorem ipsum dolor sit amet.</li>
                    <li>Rem exercitationem recusandae non rerum!</li>
                    <li>Vitae dignissimos commodi non facere.</li>
                    <li>Nam dolores atque enim accusantium?</li>
                    <li>Vitae ipsa reprehenderit dicta suscipit.</li>
                </ul>
            </div>
            <div class="mt-10 p-10">
                <livewire:yearly-stats>
            </div>
        </div>
    </div>
</x-app-layout>
