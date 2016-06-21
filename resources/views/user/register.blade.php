@extends('layouts.login')

@section('content')
<div class="sbox">
<div class="sbox-title">
			
				<h1 >REGISTER NOW</h1>
				
	</div>
	
	<div class="sbox-content">
	<div class="text-center  animated fadeInDown delayp1">
		<img src="{{ asset('sximo/images/Mzansi-Empire-Logo.png')}}"  />
	</div>		
 {!! Form::open(array('url'=>'user/create', 'class'=>'form-horizontal form-label-left')) !!}
	    	@if(Session::has('message'))
				{!! Session::get('message') !!}
			@endif
		<ul class="parsley-error-list">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	
	<div class="form-group has-feedback">
		<label class="control-label col-md-3 col-sm-3 col-xs-12">{{ Lang::get('core.username') }}</label>
		<div class="col-md-9">
	   <input type="text" class="form-control" name="username" value="{{ old('username') }}" required data-parsley-minlength="6" maxlength="20"/>
		</div>
	</div>

	<div class="form-group has-feedback ">
		<label class="control-label col-md-3 col-sm-3 col-xs-12">{{ Lang::get('core.firstname') }}	 </label>
		<div class="col-md-9">
	  {!! Form::text('firstname', null, array('class'=>'form-control', 'placeholder'=>'First Name' ,'required'=>'' )) !!}
	  </div>
	</div>
	
	<div class="form-group has-feedback ">
		<label class="control-label col-md-3 col-sm-3 col-xs-12">{{ Lang::get('core.lastname') }}	 </label>
		<div class="col-md-9">
	 {!! Form::text('lastname', null, array('class'=>'form-control', 'placeholder'=>'Last Name','required'=>'')) !!}
	 </div>
	</div>
	
	<div class="form-group has-feedback ">
		<label class="control-label col-md-3 col-sm-3 col-xs-12">{{ Lang::get('core.email') }}	 </label>
		<div class="col-md-9">
	 {!! Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email Address','required'=>'email')) !!}
	 </div>
	</div>
	
	<div class="form-group has-feedback ">
		<label class="control-label col-md-3 col-sm-3 col-xs-12">{{ Lang::get('core.password') }}	</label>
		<div class="col-md-9">
	 {!! Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password','required'=>'')) !!}
	 </div>
	</div>
	
	<div class="form-group has-feedback ">
		<label class="control-label col-md-3 col-sm-3 col-xs-12">{{ Lang::get('core.repassword') }}	</label>
		<div class="col-md-9">
	 {!! Form::password('password_confirmation', array('class'=>'form-control', 'placeholder'=>'Confirm Password','required'=>'')) !!}
	 </div>
	</div>

	<div class="form-group has-feedback ">
		<label class="control-label col-md-3 col-sm-3 col-xs-12">{{ Lang::get('core.gender') }}	</label>
		<div class="col-md-9">
		 <select class="form-control" name="gender" value="{{ Request::old('gender') }}" required />
            <option disabled="selected">Select Gender</option>
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
        </select>
        </div>
	</div>

	<div class="form-group has-feedback ">
		<label class="control-label col-md-3 col-sm-3 col-xs-12">{{ Lang::get('core.phone') }}	 </label>
		<div class="col-md-9">
	 <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" required data-parsley-type="number" data-parsley-minlength="10" maxlength="10" />
	 </div>
	</div>

	<div class="form-group has-feedback ">
		<label class="control-label col-md-3 col-sm-3 col-xs-12">{{ Lang::get('core.age') }}	 </label>
		<div class="col-md-9">
	 <input type="text" class="form-control" name="age" value="{{ old('age') }}" required type="number" data-parsley-range="[18, 100]"/>
	 </div>
	</div>

	<div class="form-group has-feedback ">
		<label class="control-label col-md-3 col-sm-3 col-xs-12">{{ Lang::get('core.province') }}	 </label>
			<div class="col-md-9">
				  <select class="form-control" name="province" value="{{ Request::old('province') }}" required >
			        <option disabled="selected">Select Province</option>
			        <option >Eastern Cape</option>
			        <option >Free State</option>
			        <option >Gauteng</option>
			        <option >KwaZulu Natal</option>
			        <option >Limpopo</option>
			        <option >Mpumalanga</option>
			        <option >Northen Cape</option>
			        <option >North West</option>
			        <option >Western Cape</option>
			    </select>
		 	</div>
	</div>

	<div class="form-group has-feedback ">
		<label class="control-label col-md-3 col-sm-3 col-xs-12">{{ Lang::get('core.referrer') }}	 </label>
		<div class="col-md-9">
	 <input type="email" class="form-control" name="referrer" value="{{ old('referrer') }}" required>
	 </div>
	</div>

	<div class="form-group has-feedback ">
		<label class="control-label col-md-3 col-sm-3 col-xs-12"> </label>
		<div class="col-md-9">
	 <input type="checkbox" name="terms" value="terms" required/> I agree to the <a href="#">MzansiEmpire Terms & Conditions </a>
	 </div>
	</div>

    @if(CNF_RECAPTCHA =='true') 
    <div class="form-group has-feedback  animated fadeInLeft delayp1">
        <label class="text-left"> Are u human ? </label>    
        <br />
        {!! captcha_img() !!} <br /><br />
        <input type="text" name="captcha" placeholder="Type Security Code" class="form-control" required/>

        <div class="clr"></div>
    </div>
    @endif						

      <div class="row form-actions">
        <div class="col-sm-12">
          <button type="submit" style="width:100%;" class="btn btn-primary pull-right"><i class="icon-user-plus"></i> {{ Lang::get('core.signup') }}	</button>
       </div>
      </div>
	  <p style="padding:10px 0" class="text-center">
	  <a href="{{ URL::to('user/login')}}"> {{ Lang::get('core.signin') }}  </a> | <a href="{{ URL::to('')}}"> {{ Lang::get('core.backtosite') }}  </a> 
   		</p>
 {!! Form::close() !!}
 </div>
</div> 
@stop
