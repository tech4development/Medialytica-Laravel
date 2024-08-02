@extends('layouts.dashboards.admindashboard')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-semibold mb-4 text-center">Manage Permissions</h1>

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

    <!-- Create Permission Form -->
    <div class="bg-white shadow-md rounded-lg p-6 mb-6">
        <h2 class="text-xl font-semibold mb-4">Create New Permission</h2>
        <form action="{{ route('permissions.store') }}" method="POST">
            @csrf
            <div class="flex flex-col space-y-4 mb-4">
                <input type="text" id="permission_name" name="permission_name" placeholder="Permission Name" class="border border-gray-300 rounded-lg px-4 py-2 w-full" required>
                @error('permission_name')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                    Add Permission
                </button>
            </div>
        </form>
    </div>

    <!-- Permissions Table -->
    <div class="bg-white shadow-md rounded-lg p-6 mb-6">
        <h2 class="text-xl font-semibold mb-4 text-center">Permissions</h2>

        <!-- Permissions Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300 rounded-lg">
                <thead>
                    <tr>
                        <th class="border p-2 text-center">Permission ID</th>
                        <th class="border p-2 text-center">Name</th>
                        {{-- <th class="border p-2 text-center">Guard Name</th> --}}
                        <th class="border p-2 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($permissions as $permission)
                        <tr>
                            <td class="border p-2 text-center">{{ $permission->id }}</td>
                            <td class="border p-2 text-center">{{ $permission->name }}</td>
                            {{-- <td class="border p-2 text-center">{{ $permission->guard_name }}</td> --}}
                            <td class="border p-2 text-center">
                                <button type="button" onclick="window.location=''" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                                    <i class="fas fa-pencil-alt"></i> Edit Permission
                                </button>
                                <button type="button" onclick="window.location=''" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">
                                    <i class="fas fa-trash-alt"></i> Delete Permission
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Display Permissions -->
    <div class="bg-white shadow-md rounded-lg p-6 mb-6">
        <h2 class="text-xl font-semibold mb-4 text-center"> All Permissions</h2>
        <table class="w-full border border-gray-300 rounded-lg">
            <thead>
                <tr>
                    <th class="border p-2 text-left text-center w-40">Permission Name</th>
                    <th class="border p-2 text-left text-center w-40">Guard Name</th>
                    <th class="border p-2 text-left text-center w-40">Roles</th>
                </tr>
            </thead>
            <tbody>
                @foreach($permissions as $permission)
                    <tr>
                        <td class="border p-2 text-center">{{ $permission->name }}</td>
                        <td class="border p-2 text-center">{{ $permission->guard_name }}</td>
                        <td class="border p-2 text-center">
                            @foreach($permission->roles as $role)
                                <div>{{ $role->name }}</div>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
