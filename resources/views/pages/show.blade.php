@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"> Page id:  {{ $page->id }}</div>

                    <div class="panel-body">
                        <div class="row">

                            <div class="thumbnail">
                                <div class="caption">
                                    <h3><a href="{{ route('pages.show', ['page' => $page]) }}">{{ $page->title }}</a>
                                    </h3>
                                    <p>{{ $page->body }}</p>
{{--                                    @can('update-post', $page)--}}
                                        <p>
                                            <a href="{{ route('pages.edit', ['page' => $page]) }}" class="btn btn-sm btn-default" role="button">Edit</a>
                                        </p>
{{--                                    @endcan--}}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection