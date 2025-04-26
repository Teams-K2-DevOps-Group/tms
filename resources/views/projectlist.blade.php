@include('header')
<h2 class="py-5">List of Project</h2>
  <table>
    <thead>
    <tr>
      <th>Title</th>
      <th>Description</th>
      {{-- <th>Start Date</th>
      <th>Stop Date</th> --}}
      <th>Status</th>
      <th>Action</th>
    </tr>
    </thead>
    <tbody>
        @if($projects->count() > 0)
        @foreach ($projects as $project)
    <tr>
      <td>{{ $project->name }}</td>
      <td >{{ Str::words($project->description, 10, '...')  }}</td>
      <td >{{ $project->status }}</td>
      <td><a class="btn bg-yellow-800" href="{{ route('managingtask', ['project_id' => $project->id]) }}">Create Task</a>
      </td>
    </tr>
    @endforeach
    @else
    <p>You have not created any projects yet.</p>
@endif
    </tbody>
  </table>

</body>
</html>