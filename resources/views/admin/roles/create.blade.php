<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Role') }}
        </h2>
    </x-slot>

    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                <div class="flex justify-end p-2">
                    <a href="{{ route('admin.roles.create') }}" class="px-4 py-2 bg-green-400 hover:bg-green-500 rounded-md">Create Role</a>
                </div>
                <div class="flex flex-col">
                    form
                </div>

            </div>
        </div>
    </div>
</x-admin-layout>
