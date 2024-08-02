// resources/views/roles/assign_permissions.blade.php

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
        <h2 class="text-xl font-semibold mb-4">Assign Permissions to {{ $role->name }}</h2>
        <form action="{{ route('roles.assignPermissions', $role->id) }}" method="POST">
            @csrf
            <div class="flex flex-col space-y-4 mb-4">
                <input type="text" value="{{ $role->full_name }}" class="border border-gray-300 rounded-lg px-4 py-2 w-full" readonly>
                <input type="email" value="{{ $role->email }}" class="border border-gray-300 rounded-lg px-4 py-2 w-full" readonly>
                <input type="text" value="{{ $role->name }}" class="border border-gray-300 rounded-lg px-4 py-2 w-full" readonly>

                <!-- Grid Layout for Checkboxes -->
                <div class="grid grid-cols-5 gap-4">
                    @foreach($permissions as $permission)
                        <div class="flex items-center">
                            <input type="checkbox" id="permission_{{ $permission->id }}" name="permission_ids[]" value="{{ $permission->id }}" class="mr-2 leading-tight permission-checkbox">
                            <label for="permission_{{ $permission->id }}" class="text-gray-700 text-sm">
                                {{ $permission->name }}
                            </label>
                        </div>
                    @endforeach
                </div>

                <!-- Container for Appended Items -->
                <div id="selected-permissions" class="flex flex-wrap gap-2 mt-4"></div>

                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">
                    Assign Permissions
                </button>
            </div>
        </form>

    </div>

    <!-- Display Permissions Assigned to the Role -->
    <div class="bg-white shadow-md rounded-lg p-6 mb-6">
        <h2 class="text-xl font-semibold mb-4 text-center">Permissions Assigned to {{ $role->name }}</h2>
        <table class="w-full border border-gray-300 rounded-lg">
            <thead>
                <tr>
                    <th class="border p-2 text-left text-center w-40">Role ID</th>
                    <th class="border p-2 text-left text-center w-40">Full Name</th>
                    <th class="border p-2 text-left text-center w-40">Role</th>
                    <th class="border p-2 text-left text-center w-40">Permissions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border p-2">{{ $role->id }}</td>
                    <td class="border p-2">{{ $role->full_name }}</td>
                    <td class="border p-2">{{ $role->name }}</td>
                    <td class="border p-2">
                        @foreach($role->permissions as $permission)
                            <div>{{ $permission->name }}</div>
                        @endforeach
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const checkboxes = document.querySelectorAll('.permission-checkbox');
        const selectedPermissionsContainer = document.getElementById('selected-permissions');

        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function () {
                const permissionId = this.value;
                const permissionName = this.nextElementSibling.textContent;

                if (this.checked) {
                    // Append the selected item
                    const selectedItem = document.createElement('div');
                    selectedItem.className = 'border border-blue-500 rounded-lg px-2 py-1 flex items-center';
                    selectedItem.dataset.permissionId = permissionId;

                    const itemName = document.createElement('span');
                    itemName.className = 'mr-2';
                    itemName.textContent = permissionName;

                    const removeButton = document.createElement('button');
                    removeButton.className = 'text-red-500 hover:text-red-700';
                    removeButton.innerHTML = '&times;';
                    removeButton.addEventListener('click', function () {
                        // Uncheck the checkbox
                        checkbox.checked = false;
                        // Remove the selected item
                        selectedPermissionsContainer.removeChild(selectedItem);
                    });

                    selectedItem.appendChild(itemName);
                    selectedItem.appendChild(removeButton);
                    selectedPermissionsContainer.appendChild(selectedItem);
                } else {
                    // Remove the selected item
                    const itemToRemove = selectedPermissionsContainer.querySelector(`[data-permission-id="${permissionId}"]`);
                    if (itemToRemove) {
                        selectedPermissionsContainer.removeChild(itemToRemove);
                    }
                }
            });
        });
    });
</script>

@endsection
