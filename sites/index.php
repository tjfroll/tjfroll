<!DOCTYPE html>
<html>
   <head>
      <title>TJF - Sites</title>
      <?php include '../incl_header.php'; ?>
   </head>
   <body>
      <?php include '../incl_navbar.php'; ?>
         <div id="content">
            <div id="sitesContent">
               <p>The HTML, CSS, jQuery, JavaScript, and PHP for all of my sites is written by hand in Notepad++.  Although I am capable of using WYSIWIG editors such as DreamWeaver, I prefer the control that hand-written code provides, and I feel that during the process I learn more about the real-world mechanics of how various browsers and clients render code.  All of my code is WC3-validated, works in all modern browsers, and I adhere to responsive design principles to ensure functionality on cell phones and tablets.</p>
               <div id="sitesNav">
                  <a href="#site1">MyInserts</a> <a href="#site2">Ecological Archives</a> <a href="#site3">Katia's Sewing Services</a> <a href="#site4">And the Lack Thereof</a>
               </div>
               <hr id="site1" />
               <div class="siteDetails">
                  <h2>MyInserts</h2>
                  <p>MyInserts (<a target="_blank" href="http://myinserts.com">myinserts.com</a>) is a public-facing e-commerce website designed to sell custom orthotics online and support business-to-business sales.  As the Creative Developer for AQ Tech Group, I was charged with designing and implementing the front-end for MyInserts using HTML, CSS, JavaScript, and PHP.</p>
                  <div class="siteImages">
                     <img src="./myinserts1.png" />
                  </div>
                  <p>The site was built on top of the concrete5 CMS.  Except for the MyInserts logo, all elements of the design (header, body, background) were conceived and implemented by me.  I wrote the sales copy for the entire site.</p>
                  <div class="siteImages">
                     <img src="./myinserts2.png" />
                  </div>
                  <p>One of the unique requirements for MyInserts was a custom insert builder.  The custom orthotics MyInserts offered could be customized in several ways according to the customer's needs and desires.  I created an intuitive, straightforward interface in jQuery.  By using large buttons and distinct colors, this interface functions on mobile devices.</p>
                  <div class="siteImages">
                     <img src="./myinserts3.png" />
                  </div>
                  <p>I implemented a lightbox to allow customers to see the product prior to purchase. To achieve this, I photographed the entire product catalogue.  I took over 2,500 photos to acquire 72 high-quality product shots, and then edited them in Photoshop CS5.</p>
                  <div class="siteImages">
                     <img src="./myinserts4.png" />
                  </div>
                  <p>Coordinating with the back-end developer at AQ Tech Group, we built a fully-functional shopping cart and checkout system.  In addition, a separate purchasing/checkout system was implemented for wholesale/corporate customers.</p>
               </div>
               <h6><a href="#content">back to top</a></h6>
               <hr id="site2" />
               <div class="siteDetails">
                  <h2>Ecological Archives</h2>
                  <p>While working for the Ecological Society of America's publication office, I was responsible for the digitization of a variety of published documents, primarily intended as online appendices that accompanied journal articles.  These appendices were stored and served permanently in ESA's Ecological Archives (<a target="_blank" href="http://esapubs.org/archive/">esapubs.org/archive</a>), an online document repository.  Ecological Archives had seen no significant technological upgrades since 2001.</p>
                  <div class="siteImages">
                     <img src="./esa1.png" />
                  </div>
                  <p>To reduce workload in the short-term, I re-designed the Ecological Archives site to be much easier for authors to browse, eliminating over two-thirds of existing content that had built up over the past decade of use.  I rewrote all of the tutorials and instructions for authors looking to submit appendices for their publications, significantly reducing unnecessary correspondence between ESA staff and authors.  <i>Please note: I did not create the header.</i></p>
                  <div class="siteImages">
                     <img src="./esa2.png" />
                  </div>
                  <p>After redesigning the front-end, I proposed, designed, and implemented a back-end application for automatically processing and managing all future Ecological Archives documents using PHP and SQL.  I parsed all existing documents into a searchable database, and replaced the need for ESA staff to update any more files by hand.</p>
               </div>
               <h6><a href="#content">back to top</a></h6>
               <hr id="site3" />
               <div class="siteDetails">               
                  <h2>Katia's Sewing Services</h2>
                  <p>Katia was a seamstress in need of a simple informational site (<a href="http://sewnbykatia.com">sewnbykatia.com</a>) that expressed her personality and helped her stand out from other tailors.</p>
                  <div class="siteImages">
                     <img src="./sewnby1.png" />
                  </div>
                  <p>All design elements are done in CSS, including the background and borders.  The dashed borders and overlapping bars in the background immediately communicate a fabric theme without being too cheesy.</p>
                  <div class="siteImages">
                     <img src="./sewnby2.png" />
                  </div>
                  <p>Katia loved flowers, and I saw her pricing page as an opportunity to express that.  This was also done purely in CSS.</p>
               </div>
               <h6><a href="#content">back to top</a></h6>
               <hr id="site4" />
               <div class="siteDetails">
                  <h2>And The Lack Thereof</h2>
                  <p>And The Lack Thereof (<a href="thelackthereof.com" target="_blank" >thelackthereof.com</a>) has been my personal blog since 2003 - nearly ten years old and 700 posts to date.  I've maintained a small, but dedicated readership throughout that time, and it's where I got my start in web design.  Originally based on an Apache server I ran from home and managed through Blogger, ATLT is now run on WordPress.</p>
                  <div class="siteImages">
                     <img src="./blog1.png" />
                  </div>
                  <p>I designed the theme from scratch.  The background is done entirely in CSS, and functions identically in all modern browsers (IE8+) as well as on mobile devices.  Although light text on dark backgrounds can be risky for text-heavy sites, I stuck with muted shades of grey for both the text as well as the background, which alleviates the sharp contrast.
               </div>
            </div>
         </div>
      </div>
   </body>
</html>