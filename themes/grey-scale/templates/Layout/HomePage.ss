<header class="video-bg scroll" data-stellar-background-ratio="0.5">
    <% include SectionOne %>
</header>

<% loop Section %>
	<section id="$ID" class="scroll" <% if colorBackground($BgType) %> style="background-color: #$Top.BgColor " <% end_if %> >
        <% include Meep %>
	</section>
<% end_loop %>

<% include Footer %>



<%-- 
<section id="about" class="about-2 scroll">
    <% include SectionTwo %>
</section>
<section id="info" class="bg-parallax-dark nopadding scroll" style="background-image: url($ThemeDir/img/demo-bgs/faces-demo.jpg); backgro" data-stellar-background-ratio="0.5">
    <% include SectionThree %>
</section>
<section id="features" class="services-1 scroll">
    <% include SectionFour %>    
</section>
<section id="work" class="portfolio-1 bg-primary scroll" style="background-color: #$BgColor;">
    <% include SectionFive %>
</section>
<section id="pricing" class="pricing-1 scroll">
    <% include SectionSix %>
</section>
<section id="contact" class="contact-1 bg-parallax-dark scroll" style="background-image: url($ThemeDir/img/wallpaper5.jpg); padding: 0;">
    <% include SectionSeven %>
</section>
--%>