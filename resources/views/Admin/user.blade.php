 <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="/assets/js/jquery-user.js"></script>

<x-layout>

  <div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="mb-0">Users</h2>
    <button type="button" class="btn btn-primary d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#createUserModal">
      <i class="fas fa-user-plus"></i>
      Add User
    </button>
  </div>
<div class="table-responsive">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Other</th>
      </tr>
    </thead>
    <tbody>
      <?php $i=1 ?>
<?php $i = 1; ?>
@foreach ($users as $row)
<tr>
  <td class="d-none">{{ $row->id }}</td>
  <td>{{ $i++ }}</td>
  <td>{{ $row->name }}</td>
  <td>{{ $row->email }}</td>
  <td>
    @if ($user->email == 'admin@gmail.com')
      <button type="button" class="btn p-0 border-0 btn-edit" style="outline: none;">
        <i class="fas fa-pen-to-square text-primary fs-5"></i>
      </button>
    @else
      @if ($row->email == 'admin@gmail.com')
        <button type="button" class="btn p-0 border-0 btn-edit" style="outline: none; opacity: 0.5; cursor: not-allowed;" disabled>
          <i class="fas fa-pen-to-square text-primary fs-5"></i>
        </button>
      @else
        <button type="button" class="btn p-0 border-0 btn-edit" style="outline: none;">
          <i class="fas fa-pen-to-square text-primary fs-5"></i>
        </button>
      @endif
    @endif
  </td>
</tr>
@endforeach
    </tbody>
  </table>
</div>
</x-layout>
@include('modals.userModal')


