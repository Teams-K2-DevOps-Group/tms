@include('header')
<h2 class="py-5">List of Project</h2>
  <table>
    <thead>
    <tr>
      <th>S/N</th>
      <th>Title</th>
      <th>Description</th>
      <th>Assign To</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
    </thead>
    <tbody>
        @if($tasks->count() > 0)
        @foreach ($tasks as $task)
    <tr>
      <td> {{ $loop->iteration }}</td>
      <td>{{ $task->name }}</td>
      <td >{{ Str::words($task->description, 5, '...')  }}</td>
      <td >{{ $task->task_assigned_to }}</td>
      <td >{{ $task->status }}</td>
      <td><a class="btn bg-yellow-800" href="">View</a>
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