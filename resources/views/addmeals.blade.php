@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Add Meals</div>

                <div class="panel-body">
                    <form action="/user/{{ $user->id }}/meals" method="POST">
                        Name of Meal: <input type="text"  />
                        Calories: <input type='decimal'  />
                        <input type="submit" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection