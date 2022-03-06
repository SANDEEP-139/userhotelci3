 $("#Addsupplier").validate({
    rules: {
category:"required",
name:"required",
credit_period:"required",
pan:"required",
opening_balance:"required",
contact_person_name:"required",
address:"required",
country:"required",
state:"required",
city:"required",
status:"required"

    },
   messages:{
category:"Please enter category",
name:"Please enter name",
credit_period:"Please enter credit_period",
pan:"Please enter  select pan",
opening_balance:"Please enter opening_balance",
contact_person_name:"Please enter contact_person_name",
address:"Please enter address",
country:"Please enter country",
state:"Please enter state",
city:"Please enter city",
status:"Please enter status"

   }
    
  });
  
  
   $("#addcustomer").validate({
    rules: {
category:"required",
name:"required",
credit_period:"required",
pan:"required",
opening_balance:"required",
contact_person_name:"required",
address:"required",
country:"required",
state:"required",
city:"required",
status:"required"

    },
   messages:{
category:"Please enter category",
name:"Please enter name",
credit_period:"Please enter credit_period",
pan:"Please enter  select pan",
opening_balance:"Please enter opening_balance",
contact_person_name:"Please enter contact_person_name",
address:"Please enter address",
country:"Please enter country",
state:"Please enter state",
city:"Please enter city",
status:"Please enter status"

   }
    
  });