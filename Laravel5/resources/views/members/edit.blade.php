@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($member, ['route' => ['members.update', $member->id], 'method' => 'patch']) !!}

        @include('members.fields')

    {!! Form::close() !!}
</div>
@endsection
