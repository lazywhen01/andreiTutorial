<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Contact Management') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
          <a href="{{ route('contacts.create') }}"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Contact</a>
        </div>
        <div class="p-6 text-gray-900">
          <table class="w-full">
            <tr class="bg-gray-100">
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Actions</th>
            </tr>

            @forelse ($contacts as $contact)
              <tr class="border border-gray-200 text-center">
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->phone_number }}</td>
                <td>
                  <a href="{{ route('contacts.edit', $contact->id) }}" class="py-2 px-4">Edit</a>
                  <form action="{{ route('contacts.destroy', $contact) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" value="Delete" class="py-2 px-4">Delete</button>
                  </form>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="4">No Contacts Found</td>
              </tr>
            @endforelse
          </table>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
