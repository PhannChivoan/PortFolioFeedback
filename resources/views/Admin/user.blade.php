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
      @foreach ($users as $user)
      <tr>
        <td class="d-none">{{ $user->id }}</td>
        <td>{{$i++}}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
          <button type="button" class="btn p-0 border-0 btn-edit" style="outline: none;">
            <i class="fas fa-pen-to-square text-primary fs-5"></i>
          </button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

</x-layout>
@include('modals.userModal')


