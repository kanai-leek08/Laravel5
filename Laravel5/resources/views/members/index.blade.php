@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Members</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('members.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($members->isEmpty())
                <div class="well text-center">No Members found.</div>
            @else
                <table class="table">
                    <thead>
                    <th>Name</th>
			<th>Age</th>
			<th>Gender</th>
			<th>Skill</th>
			<th>Detail</th>
                    <th width="50px">Action</th>
                    </thead>
                    <tbody>

                    @foreach($members as $member)
                        <tr>
                            <td>{!! $member->name !!}</td>
					<td>{!! $member->age !!}</td>
					<td>{!! $member->gender !!}</td>
					<td>{!! $member->skill !!}</td>
					<td>{!! $member->detail !!}</td>
                            <td>
                                <a href="{!! route('members.edit', [$member->id]) !!}">update<i class="glyphicon glyphicon-edit"></i></a>
                                <a href="{!! route('members.delete', [$member->id]) !!}" onclick="return confirm('Are you sure wants to delete this Member?')">delete<i class="glyphicon glyphicon-remove"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
