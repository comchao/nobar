@extends('layouts.index')

@section('content')
    <section>
        <div class="box-header with-border">
            <h3 class="box-title">เแก้ไขรายการสั่งอาหาร</h3>
        </div>

            <form action="{{url('update/order/'.$orders[0]['id'])}}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="col-sm-12">
                <div class="col-sm-6">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">รายการอาหาร</label>
                            <input name="id" type="hidden" value="{{$orders[0]['id']}}">
                            <input type="text" name="menu" value="{{$orders[0]['Menus'][0]['menu']}}"  class="form-control" placeholder="รายการอาหาร" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">ราคา</label>
                            <input type="text" name="price" value="{{$orders[0]['Menus'][0]['price']}}"  class="form-control" placeholder="รายการอาหาร" disabled>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword" >ประเภทอาหาร</label>
                            <select name="foodcategoryid" class="form-control" disabled>
                                @foreach($category as $NewfoodCategory)
                                    {{--<option value="{{$NewfoodCategory->foodcategoryid}}">{{$NewfoodCategory->foodcategory_Name}}</option>--}}
                                    {{--แบบแก้ไข--}}
                                    {{--<option value="{{$NewfoodCategory->foodcategoryid}}"></option>--}}
                                    <option <?php if ($orders[0]['Menus'][0]['foodcategoryid'] == $NewfoodCategory->foodcategoryid ) echo 'selected' ; ?> value="{{$NewfoodCategory->foodcategoryid}}">{{$NewfoodCategory->foodcategory_Name}}</option>
                                    {{--<option value="{{ค่าที่เก็บลงฐาน}}"> แสดงชื่อ</option>--}}
                                @endforeach


                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">จำนวน</label>
                            <input type="number" name="amount" value="{{$orders[0]['amount']}}"  class="form-control" placeholder="รายการอาหาร" required>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">

            </div>

            </div>

            <!-- /.box-body -->

        </form>












    </section>
@endsection

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#example2').DataTable()
        })
    </script>
@endpush