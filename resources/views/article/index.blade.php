@extends ('layouts.app')
@section('content')
  <h1>Список статей</h1>
  @foreach ($articles as $article)
  <a href="{{route('articles.show',['article'=>$article->id])}}">
    <h2>{{$article->name}} </h2>
  <div> {{Str::limit($article->body, 200)}}</div>
  @endforeach
@endsection