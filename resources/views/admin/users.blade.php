@extends('layouts.master')

@section('title', 'Users')

@section('header')
    <div class="row mb-2 mt-4">
        <div class="col-sm-6">
            <h5 class="m-0 text-dark">Users - ผู้ใช้งาน</h5>
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header" style="background-color: #F1F2F2; height: 80px">
                    <h3 class="card-title text-bold mt-3">รายชื่อผู้ใช้งาน</h3>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>ชื่อ</th>
                            <th>อีเมล</th>
                            <th>เพศ</th>
                            <th>อายุ</th>
                            <th>เบอร์โทรศัพท์</th>
                            <th>ระดับผู้ใช้งาน</th>
                            <th>สถานะ</th>
                            <th>ตัวเลือก</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>tommy</td>
                                <td>tommy@gmail.com</td>
                                <td>ชาย</td>
                                <td>21</td>
                                <td>0845122789</td>
                                <td>General</td>
                                <td style="color: #CA3829">สร้างกิจกรรมไม่ได้</td>
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
                                <td>sammy</td>
                                <td>sammy@gmail.com</td>
                                <td>ชาย</td>
                                <td>18</td>
                                <td>0945127749</td>
                                <td>General</td>
                                <td style="color: #CA3829">สร้างกิจกรรมไม่ได้</td>
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
                                <td>jenny</td>
                                <td>jenny@gmail.com</td>
                                <td>หญิง</td>
                                <td>35</td>
                                <td>0892242789</td>
                                <td>Premium</td>
                                <td style="color: #B0C547">สร้างกิจกรรมได้</td>
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