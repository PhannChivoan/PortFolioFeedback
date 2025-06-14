<!-- Add Modal -->
 <form action="/user/adduser" method="POST">
    @csrf
 <x-modal id="createUserModal" title="Add User">
    
    <div class="mb-3">
      <label>Username</label>
      <input type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
      <label>email</label>
      <input type="email" name="email" class="form-control">
    </div>
    @error('email')
    <p class="text-red-500">{{ $message }}</p>
    @enderror
    <div class="mb-3">
      <label>password</label>
      <input type="text" name="password" class="form-control">
    </div>
     @error('password')
    <p class="text-red-500">{{ $message }}</p>
    @enderror
    @slot('footer')
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      <button type="submit" class="btn btn-primary">Create</button>
    @endslot

</x-modal>
  </form>
  <!-- End of added modal -->

  <!-- Update Modal -->
 <x-modal id="UpdateUserModal" title="Update User">
    <input type="hidden" id="id"/>
    <div class="mb-3">
      <label>Username</label>
      <input type="text" id="name" class="form-control">
    </div>
    <div class="mb-3">
      <label>email</label>
      <input type="email" id="email" class="form-control">
    </div>
    <div class="mb-3">
      <label>password</label>
      <input type="text" id="password" class="form-control">
    </div>
    @slot('footer')
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      <button type="button" id="UpdateNow" class="btn btn-primary">Update</button>
       <button type="button" id="DeleteNow" class="btn btn-danger">Delete</button>
    @endslot

</x-modal>
  <!-- End of updated modal -->