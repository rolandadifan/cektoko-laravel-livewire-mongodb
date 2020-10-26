@extends('layouts.app')
@section('tittle', 'Product')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Product
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Product</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <livewire:product-index />
        <!-- /.row -->

    </section>
    <!-- /.content -->
</div>
@endsection