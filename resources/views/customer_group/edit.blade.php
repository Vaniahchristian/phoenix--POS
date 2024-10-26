<div class="modal-dialog tw-font-sans" role="document">
  <div class="modal-content">

    {!! Form::open(['url' => action('CustomerGroupController@update', [$customer_group->id]), 'method' => 'PUT', 'id' => 'customer_group_edit_form' ]) !!}

    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title">@lang( 'lang_v1.edit_customer_group' )</h4>
    </div>

    <div class="modal-body">
      <div class="form-group">
        {!! Form::label('name', __( 'lang_v1.customer_group_name' ) . ':*') !!}
        {!! Form::text('name', $customer_group->name, ['class' => 'form-control', 'required', 'placeholder' => __( 'lang_v1.customer_group_name' )]); !!}
      </div>
      <div class="form-group">
            {!! Form::label('price_calculation_type', __( 'lang_v1.price_calculation_type' ) . ':') !!}
            {!! Form::select('price_calculation_type',['percentage' => __('lang_v1.percentage'), 'selling_price_group' => __('lang_v1.selling_price_group')], $customer_group->price_calculation_type, ['class' => 'form-control']); !!}
      </div>
      <div class="form-group percentage-field @if($customer_group->price_calculation_type != 'percentage') hide @endif">
        {!! Form::label('amount', __( 'lang_v1.calculation_percentage' ) . ':') !!}
        @show_tooltip(__('lang_v1.tooltip_calculation_percentage'))
        {!! Form::text('amount', @num_format($customer_group->amount), ['class' => 'form-control input_number','placeholder' => __( 'lang_v1.calculation_percentage')]); !!}
      </div>

      <div class="form-group selling_price_group-field @if($customer_group->price_calculation_type != 'selling_price_group') hide @endif">
            {!! Form::label('selling_price_group_id', __( 'lang_v1.selling_price_group' ) . ':') !!}
            {!! Form::select('selling_price_group_id', $price_groups, $customer_group->selling_price_group_id, ['class' => 'form-control']); !!}
      </div>

    </div>

    <div class="modal-footer">
      <button type="submit" class="btn btn-primary">@lang( 'messages.update' )</button>
      <button type="button" class="btn btn-default" data-dismiss="modal">@lang( 'messages.close' )</button>
    </div>

    {!! Form::close() !!}

  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->