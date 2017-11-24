 <div class=" block-slide-main slide-opt-4">
                        
                        <!-- slide -->
                        <div class="owl-carousel " 
                            data-nav="true" 
                            data-dots="false" 
                            data-margin="0" 
                            data-items='1' 
                            data-autoplayTimeout="700" 
                            data-autoplay="true" 
                            data-loop="true">
                            <?php foreach($slide_list as $row): ?>
                            <div class="item item1" style="background-image: url(<?php echo base_url('uploads/slide/'.$row->image); ?>">
                                <div class="description">
                                    <span class="subtitle"><?php echo $row->name; ?>   </span>
                                </div>
                            </div>
                        <?php endforeach; ?>

                      
                            
                        </div><!-- block slide top -->
                    </div>