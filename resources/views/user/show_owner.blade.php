@can('manager',$user)
    <form action="#" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input name="_method" type="hidden" value="patch">
        <div class="form-group">
            <label class="control-label">修改头像：</label>
            <input type="file" class="form-control" name="image" required="">
        </div>
        <button class="btn btn-primary" id="upload-button" type="submit">上传头像</button>
    </form>

    <form class="mt-30" method="post" action="#"
          enctype="multipart/form-data">
        {{ csrf_field() }}
        <input name="_method" type="hidden" value="patch">
        <div class="form-group">
            <label>修改简介图片：</label>
            <input class="form-control" type="file" name="image" required="">
        </div>
        <button class="btn btn-primary" id="upload-button" type="submit">上传简介图片</button>
    </form>

    <div class="alone-divider"></div>
    <form class="mt-30" action="#" method="post">
        {{ csrf_field() }}
        <input name="_method" type="hidden" value="patch">
        <div class="form-group">
            <label>名称：</label>
            <input class="form-control" name="name" type="text" value="{{ $user->name }}" readonly>
        </div>
        <div class="form-group">
            <label>真实姓名：</label>
            <input class="form-control" name="real_name" type="text" value="{{ $user->real_name }}">
        </div>
        <div class="form-group">
            <label>个人网站：</label>
            <input class="form-control" name="website" type="text" value="{{ $user->website }}">
        </div>
        <div class="form-group">
            <label>描述：</label>
            <input class="form-control" name="description" type="text" value="{{ $user->description }}">
        </div>
        <input type="submit" class="btn btn-primary" value="修改">
    </form>
@endcan