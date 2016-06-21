@extends('layouts.app')


@section('content')

<script type="text/javascript" src="{{ asset('sximo/js/plugins/chartjs/Chart.min.js') }}"></script>
<div class="page-content row">
	<div class="page-header">
	  <div class="page-title">
		<h2><i class="fa fa-desktop"></i> Dashboard</h2>
	  </div>
		  
	</div>
	<div class="page-content-wrapper">  
	
	
	@if(Auth::check() && Auth::user()->group_id == 1)

<section>
	<div class="row m-l-none m-r-none m-t  white-bg shortcut " >
		<div class="col-sm-6 col-md-3 b-r  p-sm ">
			<span class="pull-left m-r-sm text-navy"><i class="fa fa-plus-circle"></i></span> 
			<a href="{{ URL::to('sximo/module') }}" class="clear">
				<span class="h3 block m-t-xs"><strong>  {{ Lang::get('core.dash_i_module') }}  </strong>
				</span> <small class="text-muted text-uc">  {{ Lang::get('core.dash_module') }}</small>
			</a>
		</div>
		<div class="col-sm-6 col-md-3 b-r  p-sm">
			<span class="pull-left m-r-sm text-info">	<i class="fa fa-cogs"></i></span>
			<a href="{{ URL::to('sximo/config') }}" class="clear">
				<span class="h3 block m-t-xs"><strong> {{ Lang::get('core.dash_i_setting') }}</strong>
				</span> <small class="text-muted text-uc">   {{ Lang::get('core.dash_setting') }} </small> 
			</a>
		</div>
		<div class="col-sm-6 col-md-3 b-r  p-sm">
			<span class="pull-left m-r-sm text-warning">	<i class="fa fa-sitemap"></i></span>
			<a href="{{ URL::to('sximo/menu') }}" class="clear">
			<span class="h3 block m-t-xs"><strong>  {{ Lang::get('core.dash_i_sitemenu') }} </strong></span>
			<small class="text-muted text-uc">  {{ Lang::get('core.dash_sitemenu') }}  </small> </a>
		</div>
		<div class="col-sm-6 col-md-3 b-r  p-sm">
			<span class="pull-left m-r-sm ">	<i class="fa fa-users"></i></span>
			<a href="{{ URL::to('core/users') }}" class="clear">
			<span class="h3 block m-t-xs"><strong> {{ Lang::get('core.dash_i_usergroup') }}</strong>
			</span> <small class="text-muted text-uc">  {{ Lang::get('core.dash_usergroup') }} </small> </a>
		</div>
	</div> 
</section>	
@endif

	
</div>	
	
</div>


<!-- ================= This information will be displayed for users who are not part of the admin group======================= -->
 <!-- START WIDGETS -->                    
<div class="row-widgets">
                        <div class="col-md-3">
                            
                            <!-- START WIDGET SLIDER -->
                            <div class="widget widget-success widget-item-icon">
                                    <div class="widget-item-left">
                                    	<span class="fa fa-money"></span>
                                	</div>
                                    <div class="widget-data">
	                                    <?php  $donations = DB::table ('tb_donations')->sum('amount'); ?>
	                                    <div class="widget-int">R {{ number_format((float) $donations)  }} </div>
                                        <div class="widget-title">Total Donations </div>
                                        <div class="widget-subtitle">Total Contributions between members</div>
                                    </div>
                                <div class="widget-controls">                                
                                    
                                </div>                             
                            </div>         
                            <!-- END WIDGET SLIDER -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET MESSAGES -->
                            <div class="widget widget-default widget-item-icon">
                                <div class="widget-item-left">
                                    <span class="fa fa-envelope"></span>
                                </div>                             
                                <div class="widget-data">
	                                <?php  $commissions = DB::table ('tb_commissions')->sum('commission'); ?>
	                                <div class="widget-int num-count">R {{ number_format((float) $commissions)  }} </div>
		                                <div class="widget-title">Commissions Paid</div>
                                    <div class="widget-subtitle">Commissions Paid to Sponsors</div>
                                </div>      
                                <div class="widget-controls">                                
                                </div>
                            </div>                            
                            <!-- END WIDGET MESSAGES -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-default widget-item-icon">
                                <div class="widget-item-left">
                                    <span class="fa fa-user"></span>
                                </div>
                                <div class="widget-data">
	                                <?php $members = DB::table ('tb_users')->count('id'); ?>
                                    <div class="widget-int num-count"> {{ $members  }}  </div>
                                    <div class="widget-title">Registered Nobles</div>
                                    <div class="widget-subtitle">Our KINGDOM is growing</div>
                                </div>
                                <div class="widget-controls">                                
                                </div>                            
                            </div>                            
                            <!-- END WIDGET REGISTRED -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET CLOCK -->
                            <div class="widget widget-info widget-padding-sm">
                                <div class="widget-big-int plugin-clock">00:00</div>                            
                                <div class="widget-subtitle plugin-date">Loading...</div>
                                <div class="widget-controls">                                
                                </div>                            
                                <div class="widget-buttons widget-c3">
                                    <div class="col">
                                        <a href="#"><span class=""></span></a>
                                    </div>
                                    <div class="col">
                                        <a href="#"><span class=""></span></a>
                                    </div>
                                    <div class="col">
                                        <a href="#"><span class=""></span></a>
                                    </div>
                                </div>                            
                            </div>                        
                            <!-- END WIDGET CLOCK -->
                            
                        </div>
                    </div>
                    <!-- END WIDGETS -->

    <!-- ==== Timeline -->


    <!-- END timeline item -->

    ...



@stop