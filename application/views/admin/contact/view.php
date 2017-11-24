<div id="content" class="span10" style="min-height: 283px;">
			
						
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home panel</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Chi tiết tin nhắn</a></li>
			</ul>

			<div class="row-fluid">
				
				
				
				<div class="span11 ">
					
					<div class="message dark">
						
						<div class="header">
							<h1>"<?php echo $contact->title ?>"</h1>
							<div class="from"><i class="halflings-icon user"></i> <b><?php echo $contact->user_name; ?></b> / <?php echo $contact->user_email; ?></div>
							<div class="date"><i class="halflings-icon time"></i> <?php echo int_to_date($contact->created); ?></b></div>
							
							<div class="menu"></div>
							
						</div>
						
						<div class="content" style="padding-bottom: 20px;">
							<?php echo $contact->content; ?>
						</div>

						<form class="replyForm" method="post" action="">

							<fieldset>
								<textarea tabindex="3" class="input-xlarge span12" id="message" name="body" rows="12" placeholder="Nhập tin nhắn trả lời tại đây"></textarea>
								<div class="actions">
									<button tabindex="3" type="submit" class="btn btn-success">Gửi tin nhắn</button>
								</div>
							</fieldset>

						</form>	
						
					</div>	
					
				</div>
						
			</div>
			
       

	</div>