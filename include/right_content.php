<div class="shopping_cart">
        	<div class="title_box">Keranjang Belanja</div>
            <div class="cart_details">
            <?php
			$sid = session_id();
            $query = @mysql_fetch_array(mysql_query("SELECT SUM(jumlah) as totaljumlah FROM orders_temp WHERE id_session='$sid'"));
  			if ($query['totaljumlah'] != ""){
    		echo "<a href='katalog_beranda.php?module=keranjang' title='header=[Selesai belanja] body=[&nbsp;] fade=[on]'><b> $query[totaljumlah]</a></b>";
  			}
  			else{
    			echo "<b> 0 </b>";
  			}
			
           	echo " items <br />
            <span class='border_cart'></span></div>";
            /*
			Total: <span class='price'>$subtotal_rp</span>
            ";*/
            
            echo "<div class='cart_icon'><a href='katalog_beranda.php?module=keranjang' title='header=[Selesai belanja] body=[&nbsp;] fade=[on]'><img src='css/images/shoppingcart.png' alt='' title='' width='48' height='48' border='0' /></a></div> ";
        
         
		?>
     </div>
   <hr />
<div class='bottom_prod' style="position:relative; left:0; ">
		<div id="tabsSocial">
			<ul>
				<li><a href="#f"><img src="css/images/facebook_alt.png" /></a></li>
				<li><a href="#t"><img src="css/images/twitter_alt.png" /></a></li>
                <li><a href="#y"><img src="css/images/google.png" /></a></li>
			</ul>
			<div id="f">           
				<div class='desc_prod_box_big'>

<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Ftokonano&amp;width=170&amp;height=395&amp;colorscheme=light&amp;show_faces=false&amp;border_color&amp;stream=true&amp;header=false&amp;appId=224227540922551" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:170px; height:395px;" allowTransparency="true"></iframe>
</div><br>
			</div><!--end tabs-1-->
			<div id="t">
				<div class='rev_prod_box_big'>
<a class="twitter-timeline" href="https://twitter.com/SetoElKahfi" data-widget-id="483817050393952256">Tweet oleh @SetoElKahfi</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


				</div><!--end rev_prod_box_big-->          
			</div><!--end tabs-2-->      
            <div id="y">
				<div class='rev_prod_box_big'>
				<iframe id="fr" src="http://www.youtube.com/subscribe_widget?p=setoelkahfi" style="overflow: hidden; height: 300px; width: 130px; border: 0;" scrolling="no" frameBorder="0"></iframe>
				</div><!--end rev_prod_box_big-->          
			</div><!--end tabs-3-->               
            
		</div><!--end tabs--> 
	</div><!--end bottom_prod-->

 <div class="title_box">Chat with us</div>  
     <div class="border_box">
		<a href="ymsgr:sendIM?setoelkahfi"><img src="http://opi.yahoo.com/online?u=setoelkahfi&m=g&t=14" alt="" border="0" /></a>
     </div> 
     