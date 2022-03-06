 
 $("#addproduct").validate({
    rules: {
Item_code:"required",
Item_name:"required",
fabric_category:"required",
fabric_subcategory:"required",
fabric_type:"required",
select_print_type:"required",
select_color:"required",
price:"required",
quantity:"required",
about_the_item:"required",
thread_count:"required",
construction:"required",
gram:"required",
floor_number:"required",
rack_number:"required",
fabric:"required",
weave:"required",
uploadfile:"required"
    },
   messages:{
Item_code:"Please enter code",
Item_name:"Please enter Item name",
fabric_category:"Please enter select category",
fabric_subcategory:"Please enter  select subcategory",
fabric_type:"Please enter fabric type",
select_print_type:"Please enter select print type",
select_color:"Please enter select color",
price:"Please enter price",
quantity:"Please enter quantity",
about_the_item:"Please enter about the item",
thread_count:"Please enter thread_count",
construction:"Please enter construction",
gram:"Please enter gram",
floor_number:"Please enter floor number",
rack_number:"Please enter rack number",
fabric:"Please enter fabric",
weave:"Please enter weave",
uploadfile:"Please enter Upload image"
   },
    
  });