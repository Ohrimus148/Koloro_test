<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">New Manager</h4>
            </div>
                <div class="modal-body">
                    <form action="{{URL::to('/manager/store')}}" method="POST" id="form-insert" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="phone" name="phone"  id="phone"class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="">Company</label>
                            <input type="text" name="company" id="company" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="">Photo</label>
                            <input type="file" name="photo" id="photo" class="form-control" required>
                        </div>
                    </div>
                <div class="modal-footer">
                    <div class="col-md-10">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success" id="submit">save</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
