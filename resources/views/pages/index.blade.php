@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Pages
                    @can('create-post')
                    <a class="pull-right btn btn-sm btn-primary" href="{{ route('pages.create') }}">New</a>
                    @endcan
                </div>

                <div class="panel-body">
                    <div class="row">
                    @foreach($pages as $page)
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                            <div class="caption">
                                <h3><a href="{{ route('pages.show', ['page' => $page]) }}">{{ $page->title }}</a></h3>
                                <p>{{ str_limit($page->body, 50) }}</p>
                                @can('update-post', $page)
                                <p>
                                    <a href="{{ route('pages.show', ['page' => $page]) }}" class="btn btn-sm btn-default" role="button">Edit</a>
                                </p>
                                @endcan
                            </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection