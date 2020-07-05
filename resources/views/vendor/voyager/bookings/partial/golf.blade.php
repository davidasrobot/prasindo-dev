<div class="panel panel-bordered bg-secondary">
    <div class="panel-heading">
        <h3 class="panel-title">
            Golf
        </h3>
    </div>
    <div class="row">

        <div class="col-md-4">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Golf Package
                    </h3>
                </div>
                <div class="panel-body">
                    {{$booking->Golf->Package->name}}
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Pax
                    </h3>
                </div>
                <div class="panel-body">
                    {{$booking->Golf->pax}} pax
                </div>
            </div>
        </div>
        {{-- <div class="col-md-2">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Days
                    </h3>
                </div>
                <div class="panel-body">
                    {{$booking->Golf->days}} Days
                </div>
            </div>
        </div> --}}
        <div class="col-md-4">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Start Date
                    </h3>
                </div>
                <div class="panel-body">
                    {{$booking->Golf->start_date}}
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
                    {{$booking->Golf->end_date}}
                </div>
            </div>
        </div> --}}

    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Hotel
                    </h3>
                </div>
                <div class="panel-body">
                    {{$booking->Golf->Package->hotel->name}}
                </div>
            </div>
        </div>
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
                    {{$booking->Golf->note}}
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
                    {{$booking->Golf->created_at}}
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
                    {{$booking->Golf->updated_at}}
                </div>
            </div>
        </div>
    </div>

</div>