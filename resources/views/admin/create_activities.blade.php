@extends('layouts.master')

@section('title', 'Activities')

@section('header')
    <div class="row mb-2 mt-4">
        <div class="col-sm-6">
            <h5 class="m-0 text-dark">Create Activity - สร้างกิจกรรม</h5>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('admin/activities') }}">Activities</a></li>
                <li class="breadcrumb-item active">Create Activity</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header" style="background-color: #F1F2F2; height: 80px">
                    <h3 class="card-title text-bold mt-3">สร้างกิจกรรม</h3>
                </div>

                <!-- /.card-header -->
                <form role="form" action="{{ url('admin/activities/create') }}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">ชื่อกิจกรรม</label>
                            <input type="text" class="form-control" placeholder="ชื่อ" name="name">
                        </div>
                        <div class="form-group">
                            <label for="name">ชื่อผู้จัด</label>
                            <input type="text" class="form-control" placeholder="ชื่อผู้จัด" name="agent">
                        </div>
                        <div class="form-group">
                            <label for="name">ที่อยู่</label>
                            <textarea rows="2" type="text" class="form-control" placeholder="ที่อยู่" name="address"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="name">รายละเอียดกิจกรรม</label>
                            <textarea rows="5" type="text" class="form-control" placeholder="รายละเอียดกิจกรรม" name="detail"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="name">หมวดหมู่กิจกรรม</label>
                            <select type="text" class="form-control" placeholder="หมวดหมู่กิจกรรม" name="category_types_activities_id">
                                <optgroup label="ป่าไม้">
                                    <option value="1" data-cat="1">ป่าดิบชื้น</option>
                                    <option value="2" data-cat="1">ป่าดิบแล้ง</option>
                                </optgroup>
                                <optgroup label="ทะเล">
                                    <option value="3" data-cat="2">อันดามัน</option>
                                    <option value="4" data-cat="2">อ่าวไทย</option>
                                </optgroup>
                                <optgroup label="ชุมชน">
                                    <option value="5" data-cat="3">ชุมชนชนบท</option>
                                    <option value="6" data-cat="3">ชุมชนเมือง</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">จังหวัด</label>
                            <select type="text" class="form-control" placeholder="จังหวัด" name="province">
                                <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                                <option value="นนทบุรี">นนทบุรี</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="name">วันเริ่มกิจกรรม</label>
                                <input type="date" class="form-control" name="started_date">
                            </div>
                            <div class="form-group col-6">
                                <label for="name">วันจบกิจกรรม</label>
                                <input type="date" class="form-control" name="expired_date">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">แต้ม</label>
                            <input type=number class="form-control" value="1000" name="point">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">เลือกรูปภาพ</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="cover_image">
                                    <label class="custom-file-label" for="exampleInputFile">เลือกรูปภาพ</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="">อัปโหลด</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-calendar-plus"></i> สร้างกิจกรรม</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection