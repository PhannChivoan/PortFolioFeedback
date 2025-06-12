    $(function(){

      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
      });
         $(document).on('click','.btn-edit',function(){
      
      let row = $(this).closest('tr');
      let id = row.find('td').eq(0).text().trim();
      let name = row.find('td').eq(2).text().trim();
      let email = row.find('td').eq(3).text().trim();
      let subject = row.find('td').eq(4).text().trim();
      let message = row.find('td').eq(5).text().trim();
      $("#id").val(id); 
      $("#name").val(name);
      $("#email").val(email);
      $("#Subject").val(subject);
      $("#Message").val(message);
      $("#UpdateUserModal").modal('show');
    });

    $("#UpdateNow").click(function(){
      let id = $("#id").val();
      let name = $("#name").val();
      let email = $("#email").val();
      let subject = $("#Subject").val();
      let message = $("#Message").val();
      $.post("/update_msg",{
        id:id,
        name : name,
        email : email,
        Subject : subject,
        Message : message
      },function(data,status){
        alert("Message Update Successfully!");
        window.location.href="/getmessage";
      });      
    });
    $("#DeleteNow").click(function(){
      let id = $("#id").val();
        $.post("/delete_msg",{
        id:id
      },function(data,status){
        alert("Message Delete Successfully!");
        window.location.href="/getmessage";
      });      
    });




    });