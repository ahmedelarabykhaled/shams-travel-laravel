@extends('layouts.admin')
@section('content')
        <div class="card m-5 p-5 rounded">
          <h1 class="text-center my-5">Welcome Admin</h1>
          <div class="container my-5">
            @if($maininfo[0]->status == '0')
            <div class="row">
              <div class="col-sm-6 text-left">
                <h2>Active the website</h2>
              </div>
              <div class="col-sm-6 text-right">
                <a href="{{url('admin/active')}}" class="btn btn-success p-4">Active</a>
              </div>
            </div>
            @endif
            @if($maininfo[0]->status == '1')
            <div class="row">
              <div class="col-sm-6 text-left">
                <h2>Deactive the website</h2>
              </div>
              <div class="col-sm-6 text-right">
                <a href="{{url('admin/deactive')}}" class="btn btn-danger p-4">Deactive</a>
              </div>
            </div>
            @endif
          </div>
        </div>
@endsection