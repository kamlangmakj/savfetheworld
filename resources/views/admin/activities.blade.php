@extends('layouts.master')

@section('title', 'Activities')

@section('header')
    <div class="row mb-2 mt-4">
        <div class="col-sm-6">
            <h5 class="m-0 text-dark">Activities - กิจกรรม</h5>
        </div><!-- /.col -->

    </div><!-- /.row -->
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header" style="background-color: #F1F2F2; height: 80px">
                    <h3 class="card-title text-bold mt-3">รายชื่อกิจกรรม</h3>
                    <div class="float-right mt-2">
                        <a class="btn btn-primary" href="{{ url('admin/activities/create') }}"><i class="fas fa-calendar-plus"></i> สร้างกิจกรรม</a>
                    </div>
                </div>
                {{--search--}}
                {{--<div class="card-header">--}}
                    {{--<div class="input-group input-group-sm" style="width: 150px;">--}}
                        {{--<input type="text" name="table_search" class="form-control" placeholder="Search">--}}
                        {{--<div class="input-group-append">--}}
                            {{--<button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>ชื่อกิจกรรม</th>
                            <th>วันที่เริ่ม</th>
                            <th>วันที่จบ</th>
                            <th>จำนวนคนเข้าร่วม</th>
                            <th>ตัวเลือก</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($activities as $activity)
                            <tr>
                                <td>{{ $activity->id }}</td>
                                <td>{{ $activity->name }}</td>
                                <td>{{ $activity->started_date }}</td>
                                <td>{{ $activity->expired_date }}</td>
                                <td style="color: #B0C547">0/100</td>
                                <td>
                                    <a href="{{ url('admin/activities/edit',$activity->id ) }}" class="btn btn-warning"><i class="fas fa-cog"></i> แก้ไข</a>
                                    <form style="display: inline" role="form" action="{{ url('admin/activities/delete') }}" method="post">
                                        {{csrf_field()}}
                                        <input type="hidden" name="id" value="{{ $activity->id }}">
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> ลบ</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        @if($activities->count()==0)
                            <tr>
                                <td colspan="6" style="text-align: center;color: red;">ไม่มีข้อมูลกิจกรรม</td>
                            </tr>
                        @endif


                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection