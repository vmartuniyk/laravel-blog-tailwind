@extends('layouts.app')

@section('content')
<section class="container m-0 m-auto">
       <div class="flex justify-between justify-items-center items-center">
            <div class="add-new">
                <a href="{{ route('posts.create') }}" class="px-4 py-2 mx-2 my-2 text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Create new Post
                    </a>
            </div>
        
            <div class="search-form">
                <form action="{{ route('posts.search') }}">
                    <div class="shadow flex">
                        
                            <input class="w-full rounded p-2" name="search" type="text" placeholder="Search...">
                            <button class="bg-white w-auto flex justify-end items-center text-blue-500 p-2 hover:text-blue-400">
                                <i class="material-icons">search</i>
                            </button>
                        
                    </div>
                </form>  
            </div>
        
        </div>
        
        <div class="flex flex-col  py-4 ">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Image
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Title
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Edit
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Delete
                    </th>
                   
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                  @foreach($posts as $post)
                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                        <div class="flex-shrink-0 h-10 w-10">

                            <img class="h-10 w-10 rounded-full" src="{{ $post->image }}" alt="Post image">
                        </div>
                       
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900"><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                        {{ $post->category }}
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-left text-sm font-medium">
                        <a href="{{ route('posts.edit', $post->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-left text-sm font-medium">
                        <form action="{{ route('posts.destroy', $post) }}" method="POST">
                            @csrf

                            @method('DELETE')

                            <button type="submit" class="text-indigo-600 hover:text-indigo-900">Delete</button>
                        </form>
                    </td>
                    
                    
                    </tr>
                  @endforeach

                </tbody>
                </table>
                {{ $posts->links() }}
            </div>
            </div>
        </div>
        </div>

    </section>
@endsection
