<!-- FEATURED BOX -->
<div class="span-mainbox-cont">
    <h1>Programme actuel</h1>
    <div class="iframe-container">
        <!--<iframe src="http://player.vimeo.com/video/32397612" width="690" height="390" id="widget_video" name="widget_video"></iframe>-->
        <figure id="video_player">
            <div id="video_container">
                <video poster="<?php echo base_url().'assets/'; ?>videos/tanisa.jpg" width="690" height="390" autoplay="true">
                    <source src="<?php echo base_url().'assets/'; ?>videos/tanisa.mp4" type="video/mp4">
                </video>
            </div>
            <figcaption style="visibility: hidden">
                <a href="<?php echo base_url().'assets/'; ?>videos/tanisa.mp4">
                    <img src="<?php echo base_url().'assets/'; ?>videos/tanisa.jpg" alt="Stéphanie ft Samoela - Tanisa">
                </a>
                <a href="<?php echo base_url().'assets/'; ?>videos/eden.mp4">
                    <img src="<?php echo base_url().'assets/'; ?>videos/eden.jpg" alt="Hozier - From Eden">
                </a>
                <a href="<?php echo base_url().'assets/'; ?>videos/gomez.mp4">
                    <img src="<?php echo base_url().'assets/'; ?>videos/gomez.jpg" alt="Selena Gomez ft Ben Kweller - Hold On">
                </a>
            </figcaption>
        </figure>
        <script>
            var video_player = document.getElementById("video_player");
            video = video_player.getElementsByTagName("video")[0],
                video_links = video_player.getElementsByTagName("figcaption")[0],
                source = video.getElementsByTagName("source"),
                link_list = [],
                vidDir = "<?php echo base_url().'assets/'; ?>videos/",
                currentVid = 0,
                allLnks = video_links.children,
                lnkNum = allLnks.length;
            video.removeAttribute("controls");
            video.removeAttribute("poster");

            (function() {
                function playVid(index) {
                    video_links.children[index].classList.add("currentvid");
                    source[0].src = vidDir + link_list[index] + ".mp4";
                    currentVid = index;
                    video.load();
                    video.play();
                }

                for (var i=0; i<lnkNum; i++) {
                    var filename = allLnks[i].href;
                    link_list[i] = filename.match(/([^\/]+)(?=\.\w+$)/)[0];
                    (function(index){
                        allLnks[i].onclick = function(i){
                            i.preventDefault();
                            for (var i=0; i<lnkNum; i++) {
                                allLnks[i].classList.remove("currentvid");
                            }
                            playVid(index);
                        }
                    })(i);
                }
                video.addEventListener('ended', function () {
                    allLnks[currentVid].classList.remove("currentvid");
                    if ((currentVid + 1) >= lnkNum) { nextVid = 0 } else { nextVid = currentVid+1 }
                    playVid(nextVid);
                })

                video.addEventListener('mouseenter', function() {
                    video.setAttribute("controls","true");
                })

                video.addEventListener('mouseleave', function() {
                    video.removeAttribute("controls");
                })

                var indexOf = function(needle) {
                    if(typeof Array.prototype.indexOf === 'function') {
                        indexOf = Array.prototype.indexOf;
                    } else {
                        indexOf = function(needle) {
                            var i = -1, index = -1;
                            for(i = 0; i < this.length; i++) {
                                if(this[i] === needle) {
                                    index = i;
                                    break;
                                }}
                            return index;
                        };}
                    return indexOf.call(this, needle);
                };
                var focusedLink = document.activeElement;
                index = indexOf.call(allLnks, focusedLink);

                document.addEventListener('keydown', function(e) {
                    if (index) {
                        var focusedElement = document.activeElement;
                        if (e.keyCode == 40 || e.keyCode == 39) { // down or right cursor
                            var nextNode = focusedElement.nextElementSibling;
                            if (nextNode) { nextNode.focus(); } else { video_links.firstElementChild.focus(); }
                        }
                        if (e.keyCode == 38 || e.keyCode == 37) { // up or left cursor
                            var previousNode = focusedElement.previousElementSibling;
                            if (previousNode) { previousNode.focus(); } else { video_links.lastElementChild.focus(); }
                        }
                    }
                });

            })();

        </script>
    </div>
</div>
<div class="clear"></div>