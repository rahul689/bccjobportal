@extends('admin.layout')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Dashboard
        <small>Bangladesh Computer Council Job Portal</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard {{ Request::path() == '/dashboard' ? 'active' : '' }}"></i>Dashboard</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <!-- Your Page Content Here -->

</section>
<!-- /.content -->

@stop
