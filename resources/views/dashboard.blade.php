<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-dark/60 text-whiteText">
            <div x-data = "{qoute: ''}"
            x-init = "
            fetch('https://api.kanye.rest')
            .then(response => response.json())
            .then(data => {
            console.log(data.qoute);
            qoute = data.quote
            })
            "
            >
            <h1 x-text="qoute"></h1>
            </div>
            <div class="mt-10 p-10">
                <livewire:yearly-stats>
            </div>
        </div>
    </div>
</x-app-layout>
{{-- @script --}}
{{-- <script>
    window.addEventListener('DOMContentLoaded', () => {
        // x-init="$watch('closeButton', value => console.log(value))";
    //  document.getElementById("closeButton").addEventListener('click', (event) => {
    //     console.log(event.target.value);
    //  })
    document.querySelector('[x-ref="closeButton"]').focus();

   
   })
</script> --}}
{{-- @endscript --}}



{{--  THIS IS FOR LOOPS
<div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-xl sm:rounded-lg mb-10 fixed"  @keydown.escape.prevent = "open = false" 
             x-data = "{
            open: false ,
            atTop: true
             }" 
            @scroll.window="atTop = window.pageYOffset <= 20"
            :class="{ 'bg-sky-600': !atTop }"  >
                 <div>
                    <button x-on:click= "open=!open 
                    $nextTick(() =>{
                    $refs.closeButton?.focus()})"
                    >Drop Down</button>
                </div>
                    <div x-data=" {
                        lists:  [
                            {
                            button: 'Lorem, ipsum dolor.',
                            qoute : 'list 1',
                            activeList: false,
                        },
                            {
                             button: 'Lorem, ipsum dolor.',
                            qoute : 'list 2',
                            activeList: false,
                        },
                        {
                             button: 'Lorem, ipsum dolor.',
                            qoute : 'list 3',
                            activeList: false,
                            },
                              {
                            button: 'Lorem, ipsum dolor.',
                            qoute : 'list 4',
                            activeList: false,
                            }
                    ]}">
                        <ul x-show="open" x-transition @click.outside = "open = false"  class="p-2 flex" >
                            <template x-for="list in lists" :key="list.qoute">
                            <li class ="inline-block"><button @click.prevent="list.activeList = !list.activeList" x-text="list.button"></button>
                                <blockquote class="mr-2 bg-lime-400 text-center" x-ref="list1" x-show="list.activeList" x-transition x-text="list.qoute"></blockquote>
                            </li>
                            </template>
                            <button @click="open =false" x-ref="closeButton" class="p-3 bg-sky-500" >Close List</button>
                        </ul>
                    </div> 
            
        </div>
            <div class="mt-10 p-10">
                <livewire:yearly-stats>
            </div>
        </div>
    </div>
</x-app-layout>

--}}


{{--  THIS IS FOR TABS
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-xl sm:rounded-lg mb-10 fixed"  @keydown.escape.prevent = "open = false" 
             x-data = "{
            open: false ,
            atTop: true,
            activeList: 'list1'
             }" 
            @scroll.window="atTop = window.pageYOffset <= 20"
            :class="{ 'bg-sky-600': !atTop }"  >
                 <div>
                    <button x-on:click= "open=!open 
                    $nextTick(() =>{
                    $refs.closeButton?.focus()})"
                    >Drop Down</button>
                </div>
                    <div x-data="{}">
                        <ul x-show="open" x-transition @click.outside = "open = false"  class="p-2 flex" >
                            
                            <li class ="inline-block"><button @click.prevent="activeList = 'list1'">Lorem ipsum dolor sit.</button>
                                <blockquote class="mr-2 bg-lime-400 text-center" x-ref="list1" x-show="activeList === 'list1'" x-transition>list 1</blockquote>
                            </li>
                            <li class ="inline-block"><button @click.prevent="activeList = 'list2'">Lorem ipsum dolor sit.</button>
                                <blockquote class="mr-2 bg-lime-400 text-center" x-ref="list2" x-show="activeList === 'list2'" x-transition>list 2</blockquote>
                            </li>


                            <button @click="open =false" x-ref="closeButton" class="p-3 bg-sky-500" >Close List</button>
                        </ul>
                    </div> 
            
        </div>
            <div class="mt-10 p-10">
                <livewire:yearly-stats>
            </div>
        </div>
    </div>
</x-app-layout>

--}}

{{-- FETCH APIE

     <div x-data = "{qoute: ''}"
            x-init = "
            fetch('https://api.kanye.rest')
            .then(response => response.json())
            .then(data => {
            console.log(data.qoute);
            qoute = data.quote
            })
            "
            >
            <h1 x-text="qoute"></h1>
            </div>
--}}