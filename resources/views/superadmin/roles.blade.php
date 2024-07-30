@extends('layouts.dashboards.admindashboard')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-semibold mb-4">Manage Roles and Permissions</h1>

    <!-- Display Success or Error Messages -->
    @if (session('success'))
        <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @elseif (session('error'))
        <div class="bg-red-100 text-red-800 p-4 rounded mb-4">
            {{ session('error') }}
        </div>
    @endif

    <!-- Role Assignment Form -->
    <div class="bg-white shadow-md rounded-lg p-6 mb-6">
        <h2 class="text-xl font-semibold mb-4">Assign Role to User</h2>
        <form action="{{ route('assign.role', $user->id) }}" method="POST">
            @csrf
            <div class="flex items-center space-x-4">
                <select name="role" class="border border-gray-300 rounded-lg px-4 py-2 w-full">
                    <option value="admin">Admin</option>
                    <option value="editor">Editor</option>
                    <option value="user">User</option>
                </select>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                    Assign Role
                </button>
            </div>
        </form>
    </div>

    <!-- Permissions Management -->
    <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-xl font-semibold mb-4">Manage Permissions</h2>

        <!-- Form to Create New Permission -->
        <form action="{{ route('create.permission') }}" method="POST" class="mb-6">
            @csrf
            <div class="flex items-center space-x-4 mb-4">
                <input type="text" name="permission_name" placeholder="New Permission" class="border border-gray-300 rounded-lg px-4 py-2 w-full" required>
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">
                    Create Permission
                </button>
            </div>
        </form>

        <!-- Form to Assign Permissions to Role -->
        <form action="{{ route('assign.permissions', 'admin') }}" method="POST">
            @csrf
            <div class="flex flex-col space-y-4">
                <label for="role" class="font-semibold">Select Role:</label>
                <select name="role" id="role" class="border border-gray-300 rounded-lg px-4 py-2 w-full mb-4">
                    <option value="admin">Admin</option>
                    <option value="editor">Editor</option>
                    <option value="user">User</option>
                </select>

                <label class="font-semibold">Assign Permissions:</label>
                <div class="flex flex-col space-y-2">
                    @foreach($permissions as $permission)
                        <div class="flex items-center">
                            <input type="checkbox" name="permissions[]" value="{{ $permission->name }}" id="permission_{{ $permission->id }}" class="mr-2">
                            <label for="permission_{{ $permission->id }}" class="text-gray-700">{{ $permission->name }}</label>
                        </div>
                    @endforeach
                </div>

                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                    Assign Permissions
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
