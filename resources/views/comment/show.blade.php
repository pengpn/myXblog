@forelse($comments as $comment)
    <div class="comment">
        <div class="pull-left">
            <a name="comment{{ $loop->index + 1 }}" href=""></a>
        </div>
    </div>
    <div class="comment-info">
        <div class="comment-head">
            <span class="name">
                <a href="">{{ $comment->username }}</a>
            </span>
            <span class="comment-operation pull-right">
                <a href="#comment{{ $loop->index + 1 }}"
                   style="color: #ccc;font-size: 12px">#{{ $loop->index	+ 1 }}</a>
            </span>
        </div>
        <div class="comment-time">
            <span>{{ $comment->created_at->format('Y-m-d H:i') }}</span>
        </div>
        <div class="comment-content">
            {!! $comment->html_content !!}
        </div>
    </div>
@empty
    <p class="meta-item center-block" style="padding:10px">暂无评论~~</p>
@endforelse