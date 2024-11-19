<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Contact Management') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-lg mx-auto sm:px-6 lg:px-8">
      <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="flex items-start mb-5">
          <a href="{{ route('contacts.index') }}"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Back</a>
        </div>
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 text-gray-900 flex flex-col gap-2">
            <input type="text" name="name" placeholder="Name" class="form-control"
              value="{{ $contact->name, old('name') }}">
            <input type="email" name="email" placeholder="Email" class="form-control"
              value="{{ $contact->email, old('email') }}">
            <input type="tel" name="phone_number" placeholder="Phone Number" class="form-control" maxlength="11"
              value="{{ $contact->phone_number, old('phone_number') }}">
            <button type="submit"
              class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</x-app-layout>
