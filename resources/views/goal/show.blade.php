@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Show')
@section('content')

<div class = 'container'>
    <h1>
        Show goal
    </h1>
    <form method = 'get' action = '{!!url("goal")!!}'>
        <button class = 'btn blue'>goal Index</button>
    </form>
    <table class = 'highlight bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <b><i>goal_title : </i></b>
                </td>
                <td>{!!$goal->goal_title!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>goal_discerption : </i></b>
                </td>
                <td>{!!$goal->goal_discerption!!}</td>
            </tr>
            <tr><td>P#</td>
                <td>
                     {!!$ProjectCount!!}
                </td>
            </tr>
             <tr><td>I#</td>
                <td>
                @foreach($goal->initiatives as $initiative)
                     {!!$initiative->id!!}
                @endforeach
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection