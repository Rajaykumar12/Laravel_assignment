<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts Manager</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 py-6">
            <h1 class="text-3xl font-bold text-gray-800">Contact Manager</h1>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-semibold text-gray-700">My Contacts</h2>
            <a href="{{ route('contacts.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg">
                <i class="fas fa-plus mr-2"></i>Add Contact
            </a>
        </div>

        <div class="bg-white rounded-lg shadow-sm">
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-gray-500">Name</th>
                        <th class="px-6 py-3 text-left text-gray-500">Email</th>
                        <th class="px-6 py-3 text-left text-gray-500">Phone</th>
                        <th class="px-6 py-3 text-right text-gray-500">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contacts as $contact)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">{{ $contact->name }}</td>
                            <td class="px-6 py-4">{{ $contact->email }}</td>
                            <td class="px-6 py-4">{{ $contact->phone }}</td>
                            <td class="px-6 py-4 text-right">
                                <a href="{{ route('contacts.edit', $contact) }}" class="text-blue-600 hover:text-blue-900">
                                    <i class="fas fa-edit mr-2"></i>Edit
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>