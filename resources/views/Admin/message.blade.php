  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="/assets/js/jquery-message.js"></script>
<x-layout>
 <div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="mb-0">Messages</h2>
    <button type="button" class="btn btn-primary d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#createUserModal">
      <i class="fas fa-user-plus"></i>
      Add Messages
    </button>
  </div>

    <table class="table">
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
    <td>{{ $msgs->email}}</td>
    <td>{{ $msgs->subject}}</td>
    <td>{{ $msgs->message}}</td>
    <td><button type="button" class="btn p-0 border-0 btn-edit" style="outline: none;">
     <i class="fas fa-pen-to-square" style="color: #0d6efd; font-size: 1.25rem;"></i>
    </button></td>
    </tr>
    @endforeach
    </tbody>
    </table>
</x-layout>

@include('modals.messageModal')