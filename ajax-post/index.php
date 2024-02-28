<<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="Description" content="Enter your description here" />
        <link rel="stylesheet" href="css/style.css">
        <title>Ajax-Post</title>
    </head>

    <body>
        <div id="main">
            <div id="header">
                <h1> Ajax Post Methode In PHP </h1>
            </div>
            <div id="table-data">
                <form id="form-data">
                    <table>
                        <tr>
                            <td>
                                <lable for=""> First_Name </lable>
                            </td>
                            <td> <input type="text" name="sname" id="first_name"> </td>
                        </tr>
                        <tr>
                            <td>
                                <lable for=""> Last_Name </lable>
                            </td>
                            <td> <input type="text" name="lname" id="last_name"> </td>
                        </tr>
                        <tr>
                            <td> </td>
                            <td> <input type="button" value="sumbit" id="save"> </td>
                        </tr>
                    </table>
                </form>
                <div id="response"> </div>
            </div>
        </div>


        <script src="js/jquery.js"></script>
        <script>
         
         $(document).ready(function(){
          
            $("#save").click(function(){
                  var first_name = $("#first_name").val();
                  var  last_name = $("#last_name").val();
                // alert(first_name + last_name);
                if(first_name == "" || last_name == ""){
                   // alert("please insert data");
                    $("#response").fadeIn(1000)
                    $("#response").removeClass("success-message").addClass("error-message").html("All Feild are Required");
                      
                }else{
                    $.post(
                        'insert.php',
                          $("#form-data").serialize(),
                           function(data){
                            if(data){
                                 $("#form-data").trigger("reset");
                                 $("#response").fadeIn()
                                 $("#response").html(data);
                                    setTimeout(function(){
                                    $("#response").fadeOut(); 
                                    },3000);

                            }else{
                                 $("#response").fadeIn()
                                 $("#response").html("Record Cant Insert Successfully");
                                 setTimeout(function(){
                                    $("#response").fadeOut(); 
                                   },3000);
                                }
                            }
                    );
                }
            });
         });


        </script>
    </body>

    </html>