@extends('layouts.app')

@section('content')

  <div class="page-content row">
    <!-- Page header -->
    <div class="page-header">
      <div class="page-title">
        <h1> {{ $pageTitle }}<small>{{ $pageNote }}</small></h1>
      </div>
      
	  	  
    </div>
 
 	<div class="page-content-wrapper">

		<ul class="parsley-error-list">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
<div class="sbox animated fadeInRight">
	<div class="sbox-title"> <h4> <i class="fa fa-table"></i> </h4></div>
	<div class="sbox-content"> 	

		 {!! Form::open(array('url'=>'bank/save?return='.$return, 'class'=>'form-vertical','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
<ul class="nav nav-tabs"><li class="active"><a href="#bank" data-toggle="tab">bank</a></li>
				</ul><div class="tab-content"><div class="tab-pane m-t active" id="bank"> 
									
								  <div class="form-group hidethis " style="display:none;">
									<label for="ipt" class=" control-label "> Id    </label>									
									  {!! Form::text('id', $row['id'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 						
								  </div> 					
								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> Account Holder  <span class="asterix"> * </span>  </label>									
									  {!! Form::text('account_holder', $row['account_holder'],array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true'  )) !!} 						
								  </div> 					
								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> Bank Name  <span class="asterix"> * </span>  </label>									
									  <select name='bank_name' rows='5' id='bank_name' class='select2 ' required  ></select> 						
								  </div> 					
								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> Account Type  <span class="asterix"> * </span>  </label>									
									  <select name='account_type' rows='5' id='account_type' class='select2 ' required  ></select> 						
								  </div> 					
								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> Account No  <span class="asterix"> * </span>  </label>									
									  {!! Form::text('account_no', $row['account_no'],array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true', 'parsley-type'=>'number'   )) !!} 						
								  </div> 					
								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> Branch Code  <span class="asterix"> * </span>  </label>									
									  {!! Form::text('branch_code', $row['branch_code'],array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true', 'parsley-type'=>'number'   )) !!} 						
								  </div> 					
								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> Branch Name  <span class="asterix"> * </span>  </label>									
									  {!! Form::text('branch_name', $row['branch_name'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 						
								  </div> 					
								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> Active  <span class="asterix"> * </span>  </label>									
									  
					<?php $active = explode(',',$row['active']);
					$active_opt = array( 'Active' => 'Active' ,  'Inactive' => 'Inactive' , ); ?>
					<select name='active' rows='5' required  class='select2 '  > 
						<?php 
						foreach($active_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['active'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 						
								  </div> 
			</div>
			
			

		
			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-info btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-primary btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
					<button type="button" onclick="location.href='{{ URL::to('bank?return='.$return) }}' " class="btn btn-success btn-sm "><i class="fa  fa-arrow-circle-left "></i>  {{ Lang::get('core.sb_cancel') }} </button>
					</div>	  
			
				  </div> 
		 
		 {!! Form::close() !!}
	</div>
</div>		 
</div>	
</div>			 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		$("#bank_name").jCombo("{{ URL::to('bank/comboselect?filter=tb_bank_master:name:name') }}",
		{  selected_value : '{{ $row["bank_name"] }}' });
		
		$("#account_type").jCombo("{{ URL::to('bank/comboselect?filter=tb_bank_acc_types:name:name') }}",
		{  selected_value : '{{ $row["account_type"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop