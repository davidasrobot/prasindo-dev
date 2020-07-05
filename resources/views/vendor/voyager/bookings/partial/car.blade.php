<div class="panel panel-bordered bg-secondary">
    <div class="panel-heading">
        <h3 class="panel-title">
            Car
        </h3>
    </div>
    <div class="row">

        <div class="col-md-3">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Car Name
                    </h3>
                </div>
                <div class="panel-body">
                    {{$booking->Car->Package->name}}
                </div>
            </div>
        </div>
        {{-- <div class="col-md-3">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Days
                    </h3>
                </div>
                <div class="panel-body">
                    {{$booking->Car->days}} Days
                </div>
            </div>
        </div> --}}
        <div class="col-md-3">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Start Date
                    </h3>
                </div>
                <div class="panel-body">
                    {{$booking->Car->start_date}}
                </div>
            </div>
        </div>

        {{-- <div class="col-md-3">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        End Date
                    </h3>
                </div>
                <div class="panel-body">
                    {{$booking->Car->end_date}}
                </div>
            </div>
        </div> --}}

    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Note
                    </h3>
                </div>
                <div class="panel-body">
                    {{$booking->Car->notes}}
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Created At
                    </h3>
                </div>
                <div class="panel-body">
                    {{$booking->Car->created_at}}
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Updated At
                    </h3>
                </div>
                <div class="panel-body">
                    {{$booking->Car->updated_at}}
                </div>
            </div>
        </div>
    </div>

</div>