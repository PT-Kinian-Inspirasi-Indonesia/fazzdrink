@extends('admin.layouts.app')

@section('content')
<div class="max-w-xl mx-auto">
    <h1 class="text-2xl font-bold mb-4">Add Category</h1>

    @if ($errors->any())
        <div class="bg-red-200 text-red-800 p-3 rounded mb-4">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.categories.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label for="name" class="block font-semibold mb-1">Category Name</label>
            <input
                type="text"
                id="name"
                name="name"
                class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300"
                placeholder="Enter category name"
                value="{{ old('name') }}"
                required
            />
        </div>

        <div class="flex justify-end space-x-2">
            <a href="{{ route('admin.categories.index') }}" class="px-4 py-2 bg-gray-300 rounded">Cancel</a>
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Save</button>
        </div>
    </form>
</div>
@endsection
