@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Health expert page</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                    <div class="header-wrap clearfix">
                <div id="logo" class="logo">
                    
                        <img src="images/avatar.png" alt="image">
                </div><!-- /.logo -->

                <button type="button" class="btn btn-manage">Manage reports</button>
                <button type="button" class="btn btn-map">Manage Map</button>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
