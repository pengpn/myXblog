<div class="widget widget-user" style="overflow: hidden">
    <?php
    if (isset($profile_image) && $profile_image)
        $style = "background: url($profile_image) center center;";
    else
        $style = "background-color: #52768e;";
    ?>
    <div class="widget-user-header" style="{{ $style }}">
        <h3 class="widget-user-username">{{ $author or 'Author' }}</h3>
        <h5 class="widget-user-desc">{{ $description or 'Description' }}</h5>
    </div>
    <div class="widget-user-image">
        <img class="img-circle" src="{{ $avatar or 'https://raw.githubusercontent.com/lufficc/images/master/Xblog/logo.png' }}" alt="User Avatar">
    </div>
    {{--<div class="widget-user-footer">--}}
        {{--<div class="row">--}}

        {{--</div>--}}
    {{--</div>--}}

</div>