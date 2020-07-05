<div class="panel panel-bordered bg-secondary">
    <div class="panel-heading">
        <h3 class="panel-title">
            Travel
        </h3>
    </div>
    <div class="row">

        <div class="col-md-3">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Travel Package
                    </h3>
                </div>
                <div class="panel-body">
                    {{$booking->Travel->Package->name}}
                </div>
            </div>
        </div>
        <div class="col-md-1">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Pax
                    </h3>
                </div>
                <div class="panel-body">
                    {{$booking->Travel->pax}} pax
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Hotel
                    </h3>
                </div>
                <div class="panel-body">
                    {{$booking->Travel->Package->Hotel->name}}
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Start Date
                    </h3>
                </div>
                <div class="panel-body">
                    {{$booking->Travel->start_date}}
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
                    {{$booking->Travel->end_date}}
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
                    {{$booking->Travel->note}}
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
                    {{$booking->Travel->created_at}}
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
                    {{$booking->Travel->updated_at}}
                </div>
            </div>
        </div>
    </div>

</div>