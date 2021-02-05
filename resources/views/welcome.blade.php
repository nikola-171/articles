@extends('layouts.app')

@section('content')
<div class="container">
    
    
   

</div>
    

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="h2">Daily articles</h2>
            @auth
                <a class="navbar-brand" href="{{ url('/home') }}">
                    Post a new article
                </a>
            @else
                <h4 class="h4">Register to be able to post articles.</h4>    
            @endauth

            @if(count($articles) == 0)
                <div class="alert alert-info">
                    There are no articles to post.
                </div>
            @else 
                @foreach ($articles as $article)
                    <div class="card">
                        <div class="card-header">{!! $article->title !!}</div>
                        <div class="card-body">
                            <h5 class="h5">author: {!! $article->author !!}</h5>
                            <p>{!! $article->content !!}</p>
                            <strong><i>date: {!! $article->date !!}</i></strong><br>
                        </div>
                    </div>
                    <br>
                @endforeach
            @endif
            <form action="/export_csv" method="POST">
                @csrf
                <input type="hidden" name="article_id" value="{!! $article->id !!}">
                <button type="submit" class="btn btn-primary">download all articles in a csv file</button>
            </form>
        </div>
    </div>
    
</div>
@endsection