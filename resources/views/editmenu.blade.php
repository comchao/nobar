@extends('layouts.index')

@section('content')
    <section>
        <div class="box-header with-border">
            <h3 class="box-title">เแก้ไขเมนูอาหาร</h3>
        </div>

        <form action="{{url('update/add/menu/'.$data['id'])}}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="col-sm-12">
                <div class="col-sm-6">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">รายการอาหาร</label>
                            <input type="text" name="menu" value="{{$data['menu']}}"  class="form-control" placeholder="รายการอาหาร" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">ราคา</label>
                            <input type="text" name="price" value="{{$data['price']}}"  class="form-control" placeholder="รายการอาหาร" required>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword" >ประเภทอาหาร</label>


                            <select name="cars" class="form-control">
                                @php $selected = old('cars',$data['foodcategoryid']); @endphp
                                @if($selected!=null && !starts_with($selected,"id:"))
                                    <option selected>{{$selected}}</option>
                                @endif
                                @foreach($category as $NewfoodCategory)
                                    {{--<option value="{{$NewfoodCategory->foodcategoryid}}">{{$NewfoodCategory->foodcategory_Name}}</option>--}}
                                    {{--แบบแก้ไข--}}
                                    <option {{"id:".$NewfoodCategory->id==$selected?'selected':''}}  value="id:{{$NewfoodCategory->id}}">{{$NewfoodCategory->foodcategory_Name}}</option>

                                    {{--<option value="{{ค่าที่เก็บลงฐาน}}"> แสดงชื่อ</option>--}}
                                @endforeach
                            </select>
                        </div>
                        </select>
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