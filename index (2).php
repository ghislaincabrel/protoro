
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="font/material-icons" rel="stylesheet">
      <link href="font/material" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
       <link type="text/css" rel="stylesheet" href="css/css1.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="css/form9.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>le site du cabrelo</title>
    </head>

    <body>
    <div id="bloc">
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="jquery/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.js"></script>
      <script type="text/javascript" src="jquery/jquery1.js"></script>


<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>





  <!-- Modal Structure -->
  <div id="modal10" class="modal">
    <div class="modal-content">

  <div class="row">
  <div class="center">
    <form class="col s12" action="" method="post">
      <div class="row">
        <div class="input-field col s12">
         <i class="material-icons prefix">person_pin</i>
          <input id="last_name" type="text" class="validate" required="required">
          <label for="last_name">Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">vpn_key</i>
          <input id="password" type="tel" class="validate"  required="required">
          <label for="password">password</label>
        </div>
        </div>
  </div>
    </div>
    <div class="modal-footer">
       <button class="btn waves-effect waves-light" type="submit" name="action0">LOGIN
       <i class="material-icons right">send</i>
    </button>
    </div>
  </div>
    </form>
  </div>




<!-- Modal Structure -->

  <div id="modal1" class="modal bottom-sheet">
    <div class="modal-content">
    <h4 class="account">CREATE AN ACCOUNT</h4></br>
    <?php // Report the errors.
         echo ‘<h1>Error!</h1> <p>The following error(s) occurred:<br />’;
         foreach ($errors as $msg) { // Print each error.
            echo “ --> $msg<br />\n”;
         }
          echo ‘</p><p>Please try again.</p><p><br/>’;
    ?>
  <div class="row">
  <div class="center">
    <form class="col s12" action="registration.php" method="post">
      <div class="row">
        <div class="input-field col s6">
           <i class="material-icons prefix">account_circle</i>
           <input id="first_name" type="text" class="validate" required="required" name="fisrt_name">
           <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
           <i class="material-icons prefix">perm_identity</i>
           <input id="last_name" type="text" class="validate" required="required" name="last_name">
           <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input id="telephone" type="tel" class="validate" maxlength="9" required="required" name="telephone">
          <label for="telephone">Telephone</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">email</i>
          <input id="email" type="email" class="validate" name="email">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
          <label for="date">date</label>
          <input type="date" class="datepicker" placeholder="month /date /year" name="date">
      </div>
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">vpn_key</i>
          <input id="password1" type="password" class="validate" required="required" name="password1">
          <label for="password1">Password</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">vpn_key</i>
          <input id="password2" type="password" class="validate" required="required" name="password2">
          <label for="password2">confirm Password</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="submit">Submit
         <i class="material-icons right">send</i>
      </button>
      <button class="btn waves-effect waves-light" type="reset" name="cancel">Cancel
         <i class="material-icons right">send</i>
      </button>
   </form>
  </div>
</div>
  </div>
    <div class="modal-footer">
      <a href="index.html"   class="fixed-action-btn"> CLOSE</a>
    </div>
  </div>



      <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo">LE SITE DU CABRELO</a>
        <ul class="right hide-on-med-and-down">
        <li><a href="#"><i class="material-icons left">home</i>HOME</a></li>
        <li><a href="#"><i class="material-icons left">group</i>ABOUT US</a></li>
        <li><a href="#"> <i class="material-icons left">contact_phone</i>CONTACT</a></li>

       <!-- Modal Trigger -->
        <li><a  href="#modal1" class="waves-effect waves-light  modal-trigger" > CREATE AN ACCOUNT</a></li>

          <!-- Modal Trigger -->
        <li> <a  href="#modal10" class="waves-effect waves-light  modal-trigger"><i class="material-icons left">lock</i>LOGIN</a></li>

       <li>
      <a class="dropdown-button" href="#!" data-activates="dropdown1">PLUS<i class="material-icons right">arrow_drop_down</i></a></li>

        </ul>

      </div>
    </nav>
  </div>




<div class="parallax-container1">
    <div class="parallax"><img src="images/49.jpg"></div>
  </div>
      <h2 class="header">Parallax</h2>


      <div class="row">

      <div class="col s4">
        <!-- Promo Content 1 goes -->
         <p>A bunch of textThe most popular digital system is the binary and this is where we will be basing our 
