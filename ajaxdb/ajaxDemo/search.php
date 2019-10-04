<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <title>Search </title>
</head>
<body>


    <script>
        $(document).ready(function(){
            $('#search').keyup(function(){
                var search=$('#search').val();
                $.ajax({
                    url:'searchinDb.php',
                    data:{search:search},
                    type:'POST',
                    success:function(data){
                        if(!data.error){
                            $('#result').html(data);
                        }
                    }
                })
            })
        })
    </script>

    <input type="text" id="search" placeholder="Search anything">
    <h1 id="result"></h1>
</body>
</html>