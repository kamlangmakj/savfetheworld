@extends('layouts.app')
@section('title', 'Homepage')
@section('contact', 'คุณต้องการสร้างกิจกรรมใช่หรือไม่?')
@section('contactBold', 'ติดต่อเรา')
@section('content')

    <div class="wrapper">

        <div class="bg">
            <img src="{{ url('img/bg copy.jpg') }}" style="width: 100%;margin-top: -100px;position: absolute;z-index: -99;">
        </div>

        <div class="container" style="margin-top: 80px">
            <p class="text-center" style="font-size: 28px;color: #fff">ยินดีต้อนรับเข้าสู่</p>
            <h1 class="text-center" style="font-size: 72px;font-weight: bold;color: #fff">SAV'FE THE WORLD</h1>

            <div class="card-deck text-center" style="margin-top: 100px;">
                <div class="card" style="height: 300px">
                    <div class="card-body mt-5">
                        <p class="card-text" style="font-size: 20px;"><small class="text-muted">จำนวนผู้ใช้งานทั้งหมด</small></p>
                        <p class="card-text" style="font-size: 72px;font-weight: bold">150</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body mt-5">
                        <p class="card-text" style="font-size: 20px;"><small class="text-muted">จำนวนกิจกรรมทั้งหมด</small></p>
                        <p class="card-text" style="font-size: 72px;font-weight: bold">100</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body mt-5">
                        <p class="card-text" style="font-size: 20px;"><small class="text-muted">จำนวนของรางวัลทั้งหมด</small></p>
                        <p class="card-text" style="font-size: 72px;font-weight: bold">96</p>
                    </div>
                </div>
            </div>

            <div class="row text-center" style="margin-top: 120px">
                <div class="col-4"></div>
                <div class="col-4">
                    <a href="#"><img src="{{ url('img/facebook.png') }}" style="height: 50px;padding: 0 20px"></a>
                    <a href="#"><img src="{{ url('img/twitter.png') }}" style="height: 50px;padding: 0 20px"></a>
                    <a href="#"><img src="{{ url('img/instagram.png') }}" style="height: 50px;padding: 0 20px"></a>
                </div>
                <div class="col-4"></div>
            </div>

            <div class="container" style="height: 100%;margin-top: 180px;">
                <div class="row text-center mb-5">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <p class="text-center" style="font-size: 28px;color: #000">SAV'FE THE WORLD มีอะไรบ้าง?</p>
                    </div>
                    <div class="col-2"></div>
                </div>
                <div class="row text-center" style="margin-bottom: 60px;">
                    <div class="col-4">
                        <i class="fa fa-calendar-alt" style="font-size: 96px;"></i>
                        <p class="text-center mt-4" style="font-size: 22px;color: #000">Join/Collect</p>
                        <label class="text-center" style="font-size: 16px;color: #000">เข้าร่วมกิจกรรมที่หลากหลายและสะสมแต้มเพื่อนำไปแลกของในแอปพลิเคชัน</label>
                    </div>
                    <div class="col-4">
                        <i class="fa fa-star" style="font-size: 96px;"></i>
                        <p class="text-center mt-4" style="font-size: 22px;color: #000">Get reward</p>
                        <label class="text-center" style="font-size: 16px;color: #000">ยิ่งรวมกิจกรรมเยอะๆยิ่งได้รับแต้มสะสมเพื่อนำไปแลกของรางวัลและปลดล็อคสถิติต่างๆ</label>
                    </div>
                    <div class="col-4">
                        <i class="fas fa-globe-europe" style="font-size: 96px;"></i>
                        <p class="text-center mt-4" style="font-size: 22px;color: #000">Save & Safe</p>
                        <label class="text-center" style="font-size: 16px;color: #000">เป็นส่วนหนึ่งในการส่งเสริมการเข้าร่วมกิจกรรม รวมไปถึงได้ช่วยอนุรักษ์ธรรมชาติและสิ่งแวดล้อม</label>
                    </div>
                </div>

                <hr>

                <div class="row" style="margin-top:80px;margin-bottom: 80px;">
                    <div class="col-4">
                        <p class="" style="font-size: 28px;color: #000">เกี่ยวกับเรา</p>
                        <p class="mt-4" style="font-size: 18px;color: #000">การออกแบบและพัฒนาแอปพลิเคชันส่งเสริมกิจกรรมเพื่อสนับสนุนการอนุรักษ์และแก้ไขปัญหาสิ่งแวดล้อม สำหรับผู้ใช้งานที่สนใจกิจกรรมเกี่ยวกับการอนุรักษ์สิ่งแวดล้อม บนระบบปฏิบัติการไอโอเอส และแอนดรอยด์
                        </p>
                        <a href="#"><img src="{{ url('img/download andriod-01.png') }}" style="height: 50px;"></a>
                        <a href="#"><img src="{{ url('img/download ios-01.png') }}" style="margin-left:10px;height: 50px;"></a>

                        <div class="text-center mt-4">
                            <a href="#"><img src="{{ url('img/facebook (1).png') }}" style="height: 30px;padding: 0 20px"></a>
                            <a href="#"><img src="{{ url('img/twitter (1).png') }}" style="height: 30px;padding: 0 20px"></a>
                            <a href="#"><img src="{{ url('img/instagram (1).png') }}" style="height: 30px;padding: 0 20px"></a>
                        </div>
                    </div>
                    <div class="col-8">
                        <img src="{{ url('img/about copy.jpg') }}" alt="Savfetheworld Logo" class="brand-image "
                             style="width: 100%;border-radius: 6px;">
                    </div>
                </div>

            </div>
        </div>
        <div style="height:300px;width: 100%;background-color: #000;color: #fff">
            <div class="container" >
                <div class="row" style="margin-bottom: 40px;">

                    <div class="col-4">
                        <p class="mt-4" style="font-size: 48px">ถาม/ตอบ</p>
                    </div>
                    <div class="col-8">
                        <p style="font-size: 18px; margin-top: 50px;">1. SAV'FE THE WORLD คืออะไร?</p>
                        <p style="font-size: 18px;">2. SAV'FE THE WORLD มีจุดเด่นอะไรบ้าง?</p>
                        <p style="font-size: 18px;">3. SAV'FE THE WORLD มีข้อดีอะไร?</p>
                        <p style="font-size: 18px;">4. ดาวน์โหลดแอปพลิเคชันได้ที่ไหนบ้าง?</p>
                    </div>
                </div>
            </div>
        </div>

        <div style="height:auto;width: 100%;background-color: #2ac684;color: #fff">
            <div class="container" style="padding-bottom: 40px">
                <div class="row">

                    <div class="col-8">
                        <p class="mt-4" style="font-size: 22px">ส่งข้อความถึงเรา</p>
                        <div class="row">
                        <div class="col-10">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="อีเมลของคุณ" name="name">
                            </div>
                        </div>
                        <div class="col-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-10">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="ชื่อของคุณ" name="name">
                                </div>
                            </div>
                            <div class="col-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-10">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="เบอร์โทรศัพท์ติดต่อคุณ" name="name">
                                </div>
                            </div>
                            <div class="col-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-10">
                                <div class="form-group">
                                    <textarea rows="3" type="text" class="form-control" placeholder="ใส่ข้อความที่นี่..." name="name"></textarea>
                                </div>
                            </div>
                            <div class="col-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                            </div>
                            <div class="col-2">
                                <button class="form-control btn btn-dark">ส่งข้อความ</button>
                            </div>
                            <div class="col-2">
                            </div>
                        </div>

                    </div>
                    <div class="col-4">
                        <p class="mt-4" style="font-size: 22px">ติดต่อเรา</p>
                        <label class="mt-2" style="font-size: 16px"><i class="fa fa-phone" style="font-size: 22px;"></i> 0986594214</label><br>
                        <label class="mt-2" style="font-size: 16px"><i class="fas fa-envelope" style="font-size: 22px;"></i> kamlangmak_j@silpakorn.edu</label>
                        <label class="mt-2" style="font-size: 16px"><i class="fa fa-map-marker-alt" style="font-size: 22px;"></i> มหาวิทยาลัยศิลปากรวิทยาเขตซิตี้แคมปัส
                            <br>เมืองทองธานี
                            ตำบลบ้านใหม่ อำเภอปากเกร็ด <br>จังหวัดนนทบุรี 11120</label>
                    </div>
                </div>
            </div>
        </div>

        <footer style="background-color: #2ac684;color: #FFFFFF;position: relative;left: 0;bottom: 0;width: 100%;margin-bottom: -30px">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{ url('img/logo app-09.png') }}" alt="Savfetheworld Logo" class="brand-image "
                                 style="height:60px">
                        </a>
                    </div>
                    <div class="col-6 mt-4 float-right d-none d-sm-inline-block text-center">
                        <strong>Copyright &copy; 2020 SAV'FE THE WORLD</strong> - All rights reserved.
                    </div>
                    <div class="col-3 mt-4 float-right d-none d-sm-inline-block">
                        <div class="float-right d-none d-sm-inline-block">
                            <b>Version</b> 1.0.2
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        @include('layouts.back_to_top')
    </div>

@endsection
