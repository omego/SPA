@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Edit')
@section('content')

<div class = 'container'>
    <h1>
        Edit initiative_attachment
    </h1>
    <form method = 'get' action = '{!!url("initiative_attachment")!!}'>
        <button class = 'btn blue'>initiative_attachment Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("initiative_attachment")!!}/{!!$initiative_attachment->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="input-field col s6">
            <input id="file_name" name = "file_name" type="text" class="validate" value="{!!$initiative_attachment->
            file_name!!}"> 
            <label for="file_name">file_name</label>
        </div>
        <div class="input-field col s12">
            <select name = 'initiative_id'>
                @foreach($initiatives as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
            <label>initiatives Select</label>
        </div>
        <button class = 'btn red' type ='submit'>Update</button>
    </form>
</div>
@endsection