<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">

  <title>Contact Us </title>
</head>

<body>
  <?php include 'nav.php' ?>
  <section class="container-fluid">
    <div class="col py-4">
      <h2 class="text-center">Contact Us</h2>

    </div>
    <div class="row">

      <div class="col-lg-6 col-md-6 col-sm-12 my-3 p-4 border">
        <form action="#" class="w-60 m-auto px-5 ">
          <div class="form-group">
            <label for="fullName">Full Name:</label>
            <input type="text" name="fullName" class="form-control" placeholder="Enter Full Name" id="fullName" required>
          </div>
          <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" name="email" class="form-control" placeholder="Enter email" id="email" required>
          </div>
          <div class="form-group">
            <label for="comment">Comment:</label>
            <textarea name="comment" class="form-control" placeholder="Enter your Commetns/feedback" id="commnet" cols="30" rows="5" required></textarea>
          </div>
          <button type="submit" class="btn  btn-dark">Submit</button>
        </form>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 my-3 p-4 border">
        <h5 class="mb-3">Working address: </h5>
        <p>C/O Furniture world, Opp. Police Station,Shiv-Shakti Nagar, Wadi, Amravati Road, Nagpur--440023</p>

        <h5>Registered Address: </h5>
        <p>Vijay W. Matte,104,B-Wing,Jayanti Nagri-3,New Manish Nagar,Beltarodi-440035</p>
        <h5 class="mb-3">Mail: <small >info@urbanrun.in</small></h5>
        <h5> Website: <small> www.urbanrun.in</small></h5>

      </div>
    </div>
  </section>

  <?php include 'footer.php' ?>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>

</html>