discussions  in  this  course.  Amongst  other  criteria,  digital  signals  are  mostly
characterized by bit rates. Bit length is the equivalence of wavelength of an analogue 
signal.Bit length = Propagation speed x bit duration (λ = ft)
Digital signal can be transmitted using either baseband (raw) or broadband transmission 
(using  modulation)  approaches.  Baseband  transmission  means  sending  a  digital (or 
even an analogue) signal over a channel without modulating it with another signal. The 
channel has to be dedicated. Baseband transmission always uses a low pass channel.
Broadband transmission or modulation means changing the digital signal to an analog 
signal for transmission.
3.1.4 Transmission Impairment
There are three different types of impairment in a transmission, attenuation, distortion 
and noise
Attenuation means  a  loss  of  energy.  When  a  signal,  simple  or  composite,  travels 
through  a  medium,  it  loses  some  of  its  energy  in  overcoming  the  resistance  of  the 
medium. Amplifiers are use to compensate for this losses. Losses are usually measure 
in decibel (db) which is a measure of relative strength of two signals or of a signal at two 
different points.
Decibel = 10 log P2/P1
Distortion means that the signal changes its form or shape.
Noise is the introduction of unwanted signals into the channel. We have thermal noise, 
induced  noise,  crosstalk, impulse  noise  etc.  It  is  usually  measured  as  signal  to noise 
ratio.</p>
      </div>
      <div class="col s4">
        <!-- Promo Content 2 goes here -->
         <p>A bunch of textThe most popular digital system is the binary and this is where we will be basing our 
discussions  in  this  course.  Amongst  other  criteria,  digital  signals  are  mostly
characterized by bit rates. Bit length is the equivalence of wavelength of an analogue 
signal.Bit length = Propagation speed x bit duration (λ = ft)
Digital signal can be transmitted using either baseband (raw) or broadband transmission 
(using  modulation)  approaches.  Baseband  transmission  means  sending  a  digital (or 
even an analogue) signal over a channel without modulating it with another signal. The 
channel has to be dedicated. Baseband transmission always uses a low pass channel.
Broadband transmission or modulation means changing the digital signal to an analog 
signal for transmission.
3.1.4 Transmission Impairment
There are three different types of impairment in a transmission, attenuation, distortion 
and noise
Attenuation means  a  loss  of  energy.  When  a  signal,  simple  or  composite,  travels 
through  a  medium,  it  loses  some  of  its  energy  in  overcoming  the  resistance  of  the 
medium. Amplifiers are use to compensate for this losses. Losses are usually measure 
in decibel (db) which is a measure of relative strength of two signals or of a signal at two 
different points.
Decibel = 10 log P2/P1
Distortion means that the signal changes its form or shape.
Noise is the introduction of unwanted signals into the channel. We have thermal noise, 
induced  noise,  crosstalk, impulse  noise  etc.  It  is  usually  measured  as  signal  to noise 
ratio.</p>
      </div>
      <div class="col s4">
        <!-- Promo Content 3 goes here -->
         <p>A bunch of textThe most popular digital system is the binary and this is where we will be basing our 
discussions  in  this  course.  Amongst  other  criteria,  digital  signals  are  mostly
characterized by bit rates. Bit length is the equivalence of wavelength of an analogue 
signal.Bit length = Propagation speed x bit duration (λ = ft)
Digital signal can be transmitted using either baseband (raw) or broadband transmission 
(using  modulation)  approaches.  Baseband  transmission  means  sending  a  digital (or 
even an analogue) signal over a channel without modulating it with another signal. The 
channel has to be dedicated. Baseband transmission always uses a low pass channel.
Broadband transmission or modulation means changing the digital signal to an analog 
signal for transmission.
3.1.4 Transmission Impairment
There are three different types of impairment in a transmission, attenuation, distortion 
and noise
Attenuation means  a  loss  of  energy.  When  a  signal,  simple  or  composite,  travels 
through  a  medium,  it  loses  some  of  its  energy  in  overcoming  the  resistance  of  the 
medium. Amplifiers are use to compensate for this losses. Losses are usually measure 
in decibel (db) which is a measure of relative strength of two signals or of a signal at two 
different points.
Decibel = 10 log P2/P1
Distortion means that the signal changes its form or shape.
Noise is the introduction of unwanted signals into the channel. We have thermal noise, 
induced  noise,  crosstalk, impulse  noise  etc.  It  is  usually  measured  as  signal  to noise 
ratio.</p>
      </div>
</div>
  </div>
  <div class="parallax-container">
    <div class="parallax"><img src="images/54.jpg"></div>
  </div>





<footer class="page-footer">
         
          <div class="footer-copyright">
            <div class="container">
            ©  2016 Copyright  power by materialize
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>

</div>
    </body>
  </html>