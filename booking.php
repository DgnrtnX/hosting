<!DOCTYPE html>
<html lang="en">
  <head>
  <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
  <link type="text/css" rel="stylesheet" href="css/style2.css" />

    <title>BOOKING</title>
  </head>

  <body>
    <div id="booking" class="section">
      <div class="section-center">
        <div class="container">
          <div class="row">
            <div class="booking-form">
              <div class="form-header">
                <h1>booking</h1>
              </div>

              <form class="bl1" action="includes/register.php" name="reg" method="POST">
                <div class="form-group">
                  <span class="form-label">Name</span>
                  <input
                    class="form-control"
                    type="text"
                    placeholder="Enter your name"
                    name="name"
                    required
                  />
                </div>

                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <span class="form-label">Email</span>
                      <input
                        class="form-control"
                        type="email"
                        placeholder="Enter your email"
                        name="email" required
                      />
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                      <span class="form-label">Contact</span>
                      <input
                        class="form-control"
                        type="tel"
                        placeholder="Enter your phone number"
                        name="contact" required
                      />
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <span class="form-label">Aadhar Card</span>
                      <input
                        class="form-control"
                        type="text"
                        placeholder="Enter Aadhar Number"
                        name="adhar" required
                      />
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                      <span class="form-label">City</span>
                      <select class="form-control" name="city" required>
                        <option> -- SELECT --</option>
                        <option value="chennai">Chennai</option>
                        <option value="delhi">Delhi</option>
                        <option value="goa">Goa</option>
                        <option value="manali">Manali</option>
                        <option value="mumbai">Mumbai</option>
                        <option value="pune">Pune</option>
                      </select>
                      <span class="select-arrow"></span>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <span class="form-label">Room</span>
                      <select class="form-control" name="room" required>
                        <option value="SingleRoom">Single Bed</option>
                        <option value="DoubleRoom">Double Bed</option>
                        <option value="FamilyRoom">Family Size</option>
                      </select>
                      <span class="select-arrow"></span>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                      <span class="form-label">Number of Rooms</span>
                      <select class="form-control" name="nr" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                      </select>
                      <span class="select-arrow"></span>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <span class="form-label">Check In</span>
                      <input
                        class="form-control"
                        name="cin"
                        type="date"
                        required
                      />
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                      <span class="form-label">Check Out</span>

                      <input
                        class="form-control"
                        name="cout"
                        type="date"
                        required
                      />
                    </div>
                  </div>
                </div>

                <div class="form-btn">
                  <button class="submit-btn"  name="reg">
                    Book Now
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
