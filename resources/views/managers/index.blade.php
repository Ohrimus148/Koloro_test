@extends('layouts.app')
@section('content')
    @include('managers.add_manager')
    @include('managers.edit_manager')
    @include('managers.project_list')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Managers</h4></div>
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="margin: 5px 5px 5px 20px">+ Add Manager</a>
                        </div>
                        <div class="col-md-6">
                            <div class="text-right">
                                 <a class="btn btn-danger btn-lg" href="/home" style="margin: 5px 20px 5px 5px">Dashboard</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table table-striped">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col" class="text-center">#</th>
                                <th scope="col" class="text-center">Name</th>
                                <th scope="col" class="text-center">Email</th>
                                <th scope="col" class="text-center">Phone</th>
                                <th scope="col" class="text-center">Company</th>
                                <th scope="col" class="text-center">Photo</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($managers as $manager)
                                <tr>
                                    <th scope="row">{{$manager->id}}</th>
                                    <td class="text-center">{{$manager->name}}</td>
                                    <td class="text-center">{{$manager->email}}</td>
                                    <td class="text-center">{{$manager->phone}}</td>
                                    <td class="text-center">{{$manager->company}}</td>
                                    <td class="text-center"><img src="/uploads/files/{{$manager->photo}}"  height="100" width="100" /></td>
                                    <td class="text-right"><button type="button" onclick="my_edit({{$manager->id}})" class="btn btn-info" data-toggle="modal" data-target="#myModal_2">Edit</button>
                                        <button id="{{$manager->id}}" onclick="my_ajax({{$manager->id}},'projects')" type="button" class="btn btn-success " data-toggle="modal" data-target="#projectlist">Projects</button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="12" class="text-center">No Managers Yet</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("extra_scripts")
    <script type="text/javascript">
    $(document).ready(function(){
    $('#excelDataTable').innerHTML = '';
    $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    //------- Output of prroject list----------
    window.my_edit=function(a) {
    var url = '/manager/edit/'+a;
    var data = a;
    console.log(a);
    // e.preventDefault();
    $.ajax({
    type: 'GET',
    url: url,
    data: data,
    dataType: 'json',
    success: function (data) {
        document.getElementById('name_up').value=data.name;
        document.getElementById('id_up').value=data.id;
        document.getElementById('email_up').value=data.email;
        document.getElementById('phone_up').value=data.phone;
        document.getElementById('company_up').value=data.company;
        // document.getElementById('photo_up').value=data.photo;
        console.log(data);
    }
    })
    }
    });
    </script>
@endsection