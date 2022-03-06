 $("#Addworker").validate({
    rules: {
      name:"required",
      username:"required",
      email:"required",
      password:"required"
     
    },
   messages:{
    name:"Please enter name",
    username:"Please enter user",
    email:"Please enter Email",
    password:"Please enter password"
    
   }
    
  });