<html>
	<head>
      <title>TJF - eSports</title>
      <?php include '../incl_header.php'; ?>
      <script type="text/javascript">
         $(document).ready( function() {
            var videoFrame = '<iframe id class="video" width="560" height="315" src frameborder="0" allowfullscreen></iframe>';

            var youtubeURL = 'http://gdata.youtube.com/feeds/api/users/thunderfunking/uploads?alt=json&orderby=viewCount';
            
            $.getJSON(youtubeURL, function(data) {
               $.each(data.feed.entry, function(i,item) {
                  if(i > 3)
                     return;
                  var title    = item['title']['$t'];
                  var videoid  = item['id']['$t'];

                  var pubdate  = item['published']['$t'];
                  var fulldate = new Date(pubdate).toLocaleDateString();

                  var thumb = item['media$group']['media$thumbnail'][0]['url'];
                  
                  var description = item['media$group']['media$description']['$t'];

                  var vlink    = item['media$group']['media$content'][0]['url'];
                  var ytlink   = item['media$group']['media$player'][0]['url'];
                  var views = item['yt$statistics']['viewCount'];
                  var favs = item['yt$statistics']['favoriteCount'];
                  var comments = item['gd$comments']['gd$feedLink']['countHint'];
                  var rating = item['gd$rating']['average'];
                  var numRaters = item['gd$rating']['numRaters'];
                  
                  var currentVideo = videoFrame;
                  currentVideo = currentVideo.replace('src', 'src="' + vlink + '"');
                  currentVideo = currentVideo.replace('id', 'id="video' + i + '"');
                  
                  $('#videos').append('<div class="videoEntry"></div>');
                  var newEntry = $('#videos').children().last('.videoEntry');
                  newEntry.append('<div class="videoTitle">' + title + "</div>");
                  
                  var videoStr = '<div class="videoDisplay"><img src="' + thumb + '"';
                  videoStr = videoStr + 'class="videoThumb" onclick="showVideo(' + i + ');" />';
                  videoStr = videoStr + currentVideo + '</div>';
                  
                  newEntry.append(videoStr);
                  
                  var dataStr = '<div class="videoData">';
                  dataStr = dataStr + '<b>Published:</b> ' + parseDate(pubdate) + '<br /><br />';
                  dataStr = dataStr + '<b>Views:</b> ' + views + '<br /><br />';
                  dataStr = dataStr + '<b>Rating:</b> ' + rating.toFixed(2) + ' out of 5<br />';
                  dataStr = dataStr + '&nbsp;&nbsp;&nbsp;(' + numRaters + ' ratings)<br /><br />';
                  dataStr = dataStr + '<b>Comments:</b> ' + comments + '<br /><br />';
                  dataStr = dataStr + '<a target="_blank" href="' + ytlink + '">Direct link</a></div>';
                  
                  newEntry.append(dataStr);
                     
               });
            });
         });
         
         function showVideo(id) {
            var target = $('#video' + id);
            target.parent().find('.videoThumb').hide();
            target.show();
         }
         
         function parseDate(str) {
            var date = str.substr(0, str.indexOf('T'));
            return date;
         }
      </script>
	</head>
	<body>
      <?php include '../incl_navbar.php'; ?>
			<div id="content">
				<div id="castingContent">
					<p>Professional video game competitions represent a fascinating chance to witness the emergence of a new industry.  As financial and organizational support for electronic sports, known as "eSports" has increased, so has the demand for individuals that can make these games accessible to the wider public.</p>
               <p>I've spent a great deal of time performing broadcasts for tournaments in Valve's popular competitive game, Dota 2 - a complex team game of high strategy worthy of in-depth analysis.  In my first month of casting I garnered over 23,000 views and 90 subscribers.  These casts were first livestreamed from my desktop to the streaming site <a target="_blank" href="http://twitch.tv/cranberrythunderfunk">Twitch.tv</a>, then I edited and transferred them to YouTube.  Below are some of my most viewed broadcasts.  Click a thumbnail image to load the flash player, or the direct link to view the casts on YouTube.</p>
					<div id="videos">
               </div>
				</div>
			</div>
		</div>
	</body>
</html>