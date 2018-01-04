<?php include '../includes/header.php'; ?>
  <div class="py-5" style="background-image: url(&quot;https://pingendo.github.io/templates/sections/assets/form_red.jpg&quot;);">
    <div class="container">
      <div class="row">
        <div class="align-self-center col-md-6 text-white">
          <h1 class="text-center text-md-left display-3">Book a table</h1>
          <p class="lead">Why waiting if you can do it online?</p>
        </div>
        <div class="col-md-6" id="book">
          <div class="card">
            <div class="card-body p-5">
              <h3 class="pb-3">Register</h3>
              <form action="https://formspree.io/YOUREMAILHERE">
                <div class="form-group"> <label>Name</label>
                  <input class="form-control" placeholder="Your name, please"> </div>
                <div class="form-group"> <label>Time</label>
                  <input type="time" class="form-control"> </div>
                <div class="form-group"> <label>People</label>
                  <input type="number" class="form-control" placeholder="2"> </div>
                <button type="submit" class="btn mt-2 btn-outline-dark">Reserve</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include '../includes/footer.php'; ?>