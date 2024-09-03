<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </head>
  <body>

    <center>
        <h1>Task 4</h1>
    </center>

        <div class="container">
            <div>
                <center>
                    <label for="" id="success_message" class="text-success"></label>
                </center>
            </div>
            <div class="mb-3">
                <form id="taskForm" enctype="multipart/form-data">
                    <label for="exampleFormControlInput1" class="form-label">Enter Positive Number Only</label>
                    <input type="number" class="form-control" id="number" name="number" placeholder="Enter Positive Number">

                    <div class="form-group">
                    <label for="exampleFormControlInput1" class="form-label"></label>
                      <input class="btn btn-primary" type="submit" id="submit" name= "submit">
                    </div>
                </form>
            </div>
        </div>


        <script>
            $(document).ready(function(){
                $('#taskForm').on('submit', function(event){
                    event.preventDefault();
                    var number = $('#number').val();
                  
                    number =parseInt(number);
                    console.log(typeof(number), "Type");
    
                    if(number <= 0 ){
                        alert("Please enter a positive number");
                        return;
                    }
                    //if number is positive now call the Api with number
                    $.ajax({
                        url  : 'https://jsonplaceholder.typicode.com/photos/' + number,
                        type : 'GET',
                        success:function(data){
                            console.log(data);
                            //save data in our database
                            $.ajax({
                                url  : 'save_data.php',
                                type : 'POST',
                                data:{
                                    albumId      : data.albumId,
                                    id           : data.id,
                                    thumbnailUrl : data.thumbnailUrl,
                                    title       : data.title,
                                    url          : data.url
                                },
                                success:function(Response){
                                    console.log(Response);
                                    $('#success_message').html("Record Inserted Succecefully")
                                },
                                error:function(xhr, status, error){
                                    console.log("Some thing went wrong");
                                    $('#success_message').html("Something Went Wrong")
                                },
                            })
                        },
                        error:function(xhr, status, error){
                            console.error('error fetching data : ', error);
                        }
                    });                   
                    
                });  
            });
        </script>



  </body>
</html>