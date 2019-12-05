<?php
   use App\Siteinfo;
   $info = Siteinfo::first();
?>

<footer>

   <div class="footer-content-bg">

      <div class="container clearfix">

         <div class="two-thirds column">

               <h3 class="caption footer-block" style="text-transform:uppercase;">Why <b>ETA Worldwid</b></h3>

               <div class="footer-contact-info">

                  <p>&nbsp;</p>

                  <p class="title-font-14">ETA Worldwid utilizes insured, secured and bonded facilities. NEW - We provide warehousing, packing, crating, trucking and loading services.</p>

                  <p class="title-font-14">We own and operate additional cargo shipping companies in Spain & Ireland and more worldwide destinations are covered by our affiliated organization member companies.</p>
                  
                  <p class="title-font-14">Our partner KMBB from Ireland</p>

               </div>

         </div>

         <div class="one-third column ">

               <h3 class="caption footer-block">CONTACT <span class="bold">INFO</span></h3>

               <ul class="footer-contact-info">

                  <!-- <li class="footer-loc"> Globe House, Eclipse Park, Sittingbourne Rd, Maidstone<br/>ME14 3EN, United Kingdom </li> -->
                  
                  <li class="footer-loc"> {{$info->address}}, {{$info->city}},  {{$info->country}}, {{$info->country}} </li>

                  <li class="footer-mail">  {{$info->email}} </li>

                  <li class="footer-phone">

                     <br/>

                     {{$info->weekstart}}- {{$info->weekend}}:  {{$info->hourstart}} -  {{$info->hourend}} <br/>{{$info->restday1}} / {{$info->restday2}}: Closed

                  </li>

               </ul>

         </div>

      </div>

   </div>

   <div class="footer-copyright-bg">

      <div class="container ">

         <div class="sixteen columns clearfix">

               <div class="footer-menu-container">

                  <nav class="clearfix" id="footer-nav">

                     <ul class="footer-menu">

                           <li><a href="privacy">Privacy Policy</a></li>

                           <li><a href="terms">Terms and Conditions</a></li>

                     </ul>

                  </nav>

               </div>

               <div class="footer-copyright-container right-text"> &copy; 2019 {{$info->companyname}} No: 07223653. All Rights Reserved. </div>

         </div>

      </div>

   </div>

</footer>