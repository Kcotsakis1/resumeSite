@extends('layouts.app')


@section('content')
 <div class="container">
          <div class="row justify-content-lg-center">
            <div class="col-lg-8 text-center pv-20">
              <br>
              <h1 class="title large">Contact</h1>
              
              <p class="large">Thanks for viewing my site! If you would like to get in contact with me fill out the form below!</p>
            </div>
          </div>
        </div>
      <hr>
<div class="container">
  <div class="row">
  <div class="col-sm-10 col-md-7 col-lg-8">

{!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
      {{Form::label('name', 'Name')}}
      {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter Name'])}}
    </div>
    <div class="form-group">
      {{Form::label('email', 'Email Address')}}
      {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter Email'])}}
    </div>
    <div class="form-group">
      {{Form::label('message', 'Message')}}
      {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Enter Message'])}}
    </div>
    <div class="form-group">
      {{Form::submit('submit', ['class' => 'btn btn-primary'])}}
       </div>
    
{!! Form::close() !!}
</div>
<div class="col-sm-2 col-md-5 col-lg-4">
   <h2>Find Me</h2>
      <ul class="list-icons">
        <li>Kate Cotsakis</li>
        <li>Salt Lake City, UT</li>
        <li>(972) 800-8906</li>
      </ul>
      <br>
       <h2 class="title">Follow Me</h2>
            <a target="_blank" href="https://www.facebook.com/Kathryn.Cotsakis" class="fa fa-facebook">  </a>
            <a target="_blank" href="https://github.com/Kcotsakis1" class="fa fa-github">  </a>
            <a target="_blank" href="https://www.linkedin.com/in/katharyn-cotsakis-3050b1109/" class="fa fa-linkedin">  </a>
  </div>

</div>
</div>

@endsection