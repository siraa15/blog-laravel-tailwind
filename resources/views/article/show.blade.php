@extends('dashboard')
@section('content')
{{-- <div class="container">
  <div class="row my-3">
      <div class="col-lg-8">
          <h1 class="mb-3">{{ $article->title }}</h1>
         <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all My Posts</a>
         <a href="/dashboard/posts/{{ $article->slug }}/edit" class="btn btn-warning"><span data-feather="eye"></span> Edit</a>
         <form action="/dashboard/posts/{{ $article->slug }}" method="post" class="d-inline" onclick="return confirm('Yakin Hapus Data?')">
          @method('delete')
          <button class="btn btn-danger border-0"><span data-feather="x-circle"></span> Delete</button>
          @csrf
        </form>
        @if ($article->image)
        <div style="max-height: 350px; overflow:hidden">
            <img src="{{ asset('storage/'. $article->image) }}" class="img-fluid mt-3"  alt="{{  $article->category->name}}" >
        </div>
            
        @else
        <img src="https://source.unsplash.com/1200x400?{{  $article->category->name}}" class="img-fluid mt-3" alt="{{  $article->category->name}}">
        @endif
          <article class="my-3 fs-5">
              {!!  $article->content !!}
          </article>
          <a href="/dashboard/posts" class="d-block mt-3"> Back to Post</a>
      </div>
  </div>
</div> --}}
{{-- <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
  <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">We invest in the world’s potential</h1>
<div class="inline-flex p-5 rounded-md" role="group">
 <a href="/articles" class="px-4 py-2 text-sm font-medium text-gray-900 bg-transparent border border-gray-900 rounded-l-lg hover:bg-gray-900 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:bg-gray-700">
  Kembali</a>
  <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-transparent border-t border-b border-gray-900 hover:bg-gray-900 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:bg-gray-700">
    Settings
  </button>
  <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-transparent border border-gray-900 rounded-r-md hover:bg-gray-900 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:bg-gray-700">
    Downloads
  </button>
</div>

      <caption class="p-10 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">    
        
          <img class="h-auto max-w-md mx-auto py-2" src="{{ Storage::url('public/articles/').$article->image }}" alt="image description"> 
          <p class="px-5 mb-3 text-gray-500 dark:text-gray-400 first-line:uppercase first-line:tracking-widest first-letter:text-7xl first-letter:font-bold first-letter:text-gray-900 dark:first-letter:text-gray-100 first-letter:mr-3 first-letter:float-left">
            {!!  $article->content !!}</p>
        </caption>
  {{-- {{ $articles->links('pagination::tailwind') }} --}}
{{-- </div> --}} 

<h2 class="text-4xl font-extrabold dark:text-white">{{ $article->title }}</h2>

<div class="inline-flex py-3 rounded-md" role="group">
  <a href="/articles/" class="px-2 font-medium text-blue-600 dark:text-blue-500 hover:underline">Kembali</a>
  <a href="/articles/{{ $article->id }}/edit" class="px-2 font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
  <form action="{{ route('articles.destroy', $article->id) }}" method="post" class="inline-block" onclick="return confirm('Yakin Hapus Data?')">
    @method('delete')
    <button type="submit" class="px-2 font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</button>
    @csrf
  </form>
 </div>
 
<img srcset="{{ Storage::url('public/articles/').$article->image }} 1x, {{ Storage::url('public/articles/').$article->image }} 2x" class="w-full h-auto max-w-xl rounded-lg" alt="image description">
<p class="my-4 text-lg text-justify text-dark"> {!!  $article->content !!}</p></p>



  @endsection
