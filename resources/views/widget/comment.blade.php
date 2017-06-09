<div class="comments" id="comments">
    <div class="comments-body">
        <div id="comments-container">
            @if(isset($comments) && !empty($comments))
                @include('comment.show',$comments)
            @endif
        </div>
        <form id="comment-form" method="post" action="#">
            @if(!Auth::check())
                <div class="form-group">
                    <label for="username">姓名<span class="required">*</span></label>
                    <input class="form-control" id="username" type="text" name="username" placeholder="您的大名">
                </div>
                <div class="form-group">
                    <label for="email">邮箱<span class="required">*</span></label>
                    <input class="form-control" id="email" type="email" name="email" placeholder="邮箱不会公开">
                </div>
                <div class="form-group">
                    <label for="site">个人网站</label>
                    <input class="form-control" id="site" type="text" name="site" placeholder="可选，填写后点击头像可以直接进入">
                </div>
            @endif
                <div class="form-group">
                    <label for="comment-content">评论内容<span class="required">*</span></label>
                    <textarea placeholder="支持Markdown" style="resize: vertical" id="comment-content" name="content"
                              rows="5" spellcheck="false" class="form-control markdown-content autosize-target"></textarea>
                    <span class="help-block required">
                    <strong id="comment_error_msg"></strong>
                </span>
                </div>
                <div class="form-group">
                    <input type="submit" id="comment-submit" class="btn btn-primary"
                           value="回复"/>
                </div>
        </form>
</div>