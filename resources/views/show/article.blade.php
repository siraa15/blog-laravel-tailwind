@extends('layouts.main')
@include('layouts.navbar')
@section('content')
<h2 class="text-4xl font-extrabold dark:text-white">{{ $article->title }}</h2>

{{-- <div class="inline-flex py-3 rounded-md" role="group">
  <a href="/articles/" class="px-2 font-medium text-blue-600 dark:text-blue-500 hover:underline">Kembali</a>
  <a href="/articles/{{ $article->id }}/edit" class="px-2 font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
  <form action="{{ route('articles.destroy', $article->id) }}" method="post" class="inline-block" onclick="return confirm('Yakin Hapus Data?')">
    @method('delete')
    <button type="submit" class="px-2 font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</button>
    @csrf
  </form>
 </div> --}}
 
 
<nav class="flex mb-4 px-3 pt-10" aria-label="Breadcrumb">
  <ol class="inline-flex items-center space-x-1 md:space-x-3">
    <li class="inline-flex items-center">
      <a href="/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
        Home
      </a>
    </li>
    <li aria-current="page">
      <div class="flex items-center">
        
        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">{{ $article->title }}</span>
      </div>
    </li>
  </ol>
</nav>
<h2 class="mb-4 px-5 text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl dark:text-white">{{ $article->title }}</h2>

<img srcset="{{ Storage::url('public/articles/').$article->image }} 1x, {{ Storage::url('public/articles/').$article->image }} 2x" class="h-auto max-w-lg mx-auto p-3" alt="image description">
<small class="mb-2 px-5">By: {{ $article->author->name }}</small>
<p class="mb-3 px-5 text-justify text-gray-500 dark:text-gray-400 first-line:uppercase first-line:tracking-widest first-letter:text-7xl first-letter:font-bold first-letter:text-gray-900 dark:first-letter:text-gray-100 first-letter:mr-3 first-letter:float-left"> {!!  $article->content !!}</p>
@endsection