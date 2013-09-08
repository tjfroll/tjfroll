      <meta name="viewport" content="initial-scale=.75, minumum-scale=.1, maximum-scale=3.0, width=device-width">
      <meta charset="windows-1252" />
      <meta name="keywords" content="web development, web developer, web design, web designer, portfolio, resume, cv, html, css, javascript, jquery, sql, photoshop, illustrator, publisher, wordpress">
      <meta name="author" content="Tim Froehlich, Timothy J Froehlich, Cranberry Thunderfunk">
      <meta name="description" content="Resume and portfolio for Tim Froehlich, showcasing web design, digital art, and eSports broadcasts.">
      <link rel ="stylesheet" type = "text/css" href = "http://tjfroll.com/main.css" />
      <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-43748952-1', 'tjfroll.com');
	  ga('send', 'pageview');
      </script>
      <script type="text/javascript" src="http://tjfroll.com/jquery-2.0.3.min.js"></script>
      <script type="text/javascript">
         $(document).ready( function() {
            focusTab();
         });
         
         function focusTab() {
            var loc = window.location.pathname;
            var dir = loc.substring(0, loc.lastIndexOf('/'));
            if(dir == "/sites") {
               $('#sitesTab').addClass('focused');
               $('#contentLabel').text('Sites');
            }
            else if(dir == "/art") {
               $('#artTab').addClass('focused');
               $('#contentLabel').text('Art');
            }
            else if(dir == "/esports") {
               $('#esportsTab').addClass('focused');
               $('#contentLabel').text('eSports');
            }
            else if(dir == "/contact") {
               $('#contactTab').addClass('focused');
               $('#contentLabel').text('Contact');
            }
            else {
               $('#resumeTab').addClass('focused');
               $('#contentLabel').text('Resume');
            }
         }
      </script>