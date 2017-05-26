@extends('layouts.app')
@section('description',$post->description)
{{--@section('keywords',$post->category->name)--}}
@section('title',$post->title)
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12 phone-no-padding">
                <div class="post-detail">
                    <div class="center-block">
                        <div class="post-detail-title">{{ $post->title }}</div>
                        <div class="post-meta">
                            <span class="post-category">
                            <i class="fa fa-folder-o fa-fw"></i>
                            <a href="#">分类名</a>
                            </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection