<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="favicon.ico">
   <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" >
   <link rel="stylesheet" href="style.css">   
   <title>Order Form</title>
   <style>
      body{
         background-image: url("images/contact/b2.jpg");
         background-size: cover;
      }
      .thank{
         margin-left: 33%;
      }
   </style>
</head>
<body>
   <div class="container-fluid" style="height: 680px; background-color: rgba(241, 204, 101, 0.979); border-radius:10px;width: 65vw; margin-top: 100px;">
      <br><h1 style=" text-align: center; color: rgba(66, 51, 3, 0.726);">Order</h1>
      <form  action="submit_order.php" method="POST">
         <div class="row" style="margin-left: 25px; margin-right: 25px;">
            <div class="col">
               <label for="Name">First Name</label>
               <input type="text" name="firstname" class="form-control" placeholder="First Name">
            </div>
            <div class="col">
               <label for="Name">Last Name</label>
               <input type="text" name="lastname" class="form-control" placeholder="Last Name" >
            </div>
         </div><br>
         <div class="row" style="margin-left: 25px; margin-right: 25px;">
            <div class="col">
               <label for="email">Email address:</label>
               <input type="text" name="emailid" class="form-control" placeholder="Enter email" >
            </div>
            <div class="col ">
               <label for="Phone">Mobile Number:</label>
               <input type="text" name="phoneno" class="form-control" placeholder="Enter number" >
            </div>
         </div><br>
         <div class="row" style="margin-left: 30px; margin-right: 30px;">
            <div class="col">
               <label for="address"> Delivery Address</label>
               <input type="text" name="daddress" class="form-control" placeholder="Address" >
            </div>
            <div class="col">
               <label for="Name">Pin Code</label>
               <input type="text" name="pincode" class="form-control" placeholder="pin code">
            </div>
         </div><br>
         <div class="row" style="margin-left:25px; margin-right: 25px;">
            <div class="col">
               <label for="Name">Item Name</label>
               <?php $itemname = $_GET['itemname'] ?? ''; ?>
               <input type="text" class="form-control"  name="itemname" value="<?php echo htmlspecialchars($itemname); ?>" >
            </div> 
            <div class="col">
               <label for="Name">City</label>
               <input type="text" name="cityname" class="form-control" placeholder=" Enter your city">
            </div>
         </div><br>
         <div class="row" style="margin-left:25px; margin-right: 25px; border-radius:10px;"> 
            <div class="col">
               <label for="quantity">Quantity</label>
               <input type="number"  name="quantity" class="form-control">
            </div>
         </div><br>
         <div class="row" style="margin-left:25px; margin-right: 25px; border-radius:10px;"> 
            <div class="col">
               <label for="Payment">Payment Method</label>
               <?php $payment = 'cash on delivery' ?? ''; ?>
               <input type="text" class="form-control"  name="payment"  value="<?php echo htmlspecialchars($payment); ?>" >
            </div>
         </div><br>
         <div class="container" > 
            <div class="row" style="flex-wrap: nowrap;">
               <div class="col" style=" margin-left: 360px;">
                  <button type="submit" name="Submit" class="btn btn-light"  >Submit</button>
               </div>
               <div class="col" style="margin-right: 450px;">
                  <button type="reset" name="cancel" class="btn btn-light" >Cancel</button>
               </div>
            </div> 
         </div>
      </form>
   </div><br><br><br>
</body>
</html>