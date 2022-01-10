@extends('layouts.master')
@section('title', 'Все категории')

@section('content')
    @foreach($categories as $category)
        <div class="panel">
            <a href="{{ route('category',$category->code) }}">
                <img src="https://rebro-store.ru/upload/iblock/52a/52a8f76e3dfdee5d92b84be0b6776165.png">
                <h2>{{ $category->name }} [{{ $category->products->count() }}]</h2>
            </a>
            <p>
                {{$category->description}}
            </p>
        </div>
    @endforeach()
@endsection

