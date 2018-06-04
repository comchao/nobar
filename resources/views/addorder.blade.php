@extends('layouts.index')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">รายการสั่งอาหาร</h3>
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
                                <table id="example1" class="table table-bordered table-hover dataTable" role="grid"
                                       aria-describedby="example2_info">
                                    <thead>
                                    <th>ลำดับ</th>
                                    <th>รายการอาหาร</th>
                                    <th>ราคา</th>
                                    <th>จำนวน</th>
                                    <th>สั่งอาหาร</th>
                                    </thead>
                                    <tbody>
                                    <?php $i = 1?>
                                    @foreach($data as $list)
                                        <tr>

                                            <form action="{{url('add/order')}}" method="post">
                                                <input value="{{$list->id}}" type="hidden" name="id_menus">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <td>{{$i}} </td>
                                            <!--<td><input type= "text" value="{{$list->menu}}" name="menu"> </td>
                                                <td><input type= "text" value="{{$list->price}}" name="price"> </td> -->
                                                <td>{{$list->menu}}  </td>
                                                <td>{{$list->price}}  </td>
                                                <td><input value="" type="number" class="input-no-spinner" name="amount"></td>

                                                <td>
                                                    <button type="submit" class="btn btn-primary">สั่งอาหาร</button>

                                                </td>

                                            </form>


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
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">รายการสั่งอาหาร</h3>
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
                                <table id="example1" class="table table-bordered table-hover dataTable" role="grid"
                                       aria-describedby="example2_info">
                                    <thead>
                                    <th>ลำดับ</th>
                                    <th>รายการอาหาร</th>
                                    <th>ราคา</th>
                                    <th>จำนวน</th>
                                    <th>แก้ไข</th>
                                    <th>ยกเลิก</th>
                                    </thead>
                                    <tbody>
                                    <?php $i = 1?>
                                    @foreach($orders as $listorders)
                                        <tr>

                                            <td>{{$i}} </td>
                                            <td>{{$listorders->id_menus}}  </td>
                                            <td>{{$listorders->id_menus}}</td>
                                            <td>{{$listorders->amount}}</td>
                                            <td><button type="button" class="btn btn-block btn-warning">แก้ไข</button></td>
                                            <td><button type="button" class="btn btn-block btn-danger">ยกเลิก</button></td>


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






