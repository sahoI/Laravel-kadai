@extends('layout')
@section('content')
    <div class="container mt-4">
        @foreach ($items as $item)
            <div class="card mb-4">
                <div class="card-header">
                    {{ $item->title }}
                </div>
                <div class="card-body">
                    <p class="card-text">
                        {!! nl2br(e(str_limit($item->image, 200))) !!}
                    </p>
                </div>
                <div class="card-footer">
                    <span class="mr-2">
                        投稿日時 {{ $item->created_at->format('Y.m.d') }}
                    </span>

                    {{--@if ($item->image->count())--}}
                        {{--<span class="badge badge-primary">--}}
                            {{--コメント {{ $item->image->count() }}件--}}
                        {{--</span>--}}
                    {{--@endif--}}
                </div>
            </div>
        @endforeach
    </div>
@endsection
{{--@section('content')--}}
    {{--<div>--}}
        {{--@foreach($items as $item)--}}
            {{--商品名：{{$item->title}}--}}
            {{--<img src="{{$item->image}}">--}}
        {{--@endforeach--}}
    {{--</div>--}}
{{--@endsection--}}
