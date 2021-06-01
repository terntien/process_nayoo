<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรแกรมคำนวณเงิน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        body{
            background:#ff867f4f;
        }
        .content{
            background-color:#f3f3f3bf;
            padding:60px;
            margin-top:60px;
            color:black;
            border-radius: 40px;
            box-shadow: 0px 0px 15px -5px;

        }
        h3{
            padding-bottom:10px;
        }

    </style>
</head>

<body>
<div class="col-md-6 offset-3 content">
    <h3>โปรแกรมคำนวณสินค้า</h3><br>
    <form action="model.php" method="POST">
        <div class="mb-3">
            <label for="" class="form-label">ราคาสินค้า :</label>
            <input type="text" class="form-control" name="price" >
        </div>
        <div class="mb-3">
            <label for="" class="form-label">จำนวนเงิน :</label>
           <input type="text" class="form-control" name="amout" >
        </div>
        <button type="submit" class="btn btn-primary">คำนวณ</button>
    </form>
    
    

    </div>
</body>
</html>