<?php
require_once ('repository/SuggestionTypeRepo.php');
$suggestionTypeRepo = new SuggestionTypeRepo();
$allTypes = $suggestionTypeRepo->getAll();

?>


 <html>
 <head>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 </head>

 <body>

  
 <form id="form" method="post">
   <select name="suggestion" id="suggestion">
     <?php
     foreach ($allTypes as $row) { ?>
         <option value="<?php echo $row['id']?>"><?php echo $row['name'] ?></option>
       <?php }
     ?>
   </select><br>
   <textarea name="fname" id="fname" rows="8" cols="80"></textarea>
   <input id="in" type="submit" value="submit" onclick="submitdata()">
 </form>


 <script type="text/javascript">

     function submitdata(){
         $.ajax({
                 type: "POST",
                 url: "submitSugession.php",
                 data:{"fname":$("#fname").val(),"suggestion":$("#suggestion").val()},
                 success:function(response){
                   alert(response);
                 }
           });
     }

 </script>


 </body>
 </html>
