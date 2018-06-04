{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--<div class="row justify-content-center">--}}
{{--<div class="col-md-12">--}}
{{--<div class="card">--}}
{{--<div class="card-header">เมนูอาหาร</div>--}}

{{--<div class="card-body">--}}
{{--@if (session('status'))--}}
{{--<div class="alert alert-success">--}}
{{--{{ session('status') }}--}}
{{--</div>--}}
{{--@endif--}}
{{--<form action="{{url('/add/menu')}}" method="post">--}}
{{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
{{--<div class="form-group row">--}}
{{--<label for="staticEmail" class="col-sm-2 col-form-label">รายการอาหาร</label>--}}
{{--<div class="col-sm-6">--}}
{{--<input type="text" name="menu" class="form-control" placeholder="menu" required>--}}

{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group row">--}}
{{--<label for="staticEmail" class="col-sm-2 col-form-label">ราคา</label>--}}
{{--<div class="col-sm-6">--}}
{{--<input type="text" name="menu" class="form-control" placeholder="price" required>--}}

{{--</div>--}}
{{--</div>--}}


{{--<div class="form-group row">--}}
{{--<label for="inputPassword" class="col-sm-2 col-form-label">ประเภทอาหาร</label>--}}
{{--<div class="col-sm-6">--}}
{{--<select name="cars" class="form-control">--}}
{{--@foreach($foodCategory as $NewfoodCategory)--}}

{{--<option value="{{$NewfoodCategory->foodcategoryid}}">{{$NewfoodCategory->foodcategory_Name}}</option>--}}
{{--<option value="{{ค่าที่เก็บลงฐาน}}"> แสดงชื่อ</option>--}}
{{--@endforeach--}}

{{--</select>--}}
{{--</div>--}}

{{--<center><input type="submit" class="btn btn-primary" value="บันทึก"></center>--}}
{{--</div>--}}

{{--</form>--}}


{{--<table class="table table-striped">--}}
{{--<tr>--}}
{{--<th>ลำดับ</th>--}}
{{--<th>รายการอาหาร</th>--}}
{{--<th>ราคา</th>--}}
{{--<th>ประเภทอาหาร</th>--}}
{{--<th>วันที่เพิ่มข้อมูล</th>--}}
{{--<th>แก้ไข</th>--}}
{{--<th>ลบ</th>--}}
{{--</tr>--}}


{{--</table>--}}

{{--{{ $data->links() }}--}}


{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--@endsection--}}
{{--<script type="text/javascript">--}}
{{--function confirm_delete() {--}}
{{--return confirm('ต้องการลบข้อมูลใช่หรือไม่');--}}
{{--}--}}

{{--function confirm_edit() {--}}
{{--return confirm('ต้องการแก้ไขข้อมูลใช่หรือไม่');--}}
{{----}} {{----}}
{{--</script>--}}



@extends('layouts.index')
@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">เพิ่มเมนูอาหาร</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif


            <form action="{{url('/add/menu')}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="col-sm-12">
                    <div class="col-sm-6">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">รายการอาหาร</label>
                                <input type="text" name="menu" class="form-control" placeholder="กรอกรายการอาหาร" required>

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">ราคา</label>
                                <input type="text" name="price" class="form-control" placeholder="กรอกราคา" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">ประเภทอาหาร</label>
                                <select name="foodcategoryid" class="form-control">
                                    @foreach($foodCategory as $NewfoodCategory)

                                        <option value="{{$NewfoodCategory->foodcategoryid}}">{{$NewfoodCategory->foodcategory_Name}}</option>
                                        {{--<option value="{{ค่าที่เก็บลงฐาน}}"> แสดงชื่อ</option>--}}
                                    @endforeach

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">

                    </div>

                </div>

                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>


            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">เมนูอาหาร</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row">
                            <div class="col-sm-6"></div>
                            <div class="col-sm-6"></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example1" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                    <thead>
                                    <th>ลำดับ</th>
                                    <th>รายการอาหาร</th>
                                    <th>ราคา</th>
                                    <th>ประเภทอาหาร</th>
                                    <th>วันที่เพิ่มข้อมูล</th>
                                    <th>แก้ไข</th>
                                    <th>ลบ</th>
                                    </thead>
                                    <tbody>
                                    <?php $i = 1?>
                                    @foreach($data as $list)
                                        <tr>

                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <td>{{$i}} </td>
                                        <!--<td><input type= "text" value="{{$list->menu}}" name="menu"> </td>
                                                <td><input type= "text" value="{{$list->price}}" name="price"> </td> -->
                                            <td>{{$list->menu}}  </td>
                                            <td>{{$list->price}}  </td>
                                            <td>{{$list['foodCategory'][0]['foodcategory_Name']}}  </td>
                                            <td>{{$list->created_at}}  </td>
                                        <!--<td>{{$list->updated_at}} </td>-->
                                            <td>
                                                <form action="{{url('/show/update/addmenu/'.$list->id)}}" method="get">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                                    <input type="submit" class="btn btn-warning" value="แก้ไข"
                                                           onclick="return confirm_edit()">
                                                </form>
                                            </td>


                                            <td>
                                                <form action="{{url('delete/addmenu/'.$list->id)}}" method="get">
                                                    <input type="submit" class="btn  btn-danger" value="ลบ"
                                                           onclick="return confirm_delete()">
                                                </form>
                                            </td>

                                        </tr>
                                        <?php $i++ ?>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endsection
            @push('scripts')
                <script type="text/javascript">
                    $(function () {
                        $('#example1').DataTable()
                        $('#example2').DataTable({
                            'paging': true,
                            'lengthChange': false,
                            'searching': false,
                            'ordering': true,
                            'info': true,
                            'autoWidth': false
                        })
                    })
                </script>
    @endpush






