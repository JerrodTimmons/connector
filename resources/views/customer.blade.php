<!doctype html>
<html>

   <head>
      <title>Customer Management | Add</title>
   </head>
   
   <body>
      <form action = "/createcustomer" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      
         <table>
            <tr>
               <td>Customer ID</td>
               <td><input type='text' name='stud_name' /></td>
            </tr>
            <tr>
               <td>First Name</td>
               <td><input type='text' name='stud_name' /></td>
            </tr>
            <tr>
               <td>Last Name</td>
               <td><input type='text' name='stud_name' /></td>
            </tr>
            <tr>
               <td>Transaction ID</td>
               <td><input type='text' name='stud_name' /></td>
            </tr>
            <tr>
               <td>Points</td>
               <td><input type='text' name='stud_name' /></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Add customer"/>
               </td>
            </tr>
         </table>
			
      </form>
   
   </body>
</html>