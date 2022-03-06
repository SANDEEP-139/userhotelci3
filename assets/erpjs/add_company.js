 $("#Addcompany").validate({
    rules: {
Firstname:"required",
Lastname:"required",
email:"required",
business:"required",
contact:"required",
company_name:"required",
address:"required",
business_type:"required",
message:"required"
     
    },
   messages:{
Firstname:"Please enter Fname",
Lastname:"Please enter Lname",
email:"Please enter Email",
business:"Please enter business",
contact:"Please enter mobno",
companyname:"Please enter companyname",
address:"Please enter Address",
business_type:"Please enter type",
message:"Please enter Message"
    
   }
    
  });