<div class="modal fade" id="projectedit" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close"
                        data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Edit
                </h4>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <form action="{{URL::to('/project/update')}}" method="POST" id="form-insert">
                    {{ csrf_field() }}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="modal-body">
                        <div class="col-md-10">
                            <div class="form-group">
                                <label for="">Project name</label>
                                <input type="text" name="name" id="name_up" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group">
                                <label for="">Price</label>
                                <input type="text" name="price" id="price_up"class="form-control">
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group">
                                <label for="">Performer</label>
                                <input type="text" name="performer"  id="performer_up"class="form-control">
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group">
                                <label for="">Start</label>
                                <input type="date" name="start" id="start_up" class="form-control" >
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group">
                                <label for="">Finish</label>
                                <input type="date" name="finish" id="finish_up" class="form-control">
                            </div>
                        </div>
                        <input type="hidden" name="id" id="id_up">
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
            <!-- Modal Footer -->

            </div>
        </div>
    </div>
</div>