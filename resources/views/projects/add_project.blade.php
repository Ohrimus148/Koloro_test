<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">New Project</h4>
            </div>
            <form action="{{URL::to('/project/store')}}" method="POST" id="form-insert">
                {{ csrf_field() }}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-body">
                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="">Project name</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="">Price</label>
                            <input type="text" name="price" id="price"class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="">Performer</label>
                            <input type="text" name="performer"  id="performer"class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="">Start</label>
                            <input type="date" name="start" id="start" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="">Finish</label>
                            <input type="date" name="finish" id="finish" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success" id="submit">save</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">

                </div>

            </form>
        </div>
    </div>
</div>
</div>
