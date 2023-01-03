@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
@if(Session::has('admin'))
<center><h3>Welcome Admin Dashboard</h3></center>
<p style="color: rgb(218, 136, 14); font-size: 25px;">Total Seekers: {{count($seekers)}}</p>
<p style="color: rgb(116, 0, 77); font-size: 25px;">Total Freelance Employers: {{count($femps)}}</p>
<p style="color: rgb(9, 161, 231); font-size: 25px;">Total Corporate Employers: {{count($cemps)}}</p>
<p style="color: rgb(36, 119, 28); font-size: 25px;">Total Posts: {{count($posts)}}</p>
<div class="card">
        <div style="background-color:rgb(206, 229, 233);" class="card-body">
            <h3 style="color: blueviolet">Latest Post</h3>
            <h5>Post Title</h5>{{$lastpost->Post_Title}}
            <div class="float-right">
                <p>Posted At <br>
                Date: {{substr($lastpost->created_at, 0, -9)}}<br>
                Time: {{substr($lastpost->created_at, 11, 8)}}</p><br>
                <a class="btn  btn-info" href="{{route('showAllPost')}}" role="button">Show All Posts</a>
            </div><br>
            <h5>Posted By</h5>{{substr($lastpost->Posted_By, 1, 150)}} ( @if ($lastpost->Posted_By[0]=='F')
            Freelance Employer
        @else
            Corporate Employer
        @endif )<br>
            <h5>Post Status</h5>{{$lastpost->Post_Status}}
            
        </div>
</div>

@endif
@endsection