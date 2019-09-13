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
        <p class="qcPageDesc full">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, accusamus, sed, necessitatibus ea nemo hic molestias amet tempora fuga pariatur officia itaque eum quis rerum aliquam minus illo nulla laborum!</p>
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