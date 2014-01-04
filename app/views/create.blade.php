@section('buttons')
  <li><a href="#" class="save">Save</a></li>
@stop

@section('content')
  {{ Form::open(['route' => 'store', 'id' => 'paster']) }}
    {{ Form::textarea('paste', isset($fork) ? $fork->paste : null) }}
  @if(isset($fork))
    {{ Form::hidden('fork', $fork->id)}}
  @endif
  <input type="hidden" name="emp_tee" />
  {{ Form::close() }}
@stop

@section('scripts')
  <script>
  $(function()
  {
    $(".save").click(function()
    {
      $("#paster").submit();
      return false;
    });
  });
  </script>
@stop
