<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Hotels') }}</title>
    <!-- Styles -->
    <!-- Styles for Bootstrap , Date Picker , Image Uploader , Slideshow and Rating. -->
    <link href="{{ elixir('css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.css">
    @yield('charts')
</head>
<body>
        @include('header-footer.part-header')
        @include('admin.includes.head')
        <section class="content">
                <div class="row">
                  <div class="col-md-6">
                    <div class="box box-primary">
                      <div class="box-header with-border">
                        <h3 class="box-title">Create Hotel</h3>
                      </div>
                      <form role="form">
                        <div class="box-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input class="form-control" id="exampleInputEmail1" >
                          </div>
                          <div class="form-group">
                              <label for="exampleInputEmail1">Address</label>
                              <input class="form-control" id="exampleInputEmail1">  
                          </div>
                          <div class="form-group">
                              <label for="exampleInputEmail1">Telephone</label>
                              <input class="form-control" id="exampleInputEmail1">  
                          </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Description</label>
                           <textarea id="editor1" name="editor1" rows="10" cols="80">
                           </textarea>
                        </div>
                        <div class="box-footer">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                  <div class="col-md-6">
                    <div class="box box-primary">
                      <div class="box-header with-border">
                        <h3 class="box-title" >Insert Image Slide</h3>
                      </div>
                      <div class="box-body">
                             <form action="/photos" method="POST" class="dropzone">
                        {{ csrf_field()}}
                        </form>
                      </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            <section>
</body>
</html>

@include('header-footer.part-footer')
<script src="../../asset_admin/bower_components/ckeditor/ckeditor.js"></script>
<script>
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('editor1')
      //bootstrap WYSIHTML5 - text editor
      $('.textarea').wysihtml5()
    })
</script>
<script src="/js/app.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
