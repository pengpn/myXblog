<article class="post">
    <!-- post header -->
    <div class="post-header">
        <h1 class="post-title">
            <a title="{{ $post->title }}" href="{{ route('post.show',$post->id) }}">{{ $post->title }}</a>
        </h1>
        <div class="post-meta">
            <span class="post-time">
                <i class="fa fa-calendar-o"></i>
                <time datetime="2016-08-05T00:10:14+08:00">
                    {{ $post->created_at->format('Y-m-d') }}
                </time>
            </span>
            <span class="post-category">
                |&nbsp;
                <i class="fa fa-folder-o"></i>
                <a href="#">
                    {{ $post->category->name }}
                </a>
            </span>
            <span class="post-comments-count">
                |&nbsp;
                <i class="fa fa-comments-o fa-fw" aria-hidden="true"></i>
                <span>{{ $post->comments_count }}</span>
            </span>
        </div>
        {{--post content--}}
        <div class="post-description">
            {!! $post->description !!}
        </div>
        {{--read more--}}
        <div class="post-permalink">
            <a title="阅读全文" href="{{ route('post.show',$post->id) }}" class="btn btn-more">阅读全文</a>
        </div>

        {{--post footer--}}
        <div class="post-footer clearfix">
            <div class="pull-left tag-list">
                <i class="fa fa-tags"></i>

            </div>
        </div>
    </div>
</article>