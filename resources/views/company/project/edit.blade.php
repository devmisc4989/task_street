@extends('company.main')
	@section('body')
		<div class="container-fluid menu-hidden">
			@include('company.sidebar')
			<div id="content">
				@include('company.header')
				<div class="col-sm-10 col-sm-offset-1" >
					<div class="widget row widget-inverse">
	
						<!-- Widget heading -->
						<div class="widget-head">
							<h4 class="heading">Edit Project</h4>
						</div>
						<!-- // Widget heading END -->
						
						<div class="widget-body">
							<div class="innerLR">
								<form class="form-horizontal" action="{!! URL::route('project.store') !!}" role="form" method="post">
								<input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
								<input type="hidden" name="project_id" value="{!! $projects->id !!}">
			                       @foreach ([
			                            'name' => 'Name',
			                            'description' => 'Description',
			                            'skills' => 'Skills',
			                            'environment' => 'Environment',
			                            'difficulty' => 'Difficulty',
			                            'status' => 'Status',
			                        ] as $key => $value)
			                        <div class="form-group">
		                                <div class="col-sm-2">
		                                    <label class="col-sm-2 control-label">{!! Form::label($key, $value) !!}</label>
		                                </div>
		                                <div class="col-sm-10">
			                                @if ($key === 'description') 
		                                		{!! Form::textarea($key, $projects->{$key}, ['class' => 'form-control'], ['size' => '95x5']) !!}                       
		                                    @else
		                                   		{!! Form::text($key, $projects->{$key}, ['class' => 'form-control']) !!}
		                                   	@endif
		                                </div>
			                        </div>
			                        @endforeach
			                        <div class="row margin-bottom-xs">
			                            <div class="col-sm-4 col-sm-offset-4">
			                                <button type="submit" class="btn btn-default margin-bottom-xs" style="margin-left: 34%;" >Register</button>
			                                <a href="{!! URL::route('project') !!}" class="btn btn-info pull-right margin-bottom-xs">Cancel</a>
			                            </div>
			                        </div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	@stop

	@section('custom-scripts')

	@stop
@stop
