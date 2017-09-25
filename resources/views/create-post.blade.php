@extends('layouts.mainlayout')
@section('main')
 <div class="container-fluid">
     <div class="row">
         <div class="col-md-10">
             <div class="widget">
                 <div class="widget-heading">
                     <h3 class="widget-title">Basic Form</h3>
                 </div>
                 <div class="widget-body">
                     <form method="post" action="{{ $edit_post? route('post-edit-post',['id' => $postSend->id]): route('create-post') }}" enctype="multipart/form-data">
                         {{ csrf_field() }}
                         <div class="form-group">
                             <label for="title">Title</label>
                             <input id="title" type="text" class="form-control" name="title" value="{{ $edit_post?$postSend->title:'' }}">
                         </div>
                         <div class="form-group">
                             <label for="content">Text area</label>
                             <textarea id="content" rows="3" class="form-control" name="content">{{ $edit_post?$postSend->content:'' }}</textarea>
                             <input name="images" type="file" id="upload" class="hidden" onchange="">
                         </div>
                         <div class="form-group">
                             <label for="image">Upload Image</label>
                             <input type="file" name="image" id="image" rows="3" class="form-control" name="content">
                         </div>
                         <h5>Select Categories</h5>
                         @foreach($categories as $category)
                             <div class="form-group">
                                 <input name="categories[]" type="checkbox" value="{{ $category->id }}" {{ $edit_post? ($postSend->categories->contains($category->id)?'checked':''):'' }}>
                                 <label>{{ $category->category_name }}</label>
                             </div>
                         @endforeach

                         <h5>Select Special Categories</h5>
                         @foreach($categories as $category)
                             <div class="form-group">
                                 <input name="special_categories[]" type="checkbox" value="{{ $category->id }}" {{ $edit_post? ($category->specialPosts->contains($postSend->id)?'checked':''):'' }}>
                                 <label>{{ $category->category_name }}</label>
                             </div>
                         @endforeach
                         <button type="submit" class="btn btn-outline btn-success">Submit</button>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>
@endsection

@section('scripts')
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: "textarea",
            theme: "modern",
            paste_data_images: true,
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
            toolbar2: "print preview media | forecolor backcolor emoticons",
            image_advtab: true,
            file_picker_callback: function(callback, value, meta) {
                if (meta.filetype == 'image') {
                    $('#upload').trigger('click');
                    $('#upload').on('change', function() {
                        var file = this.files[0];
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            callback(e.target.result, {
                                alt: ''
                            });
                        };
                        reader.readAsDataURL(file);
                    });
                }
            },
            templates: [{
                title: 'Test template 1',
                content: 'Test 1'
            }, {
                title: 'Test template 2',
                content: 'Test 2'
            }]
        });
    </script>
@endsection