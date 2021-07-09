
        $(document).ready(function()
        {
            // Slide the carousel upon button click
            // .carousel('prev') - Cycles to the previous item
            // .carousel('next') - Cycles to the next item.
            // Reference: https://getbootstrap.com/docs/4.4/components/carousel/#methods
            $('#prevMovie').on('click', function() {
                $('#moviesCarousel').carousel('prev');
            });
            $('#nextMovie').on('click', function() {
                $('#moviesCarousel').carousel('next');
            });

            // When a slide occurs, pause the current iframe video that is playing
            // player.pauseVideo():Void - Pauses the currently playing video.
            // Reference: https://developers.google.com/youtube/iframe_api_reference#Playback_controls
            $('#moviesCarousel').on('slide.bs.carousel', function(event) {
                // The variable "players" contain each Youtube Player for each iframe video
                // Reference: https://developers.google.com/youtube/iframe_api_reference#Loading_a_Video_Player
                // event.from - The index of the current video (before the slide occurs)
                //            - It is also the index of the corresponding player for the current video
                // Reference: https://getbootstrap.com/docs/4.4/components/carousel/#events
                players[event.from].pauseVideo();
            });
        });

        // Start of snippet from: https://developers.google.com/youtube/iframe_api_reference
        var tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
        var players = []; // would contain 1 player for each iframe video
        function onYouTubeIframeAPIReady()
        {
            var allMovieIframes = document.getElementById("moviesCarousel").getElementsByTagName('iframe');
            for (currentIFrame of allMovieIframes)
            {
                players.push(new YT.Player(
                    currentIFrame.id, // the target iframe video, here it is  either katniss, rancho, or logan
                    { events: { 'onStateChange': onPlayerStateChange } }
                ));
            }
        }
        function onPlayerStateChange(event) // triggered everytime ANY iframe video player among the "players" list is played, paused, ended, etc.
        {
            // Check if any iframe video is being played (or is currently buffering to be played)
            // Reference: https://developers.google.com/youtube/iframe_api_reference#Events
            if (event.data == YT.PlayerState.PLAYING || event.data == YT.PlayerState.BUFFERING)
            {
                // If any player has been detected to be currently playing or buffering, pause the carousel from sliding
                // .carousel('pause') - Stops the carousel from cycling through items.
                // Reference: https://getbootstrap.com/docs/4.4/components/carousel/#methods
                $('#moviesCarousel').carousel('pause');
            }
            else
            {
                // If there are no currently playing nor buffering videos, resume the sliding of the carousel
                // This means that once the current video is in a state that is not playing (aside from buffering so either it was paused, or has ended, or wasn't totally played), then the carousel would now resume sliding
                $('#moviesCarousel').carousel();
            }
        }
        // End of snippet from Youtube iframe API
