@extends('layouts.app')

@section('content')
<div class="container m-0 m-auto">
<h1>Show post</h1>

<form class="mt-8 space-y-6" method="POST" action="/posts/{{ $post->id }}"  enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="hidden" name="remember" value="true">
        <div class="rounded-md shadow-sm ">
          <div class="mb-2">
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input id="title" name="title"  type="text" value="{{ $post->title }}" autocomplete="title" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Title">
              
          </div>

          <div class="mb-2">
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea id="Description" name="description"  type="textarea" autocomplete="description" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Description">{{ $post->description }} </textarea>
        
          </div>
          

          <div class="mb-2">
            <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
            <input id="category" name="category"  type="text" value="{{ $post->category }}" autocomplete="category" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Category">
         

          </div>
          <div class="mb-2">
                <label class="block text-sm font-medium text-gray-700">
                Image
                </label>

                <div class="mt-1 flex items-center">
                <img src="{{ $post->image }}"
                     alt="your avatar"
                     width="300"
                >

                             
              
                </div>
            
            </div>

        </div>
  
      </form>
</div>
@endsection
