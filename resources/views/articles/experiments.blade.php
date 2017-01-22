@extends('layouts.app')

@section('content')

    <div class="row">
            @forelse($articles as $article)
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                     <span>Yla</span>
                    <span class="pull-right">
                        {{$article->created_at->diffForHumans()}}
                    </span>
                </div>

                <div class="panel-body">
           
                </div>
            </div>
        </div>
             @empty
                No articles.
    @endforelse
    </div>

@endsection
