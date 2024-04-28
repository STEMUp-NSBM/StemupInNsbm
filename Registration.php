<?php include 'includes/header.php'; ?>
<header>Registration</header>
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

                  <div class="input-field">
                    <label for="">Gender</label>
                    <input type="date" placeholder="Enter Your Gender" required>
                  </div>

                  <div class="input-field">
                  <label for="">Occupation</label>
                  <input type="email" placeholder="Enter Your Occupation " required>
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
                      <label for="">Student ID</label>
                      <input type="number" placeholder="Enter Your Student card ID" required>
                  </div>

                  <div class="input-field">
                    <label for="">Batch</label>
                    <select id="Batch-id" name="Batch">
                      <option value="1">22.1</option>
                      <option value="1">22.2</option>
                      <option value="1">23.1</option>
                      <option value="1">23.2</option>
                      <option value="1">24.1</option>
                    </select>
                </div>

                <div class="input-field">
                  <label for="">Volunteer Experions</label>
                  <textarea id="Experions" name="Experions" rows="4" cols="50"></textarea>
              </div>

              <div class="input-field">
                <label for="">Gender</label>
                <input type="date" placeholder="Enter Your Gender" required>
              </div>

              <div class="input-field">
              <label for="">Occupation</label>
              <input type="email" placeholder="Enter Your Occupation " required>
              </div>


            </div>
          </div>
            </div>
        </form>
    </div>

<?php include 'includes/footer.php';?>