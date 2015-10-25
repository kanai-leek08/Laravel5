@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'members.store']) !!}

        @include('members.fields')

    {!! Form::close() !!}
</div>
@endsection
