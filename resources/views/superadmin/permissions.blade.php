@extends('layouts.dashboards.admindashboard')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-semibold mb-4 text-center">Assign Permissions to Role</h1>

    <!-- Display Success or Error Messages -->
    @if (session('success'))
        <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @elseif ($errors->any())
        <div class="bg-red-100 text-red-800 p-4 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form to Assign Permissions -->
    <div class="bg-white shadow-md rounded-lg p-6 mb-6">
        <h2 class="text-xl font-semibold mb-4">Assign Permissions</h2>
        <form action="{{ route('roles.assignPermissions', $role->id) }}" method="POST">
            @csrf
            <div class="flex flex-col space-y-4 mb-4">
                <label for="permissions" class="block text-gray-700">Select Permissions:</label>
                <select name="permission_ids[]" id="permissions" multiple class="border border-gray-300 rounded-lg px-4 py-2 w-full">
                    @foreach($permissions as $permission)
                        <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                    @endforeach
                </select>
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">
                    Assign Permissions
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
