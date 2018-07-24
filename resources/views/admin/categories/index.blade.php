@extends('layouts.admin')


@section('content')
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
    			<tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Created</th>
                    <th>Updated</th>
                </tr>
            </thead>
            <tbody>
                @if($categories)
                    @foreach($categories as $category)
                        <tr style="cursor:pointer" onclick="location.href='{{route('admin.categories.edit',['id'=>$category->id])}}'">
                        {{--<tr style="cursor:pointer" data-toggle="modal" onclick="clickedRow({{$category->id}})"--}}
                            {{--data-target="#myGlobalModal" data-id="{{$category->id}}">--}}
                            <td>{{$category->id}}</td>
                            <td>
                                <a href="{{route('admin.categories.edit', $category->id)}}">{{$category->name}}</a>
                            </td>
                            <td>{{$category->created_at->diffForHumans()}}</td>
                            <td>{{$category->updated_at->diffForHumans()}}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>

    <div class="row">
        <div class="col-xs-12 text-center">
            {{$categories->render()}}
        </div>
    </div>

    <!-- include modals -->
    {{--include create category model--}}
    {{--@include('admin.categories.edit')--}}
    <!-- /include modals -->

@endsection

