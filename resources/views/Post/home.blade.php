@extends('base')
 
@section('title', 'Posts')

@section('head')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.js"></script>
@stop
@section('content')
<div class="container">
    <table id="posts_table" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($posts as $post)
        <tr>
            <td>{{$post['id']}}</td>
            <td>{{$post['title']}}</td>
            <td>{{$post['body']}}</td>
        </tr>
        @endforeach

        </tbody>
    </table>
</div>
@stop

@section('scripts')
<script type="text/javascript">
$(document).ready(function () {
    $('#posts_table').DataTable();
});    
</script>
@stop

