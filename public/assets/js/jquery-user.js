  $(function(){
    $.ajaxSetup({
      headers:{
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $(document).on('click','.btn-edit',function(){
      let row = $(this).closest('tr');
      let id = row.find('td').eq(0).text().trim();
      let name = row.find('td').eq(2).text().trim();
      let email = row.find('td').eq(3).text().trim();
      $("#id").val(id);
      $("#name").val(name);
      $("#email").val(email);
      $("#password").val('');

      $("#UpdateUserModal").modal('show');

    });

    $("#UpdateNow").click(function(){
      let id = $("#id").val();
      let name = $("#name").val();
      let password = $("#password").val();
      let email = $("#email").val();

      $.post("/update_user",{
        id : id,
        name : name,
        password : password,
        email : email
      },function(data,status){
        alert("User Update Successfully");
        window.location.href="/user";
      });
    });

    $("#DeleteNow").click(function(){
      let id = $("#id").val();
      $.post("/delete_user",{
        id : id
      },function(data,status){
        alert("User Delete Successfully");
        window.location.href="/user";
      });
    });



  });