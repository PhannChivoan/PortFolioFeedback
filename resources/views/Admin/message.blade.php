  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="/assets/js/jquery-message.js"></script>
<x-layout>
  @if ($user->email === 'admin@gmail.com')
 <div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="mb-0">Messages</h2>
    <button type="button" class="btn btn-primary d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#createUserModal">
      <i class="fas fa-user-plus"></i>
      Add Messages
    </button>
  </div>
  @else
   <div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="mb-0">Messages</h2>
    <button type="button" disabled class="btn btn-primary d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#createUserModal">
      <i class="fas fa-user-plus"></i>
      Add Messages
    </button>
  </div>
  @endif
    <div class="table-responsive">
    <table class="table table-hover">
    <thead>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Message</th>
        <th>Other</th>
    </thead>
    <tbody>
        <?php $i=1?>
    @foreach ($msg as $msgs)

    <tr>
    <td class="d-none">{{ $msgs->id }}</td>
    <td>{{$i++}}</td>
    <td>{{ $msgs->name}}</td>
        <td>
    @if ($user->email === 'admin@gmail.com')
      {{ $msgs->email }}
    @else
      ***
    @endif
  </td>
        <td>
    @if ($user->email === 'admin@gmail.com')
      {{ $msgs->subject }}
    @else
      ***
    @endif
  </td>
    <td>
    @if ($user->email === 'admin@gmail.com')
      {{ $msgs->message }}
    @else
      ***
    @endif
  </td>
    <td>
    @if ($user->email === 'admin@gmail.com')
      <button type="button" class="btn p-0 border-0 btn-edit" style="outline: none;">
        <i class="fas fa-pen-to-square" style="color: #0d6efd; font-size: 1.25rem;"></i>
      </button>
    @else
      <button type="button" class="btn p-0 border-0 btn-edit" style="outline: none; opacity: 0.5; cursor: not-allowed;" disabled>
        <i class="fas fa-pen-to-square" style="color: #0d6efd; font-size: 1.25rem;"></i>
      </button>
    @endif
  </td>

    </tr> 
    @endforeach
    </tbody>
    </table>
</div>
</x-layout>

@include('modals.messageModal')