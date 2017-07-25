<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajax request with jQuery</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
    <script src="../js/lb/jquery.js"></script>
    <script src="../js/main.js"></script>
</head>
<body>
<main>
    <?php 
     foreach($select as $info) {
         echo $info["id"];
     }
        
    ?>
    <section class="container"> 
        <h1>Ajax request with jQuery</h1>
        <span id="status"></span><br><br>
        <form id="AjaxRequest" method="POST">
        
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" placeholder="Name">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label>Telephone</label>
                <input type="text" class="form-control" name="tel" placeholder="Telephone">
            </div>
            <button type="submit" class="btn btn-info" name="sub">Submit</button>
        </form>
        <span id="status1"> </span><br><br>
        <h3 align='center'>Paginacao de Contatatos</h3><br>
        <div class="row">
            <table id="contacts" class="table" scope="row">
                <thead><tr><th>#</th><th>Name</th><th>Email</th><th>Telephone</th></tr></thead><tr>
                
            </table>
        </div>
    </section>
</main>
    

</body>
</html>