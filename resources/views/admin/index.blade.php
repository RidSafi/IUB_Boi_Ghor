@extends('admin.master')
@section('header')
    Dashboard
@endsection
@section('content')
<div class="row">
    <div style="text-align: center">
        <h2>Admin panel</h3>
        <h4>Total User = {{ $count_users }}</h5>
        <h4>Total Books = {{ $count_books }}</h5>
        <h4>Total Audio Books = {{ $count_audioBooks }}</h5>
    </div>
</div>
@endsection
