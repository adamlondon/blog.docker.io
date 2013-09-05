</div> <?php /* <-- this is the end of the div id=wrap, it pushes the static footer down --> */ ?>
<div id="footer" class="pagefooter">
    <div class="footer-landscape">
        <div class="footer-landscape-image">
            <!-- footer -->
            <div class="container">
                <div class="row footer">
                    <div class="col-md-8 col-sm-8 tbox">
                        Docker is an open source project, sponsored by  <a href="https://dotcloud.com">dotCloud</a>, under the <a href="https://github.com/dotcloud/docker/blob/master/LICENSE" title="Docker licence, hosted in the Github repository">apache 2.0 licence</a>
                        <div class="textleft social links">
                            <a class="twitter" href="http://twitter.com/docker">Twitter</a>
                            <a class="github" href="https://github.com/dotcloud/docker/">GitHub</a>
                        </div>
                    </div>

                    <div class="col-sm-2 tbox footerlist">
                        <h4>Community</h4>
                        <ul class="unstyled">
                            <li><a href="/community/" title="Community">Community</a></li>
                            <li><a href="/events/" title="Events and meetups">Events</a></li>
                        </ul>
                    </div>

                    <div class="col-sm-2 tbox footerlist">
                        <h4>About</h4>
                        <ul class="unstyled">

                            <li><a href="/news/" title="News and updates">News</a></li>
                            <li><a href="/press/" title="Docker in the media">Press</a></li>
                            <li><a href="/team/" title="The team behind">Team</a></li>

                        </ul>
                    </div>

                </div>
            </div>
            <!-- end of footer -->
        </div>
    </div>
</div>

<script>
  $(document).ready(function(){
    // Target your .container, .wrapper, .post, etc.
    $(".main").fitVids();
  });
</script>

<?php wp_footer(); ?>