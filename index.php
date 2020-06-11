<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>
<body>
<nav class="navbar navbar-dark bg-dark">

<span class="navbar-brand mb-0 h1">Rumah Makan Sinar Minang Balige</span>



</nav>


<div class="row">
<div class="col-sm-3">
<div class="container">
<div class="list-group-item list-group-item-action active">Item</div>


<div class="panel-body bg-dark" style="color : white">

<form id="frm-project">
<div class="form-group">

    <div>
        <img src="images/drink-1.jpg" id="Es Teh"  class="photo" width="100" height="100" data-toggle="modal" data-target="#exampleModal">
        <b>Es Teh</b>
</div>

<div>
        <img src="images/img-01.jpg" id="Rendang" class="photo" width="100" height="100" data-toggle="modal" data-target="#exampleModal"> 
        <b>Rendang</b>
</div>

<div>
        <img src="images/img-08.jpg" id="Kue" class="photo" width="100" height="100" data-toggle="modal" data-target="#exampleModal">
        <b>Kue</b>
</div>

<div>
        <img src="images/fruit-1.jpg" id="MixFruit" class="photo" width="100" height="100" data-toggle="modal" data-target="#exampleModal"> 
        <b>MixFruit</b>
</div>

<div>
        <img src="images/qt-bg.jpg" id="Babi Kecap" class="photo" width="100" height="100" data-toggle="modal" data-target="#exampleModal">
        <b>Babi Kecap</b>
</div>

<div>
        <img src="images/img-02.jpg" id="Paket Komplit" class="photo" width="100" height="100" data-toggle="modal" data-target="#exampleModal">
        <b>Paket Komplit</b>
</div>

<div>
        <img src="images/menu-3.jpg" id="Nasi Ayam" class="photo" width="100" height="100" data-toggle="modal" data-target="#exampleModal">
        <b>Nasi Ayam</b>
</div>

<div>
        <img src="images/slider-02.jpg" id="Paket Komplit" class="photo" width="100" height="100" data-toggle="modal" data-target="#exampleModal">
        <b>Paket Komplit</b>
</div>
</div>
</form>
</div>
</div>
</div>

<div class="col-sm-6">
    <div class="container">
    <div class="list-group-item list-group-item-action active">AddProducts</div>
    <table id="tbl-item" class="table table-dark table-border" cellpadding="0" cellspacing="0" width="100%" allign="center">
        <thead>

        <tr>
            <th>Delete</th>
            <th>Item</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Total</th>         
</tr>

<tbody>

</tbody>

    </table>
    </div>
</div>

<div class="col-sm-3">
<div class="list-group-item list-group-item-action active">Bill</div>
<div>
    <label>Total</label>
   <input type="text" style="color: yellow; background: black; font-size: 30px;" id="total" name="total" placeholder="Total" required>
</div>
</br>

<div>
    <input type="button" class="btn btn-warning" value="reset" name="reset" id="reset">
        </div>

    </div>

</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Qty</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div>
   <input type="number" style="color: yellow; background: black; font-size: 30px;" id="qty" name="qty" placeholder="Qty" required>
</div> 
      </div>





      <div class="modal-footer">
      <input type="button" class="btn btn-Info" value="Add" name="add" id="add" onclick="add()">
      </div>
    </div>
  </div>
</div>

<script src="component/jquery/jquery-3.5.1.min"></script>
<script src="component/jquery/jquery-3.5.1.min"></script>

<script>

    var total = 0;
    var tot = 0;

    var item = null;
    var price = 0;

    var a = "";

    $("img").on("click",function()
        {

            a = $(this).prop('id')

        });

        function add()
        {
            if(a == "Es Teh")
        {

            item = "Es Teh";
            price = 32;

        }
        else if
        (a == "Rendang")
        {
            item = "Rendang";
            price = 35; 
        }

        else if
        (a == "Kue")
        {
            item = "Kue";
            price = 40; 
        }

        else if
        (a == "MixFruit")
        {
            item = "MixFruit";
            price = 45; 
        }

        else if
        (a == "Babi Kecap")
        {
            item = "Babi Kecap";
            price = 50; 
        }

        else if
        (a == "Paket Komplit")
        {
            item = "Paket Komplit";
            price = 120; 
        }

        else if
        (a == "Nasi Ayam")
        {
            item = "Nasi Ayam";
            price = 18; 
        }

        else if
        (a == "Paket Komplit")
        {
            item = "Paket Komplit";
            price = 100; 
        }

        var qty = $('#qty').val();
        tot = qty * price;

        var table1 = 

            "<tr>" +
            "<td><button type='button' name='record' class='btn btn-warning' onclick='deleterow(this)'>Delete</td>" + 
            "<td>" + item + "</td>" +
            "<td>" + price + "</td>" +

            "<td>" + qty + "</td>" +

            "<td>" + tot + "</td>" +

            "</tr>";

            total += Number(tot);
            $('#total' ).val(total);


            $("table tbody").append(table1);
            $("exampleModal").modal('toggle');
            $('#qty').val("1");

        }

        function deleterow(e)
        {
            total_cost = parseInt($(e)).parse().find('td:last'.text(),10);
            total -= total_cost;
            $('#total').val(total);
            $(e).parent().parent().remove();


        }

        $('#reset').click(function()
        {
            location.reload();
        });







   

        

    </script>





</body>

</html>