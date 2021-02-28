<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <!-- Title of the page -->
  <title>SignUp</title>
</head>

<body>
  <!-- Alert blocks to show the alerts regarding the submission of the form -->
  <!-- success alert block -->
  <div class="alert alert-success alert-dismissible fade show" role="alert" id="success">
    <strong>Query Submitted!</strong> Our support team will contact you soon.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <!-- failure alert block -->
  <div class="alert alert-danger alert-dismissible fade show" role="alert" id="failure" >
    <strong>Something went wrong!</strong> Please try after some time.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  
  <!-- contact form container -->
  <div class="container my-5 p-2">
    <!-- Heading -->
    <h2>Contact SearchHomesIndia Admin</h2>

    <!-- Form container -->
    <form class="my-2 row g-3" action="#" id="Contactform">
      <!-- Name block -->
      <div class="col-md-6">
        <!-- Name Label -->
        <label for="name" class="form-label">Enter your Name:</label>
        <!-- Name input box -->
        <input type="text" class="form-control" id="name" name="name" placeholder="Your name..">
        <!-- Name valid or invalid checker div's -->
        <div class="valid-feedback">
          Looks good!
        </div>
        <div class="invalid-feedback">
          Please Enter a valid Name.
        </div>
      </div>

      <!-- Email block -->
      <div class="col-md-6">
        <!-- Email block -->
        <label for="email" class="form-label">Enter your E-mail:</label>
        <!-- Email input box -->
        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email..">
        <!-- Email valid or invalid checker div's -->
        <div class="valid-feedback">
          Looks good!
        </div>
        <div class="invalid-feedback">
          Please Enter a valid Email-Address.
        </div>
      </div>

      <!-- Contact number block -->
      <div class="col-12">
        <!-- Contact label -->
        <label for="phone" class="form-label">Enter your Contact Number:</label>
        <!-- Contact inout box -->
        <input type="tel" class="form-control" id="phone" name="phone">
        <!-- Contact valid or invalid checker div's -->
        <div class="valid-feedback">
          Looks good!
        </div>
        <div class="invalid-feedback">
          Please Enter a valid Contact Number.
        </div>
      </div>

      <!-- Address block -->
      <div class="col-12">
        <!-- Address label -->
        <label for="Address" class="form-label">Address:</label>
        <!-- Address input box -->
        <input type="text" class="form-control" id="address" name="address" placeholder="Your Address..">
        <!-- Address valid or invalid checker div's -->
        <div class="valid-feedback">
          Looks good!
        </div>
        <div class="invalid-feedback">
          Please Enter a valid Address.
        </div>
      </div>

      <!-- Message block -->
      <div class="col-12">
        <!-- Message label -->
        <label for="Message" class="form-label">Enter your Message:</label>
        <!-- Message textarea -->
        <textarea class="form-control" name="message" id="message" cols="5" rows="10" style="resize: none;"
          placeholder="Your Message..."></textarea>
      </div>
      <!-- Message valid or invalid checker div's -->
      <div class="valid-feedback">
        Looks good!
      </div>
      <div class="invalid-feedback">
        Please Enter a valid Message.
      </div>

      <!-- Submit button -->
      <div class="col-12">
        <button type="submit" id="submit" class="btn btn-primary">Submit</button>
      </div>

    </form>
  </div>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
    crossorigin="anonymous"></script>


<!-- SignUp validation javascript -->
<script src="Signup.js"></script>
</body>
</html>