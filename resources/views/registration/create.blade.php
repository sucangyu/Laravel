/resources/views/registration/create.blade.php
@extends('layouts.master')

@section('content')
    
    <div class="col-sm-8 blog-main">
        
        <form method="post" for="/register"> 
            {{ csrf_field() }}
            <fieldset class="form-group">
                <label for="name">用户名:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </fieldset>
            <fieldset class="form-group">
                <label for="email">邮箱</label>
                <input type="email" class="form-control" name="email" id="email" required>
                <small class="text-muted">我们不会与别人分享您的邮箱</small>
            </fieldset>
            <fieldset class="form-group">
                <label for="password">密码:</label>
                <input type="password" name="password" class="form-control" id="password" >
            </fieldset>    
            <fieldset class="form-group">
                <label for="password_confirmation">再次输入密码:</label>
                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
            </fieldset>    
            <button type="submit" class="btn btn-primary">提交</button>
        </form>

    </div>

@endsection