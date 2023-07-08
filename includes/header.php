<!-- header -->
<div class="header">
    <div class="container">
        <div class="header-left">
            <span class="menu"><img src="images/menu.png" alt=""/></span>
                <ul class="nav1">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT US</a></li>
                    <li><a href="error.html"> AVAILABLE FOOD LIST</a></li>
                    
                    <li><a href="contact.php">CONTACT US</a></li>
                    <li><a href="error.html">DONOR</a></li>
                    <li><a href="error.html">ADMIN</a></li>
                    
                </ul>
                <!-- script for menu -->
                    <script> 
                        $( "span.menu" ).click(function() {
                        $( "ul.nav1" ).slideToggle( 300, function() {
                         // Animation complete.
                        });
                        });
                    </script>
                <!-- //script for menu -->
        </div>
        <div class="header-right">
            <a href="index.php"></a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //header -->