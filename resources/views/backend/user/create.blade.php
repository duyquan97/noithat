@extends('backend.master')
@section('css')

@endsection
@section('main')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-md-12">
                    <section class="panel">
                        <header class="panel-heading">
                            <h3>Create User</h3>
                        </header>
                        <div class="panel-body">
                            <form role="form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label >Tên tài khoản</label>
                                            <input type="text" class="form-control"  placeholder="Nhập tên tài khoản" name="user_name" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label >Mật khẩu</label>
                                            <input type="password" class="form-control"  placeholder="Nhập mật khẩu" name="password" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label >Email</label>
                                            <input type="email" class="form-control"  placeholder="Nhập email" name="email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label >Số Điện Thoại</label>
                                            <input type="text" class="form-control"  placeholder="Nhập số điện thoại" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label >Địa chỉ</label>
                                            <input type="text" class="form-control"  placeholder="Nhập địa chỉ" name="address">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group last">
                                            <label class="control-label col-md-3">Ảnh đại diện</label>
                                            <div class="col-md-9">
                                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                        <img id="fileupload-new" src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                                    </div>
                                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                    <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="fas fa-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="fas fa-undo"></i> Change</span>
                                                   <input type="file" class="default" id="avatar" value="123" name="image"/>
                                                   </span>
                                                        <button type="button" class="btn btn-danger fileupload-exists" ><i class="fas fa-trash"></i> Remove</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info">Submit</button>
                                <button type="button" class="btn btn-danger" id="exit">Exit</button>
                            </form>

                        </div>
                    </section>
                </div>
            </div>
            <!-- page end-->
        </section>
    </section>
@endsection
@section('js')

    <script>

        jQuery(document).ready(function(){

            $('.summernote').summernote({
                height: 200,                 // set editor height

                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor

                focus: true                 // set focus to editable area after initializing summernote
            });
        });

    </script>
    <script !src="">
        $(document).ready(function () {
            $('.fileupload-exists').click(function () {
                 $('.fileupload-preview img').attr('src','http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image');

            });
        });
    </script>
@endsection
