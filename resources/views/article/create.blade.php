@extends('dashboard')
@section('content')

  <form method="POST" action="{{ route('articles.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="relative z-0 w-full mb-6 group">
        <input type="text" name="title" id="title" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="title" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Title</label>
    </div>
    <div class="relative z-0 w-full mb-6 group">
  <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
      <select id="category" name="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        @foreach ($categories as $category)
        @if (old('category_id') == $category->id)
        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>    
        @else
        <option value="{{ $category->id }}">{{ $category->name }}</option>   
        @endif
        @endforeach
      </select>
    </div>
    <div class="relative z-0 w-full mb-6 group">
      <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload Image</label>
      <input required class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="image" name="image" type="file">
  </div>
  <div class="relative z-0 w-full mb-6 group">
  <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your content</label>
  <textarea id="content" name="content" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required placeholder="Write your thoughts here..."></textarea>
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