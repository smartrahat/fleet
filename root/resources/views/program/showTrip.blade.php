        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Trips</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

<!-- Modal -->
            <div class="modal-body">

                {{--Table Start--}}

                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-condensed mb-none">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Date</th>
                            <th>Serial Number</th>
                            <th>Driver Name</th>
                            <th>Vehicle</th>
                            <th>Loading</th>
                            <th>Unloading</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($trips as $trip)
                            <tr>
                                <td>{{ $trip->id }}</td>
                                <td>{{ $trip->program->date->format('Y-m-d') }}</td>
                                <td>{{ $trip->program->serial }}</td>
                                <td>{{ $trip->driver->name }}</td>
                                <td>{{ $trip->vehicle->vehicleNo }}</td>
                                <td>{{ $trip->loading }}</td>
                                <td>{{ $trip->unloading }}</td>
                                <td>
                                    <a href="{{ action('TripController@cancelTrip',$trip->id) }}" target="_blank" role="button" class="btn btn-warning"><i class="fa fa-power-off"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{--Table End--}}
                </div>
                {{--<div class="modal-footer">--}}
                    {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
                    {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
                {{--</div>--}}
            </div>
           {{--Bootstrap modal end--}}
        </div>

