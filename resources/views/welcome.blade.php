@extends('layout')

@section('content')
    <div id="app">
        <notification></notification>
        <form>
            <input v-model="firstData">
            <p>Your first data is @{{ firstData }}
        </form>

        <div class="row">
            <h3>The First Row</h3>
            <div class="col-xs-12 col-sm-6 col-md-3 well">Responsive column 1</div>
            <div class="col-xs-12 col-sm-6 col-md-3 well">Responsive column 2</div>
            <div class="col-xs-12 col-sm-6 col-md-3 well">Responsive column 3</div>
            <div class="col-xs-12 col-sm-6 col-md-3 well">Responsive column 4</div>                               
        </div>
    </div>

@endsection