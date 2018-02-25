@extends('layouts.app')
@section('content')
    @include('projects.add_project')
    @include('projects.manager_list')
    @include('projects.edit_project')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Projects</h4></div>
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="margin: 5px 5px 5px 20px">+ Add Project</a>
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
                                <th scope="col" class="text-center">ID</th>
                                <th scope="col" class="text-center">Name</th>
                                <th scope="col" class="text-center">Price</th>
                                <th scope="col" class="text-center">Performer</th>
                                <th scope="col" class="text-center">Start</th>
                                <th scope="col" class="text-center">End</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($projects as $project)
                                <tr>
                                    <th scope="row" class="text-center">{{$project->id}}</th>
                                    <td class="text-center">{{$project->name}}</td>
                                    <td class="text-center">{{$project->price}}</td>
                                    <td class="text-center">{{$project->performer}}</td>
                                    <td class="text-center">{{$project->start}}</td>
                                    <td class="text-center">{{$project->start}}</td>
                                    <td class="text-right"><button type="button" class="btn btn-info" onclick="my_edit({{$project->id}})"  data-toggle="modal" data-target="#projectedit">Edit</button>
                                        <button id="{{$project->id}}" onclick="my_ajax({{$project->id}},'managers')" type="button" class="btn btn-success " data-toggle="modal" data-target="#managerlist">Managers</button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="12" class="text-center">No Projects Yet</td>
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
            var url = '/project/edit/'+a;
            var data = a;
            console.log(a);
            // e.preventDefault();
            $.ajax({
                type: 'GET',
                url: url,
                data: data,
                dataType: 'json',
                success: function (data) {
                    console.log(data);
                    document.getElementById('name_up').value=data.name;
                    document.getElementById('id_up').value=data.id;
                    document.getElementById('price_up').value=data.price;
                    document.getElementById('performer_up').value=data.performer;
                    document.getElementById('start_up').value=data.start;
                    document.getElementById('finish_up').value=data.finish;
                    // document.getElementById('photo_up').value=data.photo;
                }
            })
        }
    });
</script>
@endsection

