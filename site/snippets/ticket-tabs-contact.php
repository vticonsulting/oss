<!-- ===============================================

  PAGE 4 - CONTACT

=============================================== -->
<div id="tab-4" class="qcTabPage clearfix">

  <!-- ## ROW ## -->
  <div class="row clearfix">

    <!-- ## TAB TITLE ## -->
    <div class="col-6 col" >
      <div class="qcTabTitle no-border">
        <h4>Contact<span> Fill out below contact form</span></h4>
      </div>
    </div>

    <!-- ## TAB DESC ## -->
    <div class="col-6 col">
      <ul class="qcAddress">
        <li><i class="icon-map"></i><p><strong>ADDRESS</strong>: 1600, Amphitheatre Parkway, CA 94043</p></li>
        <li><i class="icon-user-1"></i><p><strong>PHONE</strong>:  +91-8097000000</p></li>
        <li><i class="icon-print"></i><p><strong>FAX</strong>: +91-8097000001</p></li>
        <li><i class="icon-mail-1"></i><p><strong>EMAIL</strong>: quadcodes@gmail.com</p></li>
        <li><i class="icon-globe-1"></i><p><strong>WEBSITE</strong>: <a title="website" href="http://www.quadcodes.com" target="_blank">www.quadcodes.com</a></p></li>
      </ul>
    </div>

  </div>
  <!-- ## ROW END ## -->

  <!-- ## ROW ## -->
  <div class="dblBorder">
    <div class="row clearfix">
      <div class="col-12 col">
        <div class="qcTcktRegForm contact">
          <!-- ## CONTACT FORM ## -->
          <form action="includes/form/qcForm.php" id="qcContactForm" class="qcForm" name="qcContactForm" method="post">
            <ul class="clearfix">
              <li>
                <div class="wrapper">
                  <label for="contact-name">Name</label>
                  <input type="text" id="contact-name" name="contact-name" class="requiredField" value="" placeholder="Enter full name" />
                </div>
              </li>
              <li>
                <div class="wrapper">
                  <label for="contact-email">Email</label>
                  <input type="text" id="contact-email" name="contact-email" class="email requiredField" value="" placeholder="Enter email-id" />
                </div>
              </li>
              <li>
                <div class="wrapper">
                  <label for="contact-phone">Phone</label>
                  <input type="text" id="contact-phone" name="contact-phone" class="requiredField" value="" placeholder="Enter contact number" />
                </div>
              </li>
              <li>
                <div class="wrapper">
                  <label for="contact-subject">Subject</label>
                  <select name="contact-subject" id="contact-subject" class="requiredField">
                    <option value="">Select Subject</option>
                    <option value="registration">Regarding event registration</option>
                    <option value="support">Support related</option>
                    <option value="refund">Refund</option>
                  </select>
                </div>
              </li>
              <li class="full">
                <div class="wrapper">
                  <label for="contact-message">Message</label>
                  <textarea id="contact-message" name="contact-message" class="requiredField" placeholder="Enter your message"></textarea>
                </div>
              </li>                      
            </ul>
            <div class="qcTcktSubmit">
              <input type="hidden" name="formtype" value="contact"/>
              <button type="submit" class="submit">Submit form</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- ## ROW END ## -->


</div>
<!-- ## PAGE 4 END ## -->