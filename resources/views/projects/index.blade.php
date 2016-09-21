@extends('layouts.app')

@section('content')
    <h2>Projects</h2>
 
    @if ( !$projects->count() )
        You have no projects
    @else
    <table border = 1>
        <col width="130">
        <col width="180">
            @foreach( $projects as $project )
                <tr>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('projects.destroy', $project->slug),'onsubmit' => 'return ConfirmDelete()')) !!}
                    <td>
                        <a href="{{ route('projects.show', $project->slug) }}">{{ $project->name }}</a>
                    </td>
                    <td>
                        (
                            {!! link_to_route('projects.edit', 'Edit', array($project->slug), array('class' => 'btn btn-info')) !!},
                            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                        )
                    </td>
                    {!! Form::close() !!}
                </tr>
            @endforeach
        </table>
    @endif
 
    <p>
        {!! link_to_route('projects.create', 'Create Project') !!}
    </p>
@endsection
 

<script>

  function ConfirmDelete()
  {
  var x = confirm("Are you sure you want to delete?");
  if (x)
    return true;
  else
    return false;
  }

</script>