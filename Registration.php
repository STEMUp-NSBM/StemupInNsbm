<?php include 'includes/header.php'; ?>
    <div class="container">
        <form action="##">
            <div class="form first">
                 <div class="details personal">
                    <span class="title">Personal details</span>

                    <div class="fields">
                      <div class="input-field">
                          <label for="">Full Name</label>
                          <input type="text" placeholder="Enter Your Name" required>
                      </div>

                      <div class="input-field">
                        <label for="">Date of Birth</label>
                        <input type="date" placeholder="Enter Your date of Birth" required>
                      </div>

                      <div class="input-field">
                        <label for="">Emaill</label>
                        <input type="email" placeholder="Enter Your Emaill" required>
                      </div>

                      <div class="input-field">
                        <label for="">Mobile Number</label>
                        <input type="number" placeholder="Enter Your Mobile Number " required>
                      </div>
                      <div class="input-field-checkbox">
                        <label for="">Gender</label>
                        <table class="Checkbox">
                          <tr>
                            <td>Male <input type="checkbox" id="Male" name="Male" value="male"></td>
                            <td>Female <input type="checkbox" id="Female" name="Female" value="Female"></td>
                            <td>Other <input type="checkbox" id="Other" name="Other" value="Other"></td>
                          </tr>
                        </table>
                      </div>
                      <div class="input-field">
                      <label for="">NIC</label>
                      <input type="number" placeholder="Enter Your NIC Number " required>
                      </div>


                    </div>
                  </div>


              <div class="details ID">
                <span class="title">Identity details</span>

                <div class="fields">
                    <div class="input-field">
                        <label for="">Student Name</label>
                        <input type="text" placeholder="Enter Your Name" required>
                    </div>

                    <div class="input-field">
                      <label for="">Date of Birth</label>
                      <input type="date" placeholder="Enter Your date of Birth" required>
                  </div>

                  <div class="input-field">
                    <label for="">Emaill</label>
                    <input type="email" placeholder="Enter Your Emaill" required>
                </div>

                <div class="input-field">
                  <label for="">Mobile Number</label>
                  <input type="number" placeholder="Enter Your Mobile Number " required>
              </div>

                  

                

              <div class="input-field">
                <label for="">Degree Programe</label>
                <input type="text" placeholder="Enter Your Degree Programe" required>
              </div>
              
              <div class="input-field">
                  <label for="">Volunteer Experions</label>
                  <textarea id="Experions" name="Experions" rows="4" cols="50"></textarea>
              </div>

            </div>
            <div class="infield-signIn">
                    <button>Submit</button>
            </div>
          </div>
            </div>
        </form>
    </div>

<?php include 'includes/footer.php';?>