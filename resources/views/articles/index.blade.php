@extends('layouts.app')

@section('content')
    <h1>Список статей</h1>
    @foreach ($articles as $article)
        <a href="{{route('articles.show', $article)}}">{{$article->name}}</a>
        {{-- Str::limit – функция-хелпер, которая обрезает текст до указанной длины --}}
        {{-- Используется для очень длинных текстов, которые нужно сократить --}}
        <div>{{Str::limit($article->body, 200)}}</div>
        <div><a href="{{route('articles.edit', $article)}}">Редактировать</a> <a href="{{route('articles.destroy',$article)}}" data-confirm="Вы уверены?" data-method="delete" rel="nofollow">Удалить</a></div>
        
    @endforeach
@endsection