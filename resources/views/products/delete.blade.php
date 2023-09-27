@extends('layouts.app')

@section('content')
<div class="mt-6 bg-white dark:bg-gray-800">
    <div class="relative overflow-x-auto p-6">
        <form action="{{ route('products.update', $product->id) }}" method="post">
            @csrf
            @method('delete')
            <div class="py-8 px-4 mx-auto max-w-screen-xl text-center">
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Do you want to delete this product?</h5>
                <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-400">Product: {{ $product->name }}</p>
                <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                    <button type="submit" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                        Delete
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </button>
                    <a href="{{ route('products.index') }}" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-gray-900 rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                        Return
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection