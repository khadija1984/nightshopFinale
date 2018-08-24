{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('panier_id', 'Panier_id:') !!}
			{!! Form::text('panier_id') !!}
		</li>
		<li>
			{!! Form::label('product_id', 'Product_id:') !!}
			{!! Form::text('product_id') !!}
		</li>
		<li>
			{!! Form::label('prix', 'Prix:') !!}
			{!! Form::text('prix') !!}
		</li>
		<li>
			{!! Form::label('qte', 'Qte:') !!}
			{!! Form::text('qte') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}