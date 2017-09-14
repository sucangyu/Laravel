@extends('layouts.master')

@section('content')
    
    <div class="col-sm-8 blog-main">
        
        <form method="post" for="/login"> 
            {{ csrf_field() }}
            <fieldset class="form-group">
                <label for="email">邮箱</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </fieldset>
            <fieldset class="form-group">
                <label for="password">密码:</label>
                <input type="password" name="password" class="form-control" id="password" >
            </fieldset>    
            <button type="submit" class="btn btn-primary">登录</button>
        </form>

    </div>

@endsection