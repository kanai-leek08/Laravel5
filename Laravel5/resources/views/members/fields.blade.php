<!--- Name Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!--- Age Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('age', 'Age:') !!}
    {!! Form::text('age', null, ['class' => 'form-control']) !!}
</div>

<!--- Gender Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('gender', 'Gender:') !!}
    {!! Form::text('gender', null, ['class' => 'form-control']) !!}
</div>

<!--- Skill Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('skill', 'Skill:') !!}
    {!! Form::text('skill', null, ['class' => 'form-control']) !!}
</div>

<!--- Detail Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('detail', 'Detail:') !!}
    {!! Form::text('detail', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
