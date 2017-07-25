@extends(config('content-builder-js.default_layout'))

@section('content')

	@include('content-builder-js::parts.tpl_add_block_btn')

	<div class="box box-primary">
    	<div class="box-body">
			<div class="table-responisve">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Block name</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						@if (isset($blocks))
							@foreach ($blocks as $block)
								<tr>
									<td>
										<a href="{{ route('cb_block.edit',$block->id) }}">{!! $block->name !!}</a><br />
									</td>
									<td>
										<a href="{{ route('cb_block.edit',$block->id) }}" class="btn btn-sm btn-primary"><i class="icon ion-edit"></i></a>
										<a href="{{ route('cb_block.delete',$block->id) }}" onclick="return confirm('Confirm permanent deletion?')" class="btn btn-sm btn-danger"><i class="icon ion-trash-a"></i></a>
									</td>
								</tr>
							@endforeach
						@endif

					</tbody>
				</table>
			</div>
	   	</div>
   	</div>




	@include('content-builder-js::parts.tpl_add_block_btn')

@stop