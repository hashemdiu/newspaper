@extends('layouts.mainlayout')

@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="widget">
                    <div class="widget-heading">
                        <h3 class="widget-title">All Posts</h3>
                    </div>
                    <div class="widget-body">
                        <div id="example-1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <form method="post" action="{{ route('delete-selected-post') }}">
                                {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="submit" value="Delete Selected" class="btn btn-danger" name="submit">
                                </div>
                                <div class="col-sm-4">
                                    <div class="dataTables_length" id="example-1_length">
                                        <label>Show
                                            <select name="example-1_length" aria-controls="example-1" class="form-control input-sm">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select> entries
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div id="example-1_filter" class="dataTables_filter"><label>Search:<input
                                                    type="search" class="form-control input-sm" placeholder=""
                                                    aria-controls="example-1"></label></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example-1" cellspacing="0" width="100%"
                                           class="table table-striped table-bordered dataTable" role="grid"
                                           aria-describedby="example-1_info" style="width: 100%;">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="example-1" rowspan="1"
                                                colspan="1" aria-label="Position: activate to sort column ascending"
                                                style="width: 299px;">Select
                                            </th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="example-1" rowspan="1"
                                                colspan="1" aria-sort="ascending"
                                                aria-label="Name: activate to sort column descending"
                                                style="width: 183px;">Photo
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example-1" rowspan="1"
                                                colspan="1" aria-label="Position: activate to sort column ascending"
                                                style="width: 299px;">Title
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example-1" rowspan="1"
                                                colspan="1" aria-label="Position: activate to sort column ascending"
                                                style="width: 299px;">Add To Slide
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example-1" rowspan="1"
                                                colspan="1" aria-label="Position: activate to sort column ascending"
                                                style="width: 299px;">Top Post
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example-1" rowspan="1"
                                                colspan="1" aria-label="Office: activate to sort column ascending"
                                                style="width: 135px;">Category
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example-1" rowspan="1"
                                                colspan="1" aria-label="Office: activate to sort column ascending"
                                                style="width: 135px;">Action
                                            </th>

                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1">Select</th>
                                            <th rowspan="1" colspan="1">Photo</th>
                                            <th rowspan="1" colspan="1">Title</th>
                                            <th rowspan="1" colspan="1">Add To Slide</th>
                                            <th rowspan="1" colspan="1">Top Post</th>
                                            <th rowspan="1" colspan="1">Category</th>
                                            <th rowspan="1" colspan="1">Action</th>
                                        </tr>
                                        </tfoot>
                                        <tbody>
                                        @foreach($allPost as $post)

                                            <tr role="row" class="odd">
                                                <td class="sorting_1"><input name="deleteposts[]" type="checkbox" value="{{ $post->id }}"></td>
                                                <td class="sorting_1">

                                                    <?php
                                                        $img = $post->images->first();
                                                    ?>
                                                        <img src="{{ asset($img['image_url']) }}" alt="">
                                                </td>

                                                <td><a href="{{ route('single-post',['id'=>$post->id]) }}">{{ $post->title }} </a></td>
                                                <td><a href="{{ $post->sliders?route('remove-from-slide',['id' => $post->id]):route('add-to-slide',['id' => $post->id]) }}" class="btn btn-xs btn-danger">{{ $post->sliders?'Remove From Slide':'Add To Slide' }}</a></td>
                                                <td><a href="{{ $post->topPosts?route('remove-top-post',['id' => $post->id]):route('add-top-post',['id' => $post->id]) }}" class="btn btn-xs btn-danger">{{ $post->topPosts?'Remove Top Post':'Add To Top Post' }}</a></td>
                                                <td>
                                                    @foreach($post->categories as $category)
                                                        <span class="label label-success">{{ $category->category_name }}</span>
                                                    @endforeach
                                                </td>
                                                <td>
                                                    <a href="{{ route('edit-post',['id' => $post->id]) }}" class="btn btn-xs btn-danger">Edit</a>
                                                    <a href="{{ route('delete-post',['id' => $post->id]) }}" class="btn btn-xs btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            </form>
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="dataTables_info" id="example-1_info" role="status" aria-live="polite">
                                        Showing 1 to 10 of 57 entries
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="example-1_paginate">
                                        {{ $allPost->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="widget">
                    <div class="widget-heading">
                        <h3 class="widget-title">{{ $edit_category? 'Edit Categories': 'Add Categories' }}</h3>
                    </div>
                    <div class="widget-body">
                        <form method="post" action="{{ $edit_category?route('edit-category',['id' => $editCategory->id]):route('post-category') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="txtFullName">Category name</label>
                                <input id="txtFullName" type="text" class="form-control" name="category_name" value="{{ $edit_category?$editCategory->category_name:'' }}">
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-outline btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="widget">
                    <div class="widget-heading">
                        <h3 class="widget-title">All Categories</h3>
                    </div>
                    <div class="widget-body">
                        <table class="table table-hover">
                            <tbody>
                            @foreach($categories as $category)
                                <tr class="active">
                                    <th scope="row">{{ $category->id }}</th>
                                    <td><a href="{{ route('category-post',['id'=>$category->id]) }}">{{ $category->category_name }}</a></td>
                                    <td>
                                        <a href="{{ route('delete-category',['id' => $category->id]) }}" class="btn btn-xs btn-warning">Delete</a>
                                        <a href="{{ route('edit-category',['id' => $category->id]) }}" class="btn btn-xs btn-warning">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection