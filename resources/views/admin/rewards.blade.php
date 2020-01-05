@extends('layouts.master')

@section('title', 'Rewards')

@section('header')
    <div class="row mb-2 mt-4">
        <div class="col-sm-6">
            <h5 class="m-0 text-dark">Rewards - ของรางวัล</h5>
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
                    <h3 class="card-title text-bold mt-3">รายการของรางวัล</h3>
                    <div class="float-right mt-2">
                        <a class="btn btn-primary" href="{{ url('admin/activities/create') }}"><i class="fas fa-plus-square"></i> เพิ่มของรางวัล</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>ชื่อของรางวัล</th>
                            <th>ใช้แต้ม</th>
                            <th>จำนวน</th>
                            <th>สถานะ</th>
                            <th>ตัวเลือก</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>บัตรของขวัญเทสโก้โลตัสมูลค่า 100 บาท</td>
                            <td>1000</td>
                            <td>10</td>
                            <td style="color: #B0C547">มีของรางวัล</td>
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
                            <td>5000</td>
                            <td>20</td>
                            <td style="color: #B0C547">มีของรางวัล</td>
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
                            <td>10000</td>
                            <td>0</td>
                            <td style="color: #CA3829">ไม่มีของรางวัล</td>
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