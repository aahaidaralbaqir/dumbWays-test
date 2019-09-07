$(document).ready(() => {
   $(document).on('click','#saveCategory',() => {
      let name = $("#name").val();
      if(name == ""){
         alert('Name field cannot be null....');
      }else{
         $.ajax({
            url : 'database/functions.php',
            type : 'POST',
            dataType: 'JSON',
            data : {name}
         })
         .done(res => {
            let {message} = res;
            alert(message);
            setTimeout(() => {
               window.location='index.php';
            },2500)
         })
         .catch(err => console.log(err));
      }
   }) ;  
});