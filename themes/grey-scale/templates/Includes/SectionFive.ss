<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2>$Section_Five_Section_Heading</h2>
            <hr class="light">
        </div>
    
    </div>
    <div class="row" data-scrollreveal="enter bottom move 200px over 1.5s">
        <div class="isotope">            
            <% if $Projects %>
                <% loop $Projects %>                
                    <div class="col-sm-4 portfolio-item">
                        <a href="#portfolio-modal-$ID" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <h3><i class="fa fa-search fa-2x"></i></h3>
                                </div>
                            </div>
                            <img src="$Cover_Image.URL" class="img-centered" alt="">
                        </a>
                     </div> 
                 <% include ProjectModal %>
                <% end_loop %>
            <% end_if %>
        </div>
    </div>
</div>
 