@extends('layout')

@section('content')
<h1 class="mb-4">Liste des articles</h1>

<div class="row">
@foreach($articles as $article)
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">{{ $article->title }}</h5>
                <p class="card-text">{{ $article->content }}</p>
            </div>
            <div class="card-footer text-muted">
                Publié le {{ $article->created_at->format('d/m/Y') }}
            </div>
        </div>
    </div>
@endforeach
</div>
@endsection

