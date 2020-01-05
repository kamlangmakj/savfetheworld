@extends('layouts.master')

@section('title', 'Rewards')

@section('header')
    <div class="row mb-2 mt-4">
        <div class="col-sm-6">
            <h5 class="m-0 text-dark">Tracking Rewards - ติดตามของรางวัล</h5>
        </div><!-- /.col -->
        {{--<div class="col-sm-6">--}}
            {{--<ol class="breadcrumb float-sm-right">--}}
                {{--<li class="breadcrumb-item"><a href="#">Home</a></li>--}}
                {{--<li class="breadcrumb-item active">Dashboard v1</li>--}}
            {{--</ol>--}}
        {{--</div><!-- /.col -->--}}
    </div><!-- /.row -->
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header" style="background-color: #F1F2F2; height: 80px">
                    <h3 class="card-title text-bold mt-3">รายการติดตามของรางวัล</h3>
                </div>

                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>ชื่อของรางวัล</th>
                            <th>ชื่อผู้ใช้งาน</th>
                            <th>จำนวน</th>
                            <th>เลขพัสดุ</th>
                            <th>สถานะ</th>
                            <th>ตัวเลือก</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>บัตรของขวัญเทสโก้โลตัสมูลค่า 100 บาท</td>
                                <td>tommy</td>
                                <td>1</td>
                                <td>EF784268151TH</td>
                                <td style="color: #B0C547">กำลังส่ง</td>
                                <td>
                                    <a href="#" class="btn btn-warning"><i class="fas fa-cog"></i> แก้ไข</a>
                                    <form style="display: inline" role="form" action="#" method="post">
                                        {{csrf_field()}}
                                        <input type="hidden" name="id" value="#">
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> ลบ</button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>บัตรของขวัญเทสโก้โลตัสมูลค่า 500 บาท</td>
                                <td>sammy</td>
                                <td>1</td>
                                <td>EF982668151TH</td>
                                <td style="color: #B0C547">กำลังส่ง</td>
                                <td>
                                    <a href="#" class="btn btn-warning"><i class="fas fa-cog"></i> แก้ไข</a>
                                    <form style="display: inline" role="form" action="#" method="post">
                                        {{csrf_field()}}
                                        <input type="hidden" name="id" value="#">
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> ลบ</button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>บัตรของขวัญเทสโก้โลตัสมูลค่า 1000 บาท</td>
                                <td>jenny</td>
                                <td>1</td>
                                <td>EF358428151TH</td>
                                <td style="color: #CA3829">เสร็จสิ้น</td>
                                <td>
                                    <a href="#" class="btn btn-warning"><i class="fas fa-cog"></i> แก้ไข</a>
                                    <form style="display: inline" role="form" action="#" method="post">
                                        {{csrf_field()}}
                                        <input type="hidden" name="id" value="#">
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> ลบ</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection