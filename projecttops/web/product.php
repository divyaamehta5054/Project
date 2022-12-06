

    <div class="layout_padding gallery_section">
    	<div class="container">
    		<div class="row">
          <?php
               foreach($allpro as $pro)
               {
               ?>
    			<div class="col-sm-4">
    				<div class="best_shoes">
    					<p class="best_text"><?php echo $pro->pro_name;?> </p>
    					<div class="shoes_icon"><img src="../admin1/upload/<?php echo $pro->pro_img;?>"></div>
    					<div class="star_text">
    						<div class="left_part">
    							<ul>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    					</ul>
                          <form method="post">
                          <input type="text" name="qty">
    						</div>
    						<div class="right_part">
    							<div class="shoes_price">$ <span style="color: #ff4e5b;"><?php echo $pro->pro_price;?></span></div>
                         <p><?php // echo $pro->pro_desc;?></p>
                         
                       
                        <input type="hidden" name="pid" value="<?php echo $pro->pro_id;?>">
                        <div class="btn-action">
                           
                            <button class="btn bg-primary py-2 px-3" href="" type="submit" name="addtocart"><i class="bi bi-cart text-white"></i></button>
                            <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                        </div>
                    </form>
    						</div>
    					</div>
    				</div>
    			</div>

            <?php
               }
            ?>
    			</div>
             </div>
             </div>