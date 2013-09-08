<!DOCTYPE html>
<html>
   <head>
      <title>TJF - Art</title>
      <?php include '../incl_header.php'; ?>
      
      <script type="text/javascript">
         $(document).ready( function() {
            var images = [
               {file: "bricked.jpg", thumb: "bricked_thumb.jpg", desc: "Found an interesting dust pattern on a brick sidewalk.  The basic splotch pattern resulted from a series of noise reductions.  I separated each brick to its own layer, duplicated the layers to intensify the texture, and used separate adjustments for each brick layer. Photomanipulation / GIMP" },
               {file: "burn.jpg", thumb: "burn_thumb.jpg", desc: "Based on a fractal flame I generated.  The luminosity and wind shear give it a nice seared effect. Fractal art / GIMP" },
               {file: "burst.jpg", thumb: "burst_thumb.jpg", desc: "The main swirl comes from a warped linear gradient, the dark splotches from a modified line nova, and the tendrils from a sinusoidal texture. Abstract / GIMP" },
               {file: "core.jpg", thumb: "core_thumb.jpg", desc: "Based on a high-noise conical gradient cut into a triangle mosaic, and then rotation-warped at 5 points (4 corners clockwise, center counter-clockwise). Abstract / GIMP" },
               {file: "crossroads.jpg", thumb: "crossroads_thumb.jpg", desc: "I found the basic star shape during fractal exploration, then added the central line nova and shrunk a simple web-like texture into the center to create a burst effect.  Fractal art / GIMP" },
               {file: "dart.jpg", thumb: "dart_thumb.jpg", desc: "Another fractal exploration, I bumpmapped this first before separating out the high and low terrain.  The rich color scheme partially resulted from a single adjustment layer containing a conical gradient. Fractal art / GIMP" },
               {file: "flash.jpg", thumb: "flash_thumb.jpg", desc: "My favorite piece.  Taken in downtown Kansas City, I used a combination of edge detections, bumpmapping, cubistic transformations, and endless layer adjustments to create this. Photomanipulation / GIMP" },
               {file: "red.jpg", thumb: "red_thumb.jpg", desc: "A handful of rectangles applied to a polar coordinate on top of a soft noise background. Abstract / GIMP" },
               {file: "rip.jpg", thumb: "rip_thumb.jpg", desc: "After blacking out and warping this fractal, I filled in the empty space with high-saturation noise. Fractal art / GIMP" },
               {file: "sand.jpg", thumb: "sand_thumb.jpg", desc: "Another one of my favorites.  The sandy texture resulted from a warped circular gradient, heavy noise, and bumpmapping. The gemstone on the left is a hexagonal mosaic.  Several adjustment layers and gradients create the color scheme. Abstract / GIMP" },
               {file: "silverShore.jpg", thumb: "silverShore_thumb.jpg", desc: "A minimalist alteration of the classic Mandelbrot. Fractal art / GIMP" },
               {file: "sleep.jpg", thumb: "sleep_thumb.jpg", desc: "A screenshot from The Matrix.  Blurred and oilified, with some attempts to place a focus on Neo and the monitor. Too dark for how vague the details are.  Looking forward to taking another crack at it in the future.  Photomanipulation / GIMP" },
            ];
            
            images.forEach(function(image) {
               var imgOnClick = "'./full/" + image.file + "', '" + image.desc + "'";
               var imgThumb = '<img class="artThumb" src="./thumbs/' + image.thumb + '" onclick="openLightbox(' + imgOnClick + ');" />';
               $('#artGallery').append(imgThumb);
            });
            
            $('#artDescription').click(function() {
               $(this).hide();
            });
            
            
            $('#lightboxTrans').click( function() {
               closeLightbox();
            });
            $('#artClose').click( function() {
               closeLightbox();
            });
         });
         
         function openLightbox(url, description) {
            $('#lightbox').show();
            $('#artLoading').show();
            img = new Image();
            img.src = url;
            img.onload = function() { //DOM won't know image dimensions until loaded
               var imgX = img.width;
               var imgY = img.height;
               var screenX = $(window).width();
               var screenY = $(window).height();
               
               //Scale image dimensions to fit any window size, preserving aspect ratio
               var newY, newX, ratio, difference;
               var scaleFactor = .92;
               var maxX = screenX * scaleFactor;
               var maxY = screenY * scaleFactor;
               if(imgX > maxX) { //Scale down if too wide
                  difference = imgX - maxX;
                  newX = (imgX - difference) * scaleFactor;
                  ratio = newX / imgX;
                  newY = imgY * ratio;
                  if(newY > maxY) { //Use newly scaled values if too tall
                     difference = newY - maxY;
                     newY = (newY - difference) * scaleFactor;
                     ratio = newY / (newY + difference);
                     newX = newX * ratio;
                  }
               }
               else if(imgY > maxY) { //Scale down if image is too tall
                  difference = imgY - maxY;
                  newY = (imgY - difference) * scaleFactor;
                  ratio = newY / imgY;
                  newX = imgX * ratio;
                  if(newX > maxX) { //Use newly scaled values if too wide
                     difference = newX - maxX;
                     newX = (newX - difference) * scaleFactor;
                     ratio = newX / (newX + difference);
                     newY = newY * ratio;
                  }
               }
               //No change if image already fits.
               if(imgY < maxY && imgX < maxX) {
                  newX = imgX;
                  newY = imgY;
               }
               $('#artFull').attr('src', img.src);
               $('#artFull').css('height', newY + 'px');
               $('#artFull').css('width', newX + 'px');
               $('#artDescription').css('width', (newX - 30) + 'px');
               $('#artDescription').css('margin-left', '-' + (newX / 2) + 'px');
               $('#artDescription').text(description);
               $('#artDescription').show();
               $('#artDetails').css('width', newX + 'px');
               $('#artDownload').attr('href', url);
               $('#artLoading').hide();
               $('#artFull').show();
               $('#artDetails').show();
            }
         }
         
         function closeLightbox() {
               $('#artDetails').hide();
               $('#artFull').hide();
               $('#artDescription').hide();
               $('#artFull').css('height', '');
               $('#artFull').css('width', '');
               $('#artFull').css('src', '');
               $('#artDownload').css('src', '');
               $('#artDescription').text('');
               $('#lightbox').hide(); //Reset dimensions every time, avoids occasional glitches
         }
      </script>
   </head>
   <body>
      <div id="lightbox">
         <div id="lightboxTrans"></div>
         <div id="artLoading">Loading<br />image<br />...</div>
         <div id="artDescription"></div>
         <img id="artFull" src="" />
         <div id="artDetails">
            <p style="text-align: left; float: left;"><a target="_blank" id="artDownload" href="">[&darr;]</a></p>
            <p style="text-align: right; float: right;"><a id="artClose">[X]</a></p>
         </div>
      </div>
      <?php include '../incl_navbar.php'; ?>
         <div id="content">
            <div id="artContent">
               <p>I have a never-ending fascination with procedural artforms, particularly in fractal art, abstract patterns, and heavy photomanipulation.  Although I create some designs from scratch, I focus primarily on finding patterns by rendering flames and exploring fractals, as well as photographing unique real world scenes.  Vibrant color schemes are key in revealing the intricacy of these patterns.</p>
               <div id="artGallery">
               </div>
            </div>
         </div>
      </div>
   </body>
</html>