<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hierarchy Tree') }}
        </h2>
    </x-slot>

    <div class="grid grid-cols-2 gap-4">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h2>Hierarchy Tree</h2>
                        <ul class="list-decimal">
                        @foreach ($entries as $entry)
                            <li class="pl-4">
                                {{ $entry->title }}
                                @if(count($entry->childs))
                                    @include('entries.childs', ['childs' => $entry->childs])
                                @endif
                            </li>
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h2>New Entry</h2>
                        <form action="{{ route('entries.store') }}" method="POST">
                            @csrf
                            <label>Title</label>
                            <input type="text" name="title">
                            <label>Parent</label>
                            <select name="parent">
                                <option value='0'>No parent</option>
                                @foreach ($allEntries as $entries)
                                    <option value="{{$entries->id}}">{{$entries->title}}</option>
                                @endforeach
                            </select>
                            <input type="submit" value="Create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
