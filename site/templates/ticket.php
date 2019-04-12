<?php snippet('header') ?>

  <!-- ## PAGE TITLE ## -->
  <section id="qcSecbar">
    <div class="qcContainer">
      <h1><?= $page->title() ?><span><?= $page->subtitle() ?></span></h1>
    </div>
  </section>

  <!-- ## PAGE CONTENT ## -->
  <section id="qcContent">
    <div class="qcContainer">
    
      <!-- ## MOB NAV ## -->
      <div id="qcMbTrigger"></div>  

      <!-- ## TABS ## -->
      <div id="qcTabs" class="tabs">

        <!-- ## TAB NAV ## -->
        <ul id="qcTabNav" class="clearfix">
          <li><a href="#tab-1"><i class="icon-ticket icon"></i> <span><?= $page->example() ?></span></a></li>
          <li><a href="#tab-2"><i class="icon-book-open icon"></i> <span><?= $page->faqs() ?></span></a></li>
          <li><a href="#tab-3"><i class="icon-lkdto icon"></i> <span>T & C</span></a></li>
          <li><a href="#tab-4"><i class="icon-mail-1 icon"></i> <span>Contact</span></a></li>
        </ul>


        <!-- ===============================================

          PAGE 1 - TICKET

        =============================================== -->
        <div id="tab-1" class="qcTabPage clearfix">

          <!-- ## ROW ## -->
          <div class="ticket row clearfix">

            <!-- ## TAB TITLE & DESC ## -->
            <div class="col-4 col" >
              <div class="qcTabTitle no-border">
                <h4>Book ticket<span> Hurry ! Limited attendees only</span></h4>
                <p class="qcPageDesc full">

                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, accusamus, sed, necessitatibus ea nemo hic molestias amet tempora fuga pariatur officia itaque eum quis rerum aliquam minus illo nulla laborum!</p>
              </div>
            </div>

            <!-- ## TICKET ## -->
            <div class="col-8 col">
              <div class="box no-border nopad">
                <div class="qcTcktRegForm">
                
                  <!-- ## MODULE TITLE ## -->
                  <div class="qcModTitle">
                    <h1>R S V P</h1>
                    <p>Fill out the following form.</p>
                  </div>
                  
                  <!-- ## TICKET FORM ## -->
                  <form action="includes/form/qcForm.php" id="qcTcktForm" class="qcForm" name="qcTcktForm" method="post">
                    <ul class="clearfix">
                      <li>
                        <div class="wrapper">
                          <label for="name">Name</label>
                          <input type="text" id="name" name="name" class="requiredField" value="" placeholder="Enter full name" />
                        </div>
                      </li>
                      <li>
                        <div class="wrapper">
                          <label for="email">Email</label>
                          <input type="text" id="email" name="email" class="email requiredField" value="" placeholder="Enter email-id" />
                        </div>
                      </li>
                      <li>
                        <div class="wrapper">
                          <label for="phone">Phone</label>
                          <input type="text" id="phone" name="phone" class="requiredField" value="" placeholder="Enter contact number" />
                        </div>
                      </li>
                      <li>
                        <div class="wrapper herr">
                          <label for="ticket">Ticket</label>
                          <select name="ticket" id="ticket" class="requiredField">
                            <option value="">Select Package</option>
                            <option value="early">Early Bird</option>
                            <option value="general">General</option>
                            <option value="vip">VIP</option>
                          </select>
                          <select name="quantity" id="quantity" class="requiredField">
                            <option value="">Quantity</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                          </select>
                        </div>
                      </li>
                    </ul>
                    <div class="qcTcktCheck">
                      <input type="checkbox" value="Book Ticket" class="requiredField checkbox"/> 
                      <span>I'm agree to the Terms & Conditions.</span>
                    </div>
                    <div class="qcTcktSubmit">
                      <input type="hidden" name="formtype" value="ticket"/>
                      <button type="submit" class="submit">Reserve Ticket</button>
                    </div>
                  </form>
                </div>
                <!-- ## TICKET FORM END ## -->
              </div>
            </div>
            <!-- ## TICKET END ## -->

          </div>
          <!-- ## ROW END ## -->

          <!-- ## ROW ## -->
          <div class="dblBorder">
            <div class="row clearfix">
              <div class="col-12 col">
                <!-- ## MODULE TITLE ## -->
                <div class="qcModTitle">
                  <h1>Pricing Table</h1>
                  <p>Ticket packages & Features</p>
                </div>
                <!-- ## PRICING ## -->
                <div class="qcPricingWrapper clearfix">
                  <!-- ## PRICING 1 ## -->
                  <div class="qcPricing col-4 col">
                    <div class="box">
                      <header>Early Bird</header>
                      <div class="price"><span>$15</span> Per Entry</div>
                      <ul>
                        <li></li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                      </ul>
                      <footer><a href="#">Buy Now</a></footer>
                    </div>
                  </div>
                  <!-- ## PRICING 2 ## -->
                  <div class="qcPricing col-4 col">
                    <div class="box">
                      <header>General</header>
                      <div class="price"><span>$25</span> Per Entry</div>
                      <ul>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                      </ul>
                      <footer><a href="#">Buy Now</a></footer>
                    </div>
                  </div>
                  <!-- ## PRICING 3 ## -->
                  <div class="qcPricing col-4 col">
                    <div class="box">
                      <header>VIP</header>
                      <div class="price"><span>$50</span> Per Entry</div>
                      <ul>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                      </ul>
                      <footer><a href="#">Buy Now</a></footer>
                    </div>
                  </div>
                </div>
                <!-- ## PRICING ## -->
              </div>
            </div>
          </div>
          <!-- ## ROW END ## -->

        </div>
        <!-- ## PAGE 1 END ## -->



        <!-- ===============================================

          PAGE 2 - FAQ's

        =============================================== -->
        <div id="tab-2" class="qcTabPage clearfix">

          <!-- ## ROW ## -->
          <div class="row clearfix">

            <!-- ## TAB TITLE ## -->
            <div class="col-4 col" >
              <div class="qcTabTitle no-border">
                <h4>FAQ's<span> Frequently asked questions</span></h4>
              </div>
            </div>

            <!-- ## TAB DESC ## -->
            <div class="col-8 col">
              <div class="box no-border nopad">
                <p class="qcPageDesc full">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, accusamus, sed, necessitatibus ea nemo hic molestias amet tempora fuga pariatur officia itaque eum quis rerum aliquam minus illo nulla laborum!</p>
              </div>
            </div>

          </div>
          <!-- ## ROW END ## -->

          <!-- ## ROW ## -->
          <div class="dblBorder">
            <div class="row clearfix">
              <div class="col-12 col">

                <!-- ## FAQ's LIST ## -->
                <div class="qcEventlayout">
                  <!-- ## FAQ 1 ## -->
                  <div class="shortcode-toggle toggle-open-me closed default border">
                    <h4 class="toggle-trigger">
                      <a href="#"><span>1.</span> What are Student tickets?</a>
                      </h4>
                    <div class="toggle-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </div>
                    <input type="hidden" name="title_open" value="Close Me" />
                    <input type="hidden" name="title_closed" value="Open Me" />
                  </div>
                  <!-- ## FAQ 2 ## -->
                  <div class="shortcode-toggle toggle-open-me closed default border">
                    <h4 class="toggle-trigger">
                      <a href="#"><span>2.</span> How and where do I collect my tickets/wristbands</a>
                    </h4>
                    <div class="toggle-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </div>
                    <input type="hidden" name="title_open" value="Close Me" />
                    <input type="hidden" name="title_closed" value="Open Me" />
                  </div>
                  <!-- ## FAQ 3 ## -->
                  <div class="shortcode-toggle toggle-open-me closed default border">
                    <h4 class="toggle-trigger">
                      <a href="#"><span>3.</span> Can I buy tickets using cash?</a>
                    </h4>
                    <div class="toggle-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </div>
                    <input type="hidden" name="title_open" value="Close Me" />
                    <input type="hidden" name="title_closed" value="Open Me" />
                  </div>
                  <!-- ## FAQ 4 ## -->
                  <div class="shortcode-toggle toggle-open-me closed default border">
                    <h4 class="toggle-trigger">
                      <a href="#"><span>4.</span> How and where do I collect my tickets/wristbands</a>
                    </h4>
                    <div class="toggle-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </div>
                    <input type="hidden" name="title_open" value="Close Me" />
                    <input type="hidden" name="title_closed" value="Open Me" />
                  </div>
                  <!-- ## FAQ 5 ## -->
                  <div class="shortcode-toggle toggle-open-me closed default border">
                    <h4 class="toggle-trigger">
                      <a href="#"><span>5.</span> Can I buy tickets using cash?</a>
                    </h4>
                    <div class="toggle-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </div>
                    <input type="hidden" name="title_open" value="Close Me" />
                    <input type="hidden" name="title_closed" value="Open Me" />
                  </div>

                </div>
                <!-- ## FAQ's END ## -->

              </div>
            </div>
          </div>
          <!-- ## ROW END ## -->

        </div>
        <!-- ## PAGE 2 END ## -->



        <!-- ===============================================

          PAGE 3 - TERMS & CONDITIONS

        =============================================== -->
        <div id="tab-3" class="qcTabPage clearfix">

          <!-- ## ROW ## -->
          <div class="row clearfix">

            <!-- ## TAB TITLE ## -->
            <div class="col-4 col" >
              <div class="qcTabTitle no-border">
                <h4>T & C<span> Terms & conditions for the event</span></h4>
              </div>
            </div>

            <!-- ## TAB DESC ## -->
            <div class="col-8 col">
              <div class="box no-border nopad">
                <p class="qcPageDesc full">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, accusamus, sed, necessitatibus ea nemo hic molestias amet tempora fuga pariatur officia itaque eum quis rerum aliquam minus illo nulla laborum!</p>
              </div>
            </div>

          </div>
          <!-- ## ROW END ## -->

          <!-- ## ROW ## -->
          <div class="dblBorder">
            <div class="row clearfix">
              <div class="col-12 col">

                <!-- ## T & C LIST ## -->
                <div class="qcEventlayout">
                  <ul class="qcCheckList">
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                  </ul>
                </div>

              </div>
            </div>
          </div>
          <!-- ## ROW END ## -->


        </div>
        <!-- ## PAGE 3 END ## -->



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
        

      </div>
      <!-- ## TABS END ## -->

    </div>
  </section>
  <!-- ## PAGE CONTENT END ## -->
  
<?php snippet('footer') ?>

