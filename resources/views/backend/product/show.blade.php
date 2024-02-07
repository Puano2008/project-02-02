@extends('layouts.master_backend')
@section('content')

<div class="container">

    <div class="card">
        <div class="card-header">
          รายละเอียดสินค้า
        </div>
        <div class="card-body">
            <div class="card" style="width: 40rem;">
                <img class="card-img-top" src="{{asset('backend/product/resize/'.$pro->image)}}" height="350"  alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{$pro->name}}</h5>
                  <p class="card-text">{{$pro->description}}</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">{{$pro->price}} บาท</li>
                  <li class="list-group-item"> ประเภท {{$pro->category->name}}</li>
                </ul>
                <div class="card-body">
                  <a href="{{url('admin/product/index')}}" class="card-link  btn btn-danger">กลับหน้าหลัก</a>
                </div>
              </div>
      </div>





</div>

@endsection
