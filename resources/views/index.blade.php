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
<form action="{{route('storeCart')}}"  method="post">
    @csrf
    <div  class="container" style="width: 50%;display:inline-block;">
        <h3 class="heading-agileinfo">Thông tin liên lạc<i class="fa fa-anchor" aria-hidden="true"></i></h3>
        <div  class="group">
            <label>Họ và tên</label>
            <input type="text" name="fullname" id="fullname" class="form-control"  placeholder="Vui lòng nhập họ và tên">
        </div>
        <div class="group">
            <label>Số điện thoại</label>
            <input type="text" name="phone" class="form-control"  placeholder="vui lòng nhập số điện thoại">
        </div>
        <div class="group">
            <label>Email</label>
            <input type="email" name="email" class="form-control"  placeholder="Vui lòng nhập email">
        </div>
        <div class="group">
            <label>Địa chỉ</label>
            <input type="text" name="address" class="form-control"  placeholder="Vui lòng nhập địa chỉ">
        </div>
        <h4 style="margin:15px 0 ;">Hành khách</h4>
        <table>
            <tr>
                <td><label>Người lớn</label></td>
                <td>
                    <input class="qty1" type="text" name="adult" style="width:50px;text-align: center" id="adult">
                </td>
            </tr>
            <tr>
                <td><label>Trẻ em</label></td>
                <td>
                    <input class="qty1" type="text" name="children" style="width:50px;text-align: center" id="children">
                </td>   
            </tr>
        </table>
        <h4 style="margin-top:15px`">Đặt phòng</h4>
        <div class="group">
            <select id="phong">
                <option value="0">Không đặt phòng</option>
                <option value="1">Đặt phòng</option>
            </select>
        </div>
    </div>
    <div style="float:right;width:50%" id="tom-tat-chuyen-di">
        <div>
            <h3>Tóm tắt chuyến đi <i class="fa fa-anchor" aria-hidden="true"></i></h3>
            <div>
                <div style="margin:50px 0">
                    <img src="{{asset('assets/images/1.jpg')}}" width="100px">Tên sự kiện
                </div>
                <div style="margin-bottom:13px">
                    <h4>Bắt đầu sự kiện</h4>
                    <p>7/9/2022.21:00</p>
                </div>
                <table>
                    <th style="width:200px;padding:10px 0">Hành khách</th>
                    <th style="width:200px;padding:10px 0;text-align: right" id="hanh-khach"></th>
                    <tr>
                        <td style="width:70%;padding:10px 0">Người Lớn</td>
<td class="" id="hien-gia-adult" style="width:50%;padding:10px 0;text-align: right"></td>
                    </tr>
                    <tr>
                        <td  style="width:70%;padding:10px 0">Trẻ em</td>
                        <td  class="" id="hien-gia-children" style="width:200px;padding:10px 0;text-align:right"></td>
                    </tr>
                    <tr>
                        <td style="width:70%;padding:10px 0"><label>Đặt phòng</label></td>
                        <td class="" id="hien-gia-phong" style="width:200px;padding:10px 0;text-align:right"></td>
                    </tr>
                    <tr>
                        <td style="width:70%;padding:10px 0"><label>Mã giảm giá</label></td>
                        <td  style="width:200px;padding:10px 0;text-align: right"><input type="text" style="width:80px;display:inline-block"><input type="button" value="Áp dụng"></td>
                    </tr>
                    <tr style="padding:20px 0">
                        <td style="width:70%;padding:40px 0"><label><input type="button" value="Tính tiền" id="tinh-tien"></label></td>
                        <td style="width:200px;padding:40px 0;text-align: right" id = "result"></td>
                    </tr>
                </table>
                <button type="submit" style="width:100%;height: 50px;background:red;color:white" >Đặt ngay</button>

            </div>
        </div>
    </div>
</form>
  
@endsection
