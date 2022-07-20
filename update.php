<?php

require_once 'action/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM Library WHERE library_id = {$id}";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $title = $data['title'];
        $photo = $data['photo'];
        $isbn = $data['isbnean'];
        $type= $data['type'];
        $firstname = $data['autor_first_name'];
        $lastname = $data['autor_last_name'];
        $publishername = $data['publisher_name'];
        $publisheraddres = $data['publisher_addres'];
        $publisherdate = $data['publisher_date'];
        $availability = $data['availability'];
        $shortdescription = $data['short_description'];
     
    
    } else {
        header("location: error.php");
    }
    mysqli_close($conn);
} else {
   header("location: error.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Products</title> 
        <link rel="stylesheet" href="css/style.scss">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     
        
    </head>
    <body class="bbc">
    
        <?php require_once 'components/boot.php' ?>
        
        <div class="container ">
            <div class="row text-center justify-content-center">
               
                <div class="col-12 nsl">
                    <h1 style=" margin: 5% auto">Update</h1>
                </div>
                <div class="col-6 ">
                    <div>
                        <img style="width:400px; height:450px; margin: 0 auto 10% auto; border-radius:50% " src='pictures/<?php echo $photo ?>' alt="<?php echo $photo ?>">
                    </div>
                </div>

            </div>
        
        


        <fieldset>
            <form action="action/a_update.php"  method="post" enctype="multipart/form-data">
                <table class="table text-dark mx-auto" style="width:70%;  ">
                            <tr>
                                <th>Title</th>
                                <td><input class='form-control' type="text" name="title" placeholder="Product Name"  value="<?php echo $title ?>"  /></td>
                            </tr>    
                            <tr>
                                <th>ISBN</th>
                                <td><input class='form-control' type="number" name= "isbnean" placeholder="Price" step="any"   value="<?php echo $isbn ?>"  /></td>
                            </tr>
                            <tr>
                                <th>Type (Music, Book, Movie)</th>
                                <td><input class='form-control' type="text" name="type" placeholder="Type"  value="<?php echo $type ?>"  /></td>
                            </tr> 
                            <tr>
                                <th>Author First Name</th>
                                <td><input class='form-control' type="text" name="autor_first_name" placeholder="first"   value="<?php echo $firstname ?>"  /></td>
                            </tr>   
                            <tr>
                                <th>Author Last Name</th>
                                <td><input class='form-control' type="text" name="autor_last_name" placeholder="last" value="<?php echo $lastname ?>" /></td>
                            </tr>     
                            <tr>
                                <th>Publisher Name</th>
                                <td><input class='form-control' type="text" name="publisher_name" placeholder="Publisher Name" value="<?php echo $publishername ?>" /></td>
                            </tr>       
                            <tr>
                                <th>Publisher Adress</th>
                                <td><input class='form-control' type="text" name="publisher_addres" placeholder="Publisher Address" value="<?php echo $publisheraddres ?>" /></td>
                            </tr>      
                            <tr>
                                <th>Publisher Date</th>
                                <td><input class='form-control' type="number" name="publisher_date" placeholder="Publisher Date" value="<?php echo $publisherdate ?>" /></td>
                            </tr>       
                            <tr>
                                <th>Availability</th>
                                <td><input class='form-control' type="text" name="availability" placeholder="Availability" value="<?php echo $availability ?>" /></td>
                            </tr>      
                            <tr>
                                <th>Description</th>
                                <td><input class='form-control' type="text" name="short_description" placeholder="Short Description" value="<?php echo $shortdescription ?>" /></td>
                            </tr>     
                            <tr>
                                <th>Picture</th>
                                <td><input class='form-control' type="file" name="photo"  /></td>
                            </tr>
                    <tr>
                        <input type= "hidden" name= "id" value= "<?php echo $data['library_id'] ?>" /> 
                        <input type= "hidden" name= "photo" value= "<?php echo $data['photo'] ?>" />
                        <td><button class="btn btn-success" type= "submit">Save Changes</button></td>
                        <td><a href= "index.php"><button class="btn btn-primary" type="button">Back</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset> <br> <br>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>
