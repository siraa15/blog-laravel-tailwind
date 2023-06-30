@extends('dashboard')
@section('content')

  <form method="POST" action="{{ route('categories.update',$category->id)}}">
    @method('PUT')
    @csrf
    <div class="relative z-0 w-full mb-6 group">
        <input type="text" name="name" value="{{ old('title',$category->name) }}" id="name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" required />
        <label for="name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Category Name</label>
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
  </form>
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
        @foreach ($articles as $article)
        <td>{{ $loop->iteration }}</td>
        <td>{{ $article->content}}</td>
      </tr> 
        @endforeach
        <tr>
      </tbody>
    </table>
  </div>
  @endsection --}}