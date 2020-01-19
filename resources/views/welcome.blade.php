@extends('layouts.app')
@section('title', 'Homepage')
@section('contact', 'คุณต้องการสร้างกิจกรรมใช่หรือไม่?')
@section('contactBold', 'ติดต่อเรา')
@section('content')
    <style>
        footer {
            position: relative;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #0000;
            color: white;
        }
        footer ul li {
            list-style-type: none;
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="box" style="width: 100%; height: 1000px; background-color: gray">

            </div>
        </div>
    </div>

    <footer id="myFooter" style="background-color: #F1F2F2; color: #000;">
        <div class="container mt-4">
            <div class="row">
                <div class="col-sm-8 col-xs-12 mt-3">
                    <h5>ส่งข้อความถึงเรา</h5>
                    <div class="form-group mt-3">
                        <input type=text class="form-control" placeholder="อีเมลของคุณ" name="name">
                        <input type=text class="form-control mt-3" placeholder="ชื่อของคุณ" name="name">
                        <input type=text class="form-control mt-3" placeholder="เบอร์โทรศัพท์ของคุณ" name="name">
                        <textarea rows="5" type=text class="form-control mt-3" placeholder="ใส่ข้อความที่นี่..." name="name"></textarea>
                        <button type="submit" class="btn btn-primary mt-3">ส่งข้อความ</button>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 mt-3">
                    <h5>ติดต่อเรา</h5>
                    <ul style="margin-left: -40px">
                        <li><i class="fas fa-phone"></i> 098 659 4214</li>
                        <li><i class="fas fa-envelope"></i> savfetheworld@gmail.com</li>
                        <li style="width: 90%"><i class="fas fa-map-marker-alt"></i> มหาวิทยาลัยศิลปากรวิทยาเขต
                                ซิตี้แคมปัส เมืองทองธานี
                                ตำบลบ้านใหม่ อำเภอปากเกร็ด นนทบุรี 11120</li>
                    </ul>
                </div>
            </div>
        </div>
        @include('layouts.back_to_top')
        <footer id="myFooter" style="background-color: #000; color: #fff;">
            <div class="container pt-3 pb-3">
                <div class="footer-copyright">
                    <strong>Copyright &copy; 2020 SAV'FE THE WORLD</strong>
                    - All rights reserved.
                    <div class="float-right d-none d-sm-inline-block">
                        <b>Version</b> 1.0.1
                    </div>
                </div>
            </div>
        </footer>
    </footer>



@endsection
