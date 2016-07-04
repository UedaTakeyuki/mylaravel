{{-- resources/views/articles/edit.blade.php --}}
 
@extends('layout')
 
@section('content')
    <h1>Edit: {{ $article->title }}</h1>
 
    <hr/>
 
    @include('errors.form_errors')

{{--    {!! Form::model($article, ['method' => 'PATCH', 'url' => ['articles', $article->id]]) !!} --}}
    {!! Form::model($article, ['method' => 'PATCH', 'route' => ['articles.update', $article->id]]) !!}
        @include('articles.form', ['published_at' => $article->published_at->format('Y-m-d'), 'submitButton' => 'Edit Article'])
    {!! Form::close() !!}
@endsection