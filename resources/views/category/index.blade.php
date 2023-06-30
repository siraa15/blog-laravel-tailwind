@extends('dashboard')
@section('content')

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
  @if (session()->has('success'))
<div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
  <span class="font-medium">Success</span> {{ session('success') }}
</div>
@endif
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
            <a href="/categories/create" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah Data</a>
        </caption>
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nomor
                </th>              
                <th scope="col" class="px-6 py-3">
                    Category Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $loop->iteration }}
                </th>
            <td class="px-6 py-4">
                {{ $category->name }}
                </td>
                <td class="px-6 py-4 text-center">
                    <a href="/categories/{{ $category->id }}/edit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <form action="{{ route('categories.destroy', $category->id) }}" method="post" class="inline-block" onclick="return confirm('Yakin Hapus Data?')">
                      @method('delete')
                      <button type="submit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</button>
                      @csrf
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
    <div class="p-5">
      {{ $categories->links('pagination::tailwind') }}
  </div>
  
</div>


  @endsection
{{-- <div class="table-responsive col-lg-6">
  <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Buat Category Baru</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">Nomor</th>
          <th scope="col">Category Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($articles as $category)
        <td>{{ $loop->iteration }}</td>
        <td>{{ $category->content}}</td>
      </tr> 
        @endforeach
        <tr>
      </tbody>
    </table>
  </div>
  @endsection --}}