@extends('information')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('addStoreCart')}}" id="demoForm" style="height:660px;padding:20px" method="post">
    @csrf
   
    <div  class="" style="width:60%;display:inline-block;">
        <h2 style="margin:10px " class="">Thông tin liên lạc</h2>
        <hr>
        <input type="text" style="display:none" name="events_id" value="{{$datas->id}}">

        <div style="background-color:#eef0f5;border-radius:10px">
            <div  class="group">
                <label style="margin:10px ;font-size:18px">Họ và tên</label>
                <input type="text" style="height:45px;margin-left:15px;width: 95%;" name="fullname" id="fullname" class="form-control"  placeholder="Vui lòng nhập họ và tên" value="{{old('fullname')}}">
            </div>
            <div class="group">
                <label  style="margin:10px ;font-size:18px">Số điện thoại</label>
                <input type="text" style="height:45px;margin-left:15px;width: 95%;" name="phone" class="form-control"  placeholder="vui lòng nhập số điện thoại" value="{{old('phone')}}">
            </div>
            <div class="group">
                <label  style="margin:10px ;font-size:18px">Email</label>
                <input type="email" style="height:45px;margin-left:15px;width: 95%;" name="email" class="form-control"  placeholder="Vui lòng nhập email" value="{{old('email')}}">
            </div>
            <div class="group">
                <label  style="margin:10px ;font-size:18px">Địa chỉ</label>
                <input type="text" style="height:45px;margin-left:15px;width: 95%;" name="address" class="form-control"  placeholder="Vui lòng nhập địa chỉ" value="{{old('address')}}">
            </div>
            <h3 style="margin:15px  ;">Hành khách</h3>
            <table>
                <tr>
                    <td><label style="padding:10px;font-size:18px">Người lớn</label></td>
                    <td>
                        <input class="qty1 " type="text" name="adult" style="width:50px;text-align: center" id="adult" value="0">
                    </td>
                </tr>
                <tr>
                    <td><label style="padding:10px;font-size:18px">Trẻ em</label></td>
                    <td>
                        <input class="qty1 " type="text" name="children" style="width:50px;text-align: center" id="children" value="0">
                    </td>   
                </tr>
            </table>
        </div>
    </div>
    <div style="float:right;width:35%" id="tom-tat-chuyen-di">
        <div style="border:1px solid rgb(207, 208, 211);padding:15px">
            <h2>Hóa đơn</h2>
            <hr>
            <div style="background-color:#eef0f5;padding:15px">
<div style="margin:20px 0">
                    @php
                    $images = $datas->image == NULL ? 'no-avatar.png' : $datas->image;
                    $image_url = asset('assets/dist/img/'.$images)
                    @endphp
                    <img src="{{ $image_url }}" width="100px" > 
                    <label style="margin:10px 0;font-size:18px">{{$datas->name}}</label>
                </div>
                <h4 style="display:inline-block;font-size:18px">Slot:</h4>
                <p class="para-agileits-w3layouts" id="sum" style="display:inline-block;font-size:18px">{{$sum_adult + $sum_children}}</p>/
                <p class="para-agileits-w3layouts" style="display:inline-block;font-size:18px" id="slot">{{$datas->slot}}</p>
                <div style="margin-bottom:13px">
                    <h4>Bắt đầu sự kiện</h4>
                    <p>{{$datas->timestart}}</p>
                </div>
                <div style="margin-bottom:13px">
                    <h4>Kết thúc sự kiện</h4>
                    <p>{{$datas->timeend}}</p>
                </div>
                <div style="margin-bottom:13px;display:none">
                    <h5>Gia ve</h5>
                    <p id="gia-ve" value="{{$datas->price}}" >{{$datas->price}}</p>
                </div>
                <table>
                    <th style="width:200px;padding:10px 0;font-size:18px">Hành khách</th>
                    <th style="width:200px;padding:10px 0;text-align: right;font-size:18px" id="hanh-khach"></th>
                    <tr>
                        <td style="width:70%;padding:10px 0;font-size:18px">Người Lớn</td>
                        <td class="" id="hien-gia-adult" style="width:50%;padding:10px 0;text-align: right;font-size:18px"></td>
                    </tr>
                    <tr>
                        <td  style="width:70%;padding:10px 0;font-size:18px">Trẻ em</td>
                        <td  class="" id="hien-gia-children" style="width:200px;padding:10px 0;text-align:right;font-size:18px"></td>
                    </tr>
                    
                    <tr style="padding:20px 0">
                        <td  style="width:70%;padding:10px 0;font-size:18px"> Tổng thiệt hại</td>
                        <td style="width:60%;padding:40px 0;text-align:right;font-size:18px" id = "result" ></td>
                    </tr>

                </table>
                <button type="submit" style="width:100%;height: 50px;background:red;color:white" >Đặt ngay</button>

            </div>
        </div>
    </div>
</form>
  
@endsection
