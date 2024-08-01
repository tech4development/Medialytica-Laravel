@extends('layouts.dashboards.admindashboard')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-semibold mb-4 text-center">Manage Roles and Permissions</h1>

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

    <!-- Form to Create New User and Assign Role -->
    <div class="bg-white shadow-md rounded-lg p-6 mb-6">
        <h2 class="text-xl font-semibold mb-4">Create New User and Assign Role</h2>
        <form action="{{ route('role.store') }}" method="POST">
            @csrf
            <div class="flex flex-col space-y-4 mb-4">
                <input type="text" name="full_name" placeholder="Full Name" class="border border-gray-300 rounded-lg px-4 py-2 w-full" required>
                <input type="email" name="email" placeholder="Email Address" class="border border-gray-300 rounded-lg px-4 py-2 w-full" required>
                <input type="password" name="password" placeholder="Password" class="border border-gray-300 rounded-lg px-4 py-2 w-full" required>
                <select name="name" class="border border-gray-300 rounded-lg px-4 py-2 w-full">
                    <option value="admin">Admin</option>
                    <option value="editor">Editor</option>
                    <option value="user">User</option>
                </select>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">
                    Create User and Assign Role
                </button>
            </div>
        </form>
    </div>

    <!-- Display Users and Assign Permissions -->
    <div class="bg-white shadow-md rounded-lg p-6 mb-6 w-150">
        <h2 class="text-xl font-semibold mb-4 text-center">Users and Roles</h2>

        <!-- Users Table -->
        <table class="w-full border border-gray-300 rounded-lg">
            <thead>
                <tr>
                    <th class="border p-2 text-left text-center w-40">Full Name</th>
                    <th class="border p-2 text-left text-center w-40">Email</th>
                    <th class="border p-2 text-left text-center  w-40">Role</th>
                    <th class="border p-2 text-left text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($roles as $role)
                @if(!empty($role->full_name))
                    <tr>
                        <td class="border p-2">{{ $role->full_name }}</td>
                        <td class="border p-2">{{ $role->email }}</td>
                        <td class="border p-2">{{ $role->name }}</td>
                        <td class="border p-2 w-530">
                            <button type="button" onclick="window.location='{{ route('role.assignPermissions', $role->id) }}'" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">
                                <i class="fas fa-plus"></i> Assign Permissions
                            </button>
                            <button type="button" onclick="window.location=''" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                                <i class="fas fa-pencil-alt"></i> Edit User
                            </button>
                            <button type="button" onclick="window.location=''" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">
                                <i class="fas fa-trash-alt"></i> Delete User
                            </button>
                        </td>
                    </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
