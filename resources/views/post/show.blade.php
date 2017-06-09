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
                            <a href="{{ route('category.show',$post->category->name) }}">{{ $post->category->name }}</a>
                            </span>
                            <span class="post-comments-count">
                           &nbsp;|&nbsp;
                           <i class="fa fa-comments-o fa-fw" aria-hidden="true"></i>
                                <span>{{ $post->comments_count }}</span>
                            </span>
                            <span>
                           &nbsp;|&nbsp;
                           <i class="fa fa-eye"></i>
                                <span>{{ $post->view_count }}</span>
                            </span>
                        </div>
                    </div>
                    <div class="post-detail-content">
                        {!! $post->html_content !!}
                        <p>-- END</p>
                    </div>
                    <div class="post-info-panel">
                        <p class="info">
                            <label class="info-title">版权声明:</label><i class="fa fa-fw fa-creative-commons"></i>自由转载-非商用-非衍生-保持署名（<a
                                    href="https://creativecommons.org/licenses/by-nc-nd/3.0/deed.zh">创意共享3.0许可证</a>）
                        </p>
                        <p class="info">
                            <label class="info-title">创建日期:</label>{{ $post->created_at->format('Y年m月d日') }}
                        </p>
                        @if(isset($post->published_at) && $post->published_at)
                            <p class="info">
                                <label class="info-title">修改日期:</label>{{ $post->published_at->format('Y年m月d日') }}
                            </p>
                        @endif
                        <p class="info">
                            <label class="info-title">文章标签:</label>
                            @foreach($post->tags as $tag)
                                <a href="{{ route('tag.show',$tag->name) }}" class="tag">{{ $tag->name }}</a>
                            @endforeach
                        </p>
                    </div>
                </div>
                @include('widget.recommended_posts',['recommendedPosts' => $recommendedPosts])
                @include('widget.comment',[
                    'comment_key' => $post->slug,
                    'comment_title' => $post->title,
                    'comment_url' => route('post.show',$post->id),
                    'commentable' => $post,
                    'comments' => isset($comments) ? $comments : null,
                    'redirect' => request()->fullUrl(),
                    'commentable_type' => 'App\Post'])
            </div>
        </div>
    </div>
@endsection