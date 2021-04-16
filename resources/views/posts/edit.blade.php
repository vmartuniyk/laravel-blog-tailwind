@extends('layouts.app')

@section('content')
<div class="container m-0 m-auto">
<h1>Update post</h1>

<form class="mt-8 space-y-6" method="POST" action="/posts/{{ $post->id }}"  enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="hidden" name="remember" value="true">
        <div class="rounded-md shadow-sm ">
          <div class="mb-2">
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input id="title" name="title"  type="text" value="{{ $post->title }}" autocomplete="title" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Title">
                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
          </div>

          <div class="mb-2">
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea id="Description" name="description"  type="textarea" autocomplete="description" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Description">{{ $post->description }} </textarea>
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
          </div>
          

          <div class="mb-2">
            <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
            <input id="category" name="category"  type="text" value="{{ $post->category }}" autocomplete="category" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Category">
            @error('category')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

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
                 <input class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                       type="file"
                       name="image"
                       id="image"
                >
              
                </div>
                @error('image')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

        </div>
  
      
  
        <div class="flex justify-center text-center">
          <button type="submit" class="group relative  flex justify-center py-2 px-4 mr-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
     
            </span>
           Update post
          </button>
         
        </div>
      </form>
</div>
@endsection
