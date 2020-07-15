@extends('layout.master')
@section('title', 'uppicture')
@section('content')
    <div class="contain mx-auto" >
        <form class="form shadow-lg">
            <div class="form-group">
                <label for="username">辨識者姓名</label>
                <input type="name" class="form-control" id="username"aria
                -describedby="emailHelp" placeholder="輸入姓名">
            </div>
            <span>
                <label for="picture">上傳圖檔</label>
                <input type="file" class="form-control-file"id=”file_upload”>
            </span>
            <button class="btn btn-primary rounded-pill">確認</button>
        </form>
    </div>
    <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
    </div>
@endsection
