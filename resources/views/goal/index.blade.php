@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Index')
@section('content')

<div class = 'container'>
    <h1>
        goal Index
    </h1>
    <div class="row">
        <form class = 'col s3' method = 'get' action = '{!!url("goal")!!}/create'>
            <button class = 'btn red' type = 'submit'>Create New goal</button>
        </form>
    </div>
    <table>
        <thead>
            <th>goal_title</th>
            <th>goal_discerption</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($goals as $goal) 
            <tr>
                <td>{!!$goal->goal_title!!}</td>
                <td>{!!$goal->goal_discerption!!}</td>
                <td>
                    <div class = 'row'>
                        <a href = '#modal1' class = 'delete btn-floating modal-trigger red' data-link = "/goal/{!!$goal->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                        <a href = '#' class = 'viewEdit btn-floating blue' data-link = '/goal/{!!$goal->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                        <a href = '#' class = 'viewShow btn-floating orange' data-link = '/goal/{!!$goal->id!!}'><i class = 'material-icons'>info</i></a>
                    </div>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $goals->render() !!}

</div>
@endsection