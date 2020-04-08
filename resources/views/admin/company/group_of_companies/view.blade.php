@extends('layouts.admin')

@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
    <script>
        function isNumberKey(evt){
            var charCode = (evt.which) ? evt.which : evt.keyCode
            return !(charCode > 31 && (charCode < 48 || charCode > 57));
        }
    </script>
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">
                        <h2>{{isset($pageTitle)?$pageTitle:''}} [ {{$count}} ]</h2>

                    </div>


                    <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                        <a href="{{route('admin.group_of_companies_add')}}" class="btn btn-primary btn-lg"><i class="fa fa-plus-square"></i> Add</a>
                    </div>
                </div>
            </div>


            @if ($message = Session::get('view_msg'))
                {!! $message !!}
            @endif

            <hr/>

            <div class="row clearfix">



                @if(count($result)==0)
                    <div class="card">
                        <table class="table table-bordered">
                            <tr>
                                <th colspan="8" style=" text-align: center;">

                                    <div class="alert alert-warning">
                                        <h5><i class="fa fa-warning"></i> not found!</h5>

                                    </div>

                                </th>
                            </tr>

                        </table>
                    </div>
                @endif

                @foreach($result as $index => $item)
                    <div class="col-lg-3 col-md-6" align="center">
                        <div class="card" >
                            <img class="card-img-top" style="max-height: 100%;max-width: 100%;width: 100%;height: 200px;object-fit: contain" src="{{url('assets/images/group_of_companies/'.$item->image)}}" alt="Card image cap">

                            <div class="card-body">
                                <a href="{{route('admin.group_of_companies_edit',$item->id)}}"
                                   class="btn btn-info btn-sm" title="Edit"><i class="fa fa-edit"></i></a>
                                <a onclick="del_itm('{{route('admin.group_of_companies_delete',$item->id)}}')" href='javascript:void(0)' class='btn btn-danger btn-sm'
                                   data-toggle='modal' data-target='#del_itm_Modal' data-keyboard='false'
                                   data-backdrop='static'><i class='fa fa-trash-o'></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <hr/>
                <nav aria-label="Page navigation example">

                    {{$result->links()}}
                </nav>
            </div>
        </div>
    </div>
@endsection
