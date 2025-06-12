<!-- Add Message Modal -->
  <form action="/addmessage " method="POST">
<x-modal id="createUserModal" title="Add User">

    @csrf
    <div class="mb-3">
      <label>Name</label>
      <input type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
      <label>Email</label>
      <input type="text" name="email" class="form-control">
    </div>
    <div class="mb-3">
      <label>Subject</label>
      <input type="text" name="Subject" class="form-control">
    </div>
    <div class="mb-3">
      <label>Message</label>
      <input type="text" name="Message" class="form-control">
    </div>
    @slot('footer')
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      <button type="submit" class="btn btn-primary">Create</button>
    @endslot

</x-modal>
  </form>
<!-- End of update message modal -->

<!-- Update Modal -->
<x-modal id="UpdateUserModal" title="Update User">

    <input type="hidden" id="id">

    <div class="mb-3">
      <label>Name</label>
      <input type="text" id="name" class="form-control">
    </div>
    <div class="mb-3">
      <label>Email</label>
      <input type="text" id="email" class="form-control">
    </div>
    <div class="mb-3">
      <label>Subject</label>
      <input type="text" id="Subject" class="form-control">
    </div>
    <div class="mb-3">
      <label>Message</label>
      <input type="text" id="Message" class="form-control">
    </div>
    @slot('footer')
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      <button type="button" class="btn btn-primary" id="UpdateNow">Update</button>
      <button type="button" class="btn btn-danger " id="DeleteNow">Delete</button>
    @endslot

</x-modal>
  <!-- end of message modal -->