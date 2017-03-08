<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 text-center" data-scrollreveal="enter left move 200px over 1.5s">
            
            <h2>inverse = $colorInverse($BgColor)</h2>
            <h2>normal = #$BgColor</h2>
            
            
            <hr class="primary" style="border-top:6px solid colorInverse(#$BgColor);">


            <% if $Feature_Image %>
            	<img src="$Feature_Image.URL" class="img-circle img-responsive img-centered " id="about-img" alt="">
			<% end_if %>
            
            <p data-scrollreveal="enter right move 200px over 1.5s">$Content</p>
              
            <p data-scrollreveal="enter right move 200px over 1.5s">Connect with me
                            <span class="page-scroll"><a href="#contact">now</a>
                            </span> if you're ready to get started!</p>

            <ul class="list-inline">
                <li>
                    <a href="https://www.facebook.com/matt.bullock1" target="_blank" class="btn btn-social-dark btn-facebook">
                        <i class="fa fa-fw fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="https://nz.linkedin.com/in/mattbullock93" target="_blank" class="btn btn-social-dark btn-linkedin">
                        <i class="fa fa-fw fa-linkedin"></i>
                    </a>
                </li>
            </ul>



        </div>
    </div>
</div>