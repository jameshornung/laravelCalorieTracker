@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Would you like to add a meal?</div>
                    <div class="panel-body">
                        <a href="/meal/create"><p>Add Meal</p></a>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection