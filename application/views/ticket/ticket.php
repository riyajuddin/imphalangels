	<?php 
	$type=$this->session->userdata("TYPE");
	$gate=$this->session->userdata("GATE");
	$match=$this->session->userdata("MATCH");
	$qty=$this->session->userdata("QTY");
	$TRANC_ID=$this->session->userdata("TID");
	$ticketType="ONL";
	
	$sql = "SELECT sl
					FROM  ticket
		where type='ONL'
					ORDER BY  id DESC
					LIMIT 1";
	
	$query1 = $this->db->query($sql);
	$sl=10000;
	if($query1){
		while($result=mysql_fetch_array($query1->result_id)){
			$sl=$result['sl'];
	
		}
	}
	
	
	
	for ($i=0;$i<$qty;$i++){
		$sl=$sl+1;
		$barcode=$ticketType.$sl;
		$sql="INSERT INTO `ticket`(`type`, `sl`, `barcode`, `status`, `entry`,match_id,gate_id,tranc_id)
		VALUES ('$ticketType','$sl','$barcode','OPEN',NOW(),'$match','$gate','$TRANC_ID')";
		$query = $this->db->query($sql);
		
		$code=mysql_real_escape_string($sql);
		$sql3 = "INSERT INTO `sql_data`(`sql_code`) VALUES ('$code')";
		$query3 = $this->db->query($sql3);
		
		$sql="INSERT INTO `seats`(`gate_id`, `match_id`) VALUES ('$gate','$match')";
		$query = $this->db->query($sql);
		$sql2 = "SELECT m.ID, home_team,
		away_team,
		(SELECT name FROM team where ID=m.home_team) AS h_team,
		(SELECT name FROM team where ID=m.away_team) AS a_team,
		(SELECT code FROM team where ID=m.home_team) AS h_code,
		(SELECT code FROM team where ID=m.away_team) AS a_code,
		(SELECT image FROM team where ID=m.home_team) AS h_img, 
		(SELECT image FROM team where ID=m.away_team) AS a_img,
		(SELECT discription FROM gate where ID=$gate) AS gate,
				m.date AS dt FROM matchs m WHERE ID=$match";
		
		$query2 = $this->db->query($sql2);
		
		if($query2){
			while($result=mysql_fetch_array($query2->result_id)){
			if($type=="VIP"){
				
				?>
				<table>
					
					
				<tr  >
				<td rowspan="" colspan="2" align="center"   style="border-right:2px dotted black;font-family:arial; padding:10px;" >
				<img src="<?php echo base_url(); ?>/img/team/logo.jpg" style="height:75px;"  /><br> <br><b> <?php echo $result['h_team'];?> <br> VS <br> <?php echo $result['a_team'];?> </b>  <br> <br> <span style="font-size:14px;"> <?php echo $result['dt'];?> <br> Khuman Lampak Stadium  <br>(Ticket : Rs.300) </span> <br> <br> ADMIT ONE
							</td>
							
							
							<td colspan="4" align="center"   style="font-family:arial; padding:10px;" >
							<span style="font-size: 30px;  position: relative;  right: -301px; top: -44px;" ></span> 
							 <img src="<?php echo base_url(); ?>/img/team/logo.jpg" style="height:75px;"  /><br> 
							 <img src="<?php echo base_url(); ?>/img/team/<?php echo $result['h_img'];?>" style="height:50px; padding-left:50px;"  /> 
							  <img src="<?php echo base_url(); ?>/img/team/<?php echo $result['a_img'];?>" style="height:50px; padding-right:100px; padding-left:100px;"  />  
							  <img src="<?php echo base_url(); ?>/img/team/vss.png>"  style="height:50px;padding-right:50px;"  />   
							  <br> <span style="font-size:14px;" align="left">  <b><?php echo $result['h_team'];?> </b></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:14px;" align="right"> <b><?php echo $result['a_team'];?> </b></span> <br><br>  <span style="font-size:14px;"> <?php echo $result['dt'];?> <br> Khuman Lampak Stadium  </span> <br> <br> <br> <span align="left"> ADMIT ONE </span> 
							</td>
							
							
							<td rowspan="3"  align="center"   style="font-family:arial; padding:10px;" >
							 <img src="<?php echo base_url();?>home/generatecode?code=<?php echo $barcode;?>" style="transform: rotate(90deg);"  />
							</td>
							
							</tr>
							
							<tr   style=" background-color:#F58634; color:white; font-family:arial;" align="center">
							<td colspan="3"  style="border-right:2px dotted black;">
							<span   align="center" style="color:white;" > <br> <b> VIP GALLERY <br> <?php echo $result['gate'];?> </b><br><br> </span>
							</td>
							<td  >
							<span   align="center"  style="color:white;" > <br> <b> VIP GALLERY </b><br><br> </span>
							</td>
							<td >
							<span   align="center" style="color:white;" > <br> <b>  <?php echo $result['gate'];?> </span> </b><br><br> </span>
							</td>
							</tr>
							
							
							
							
							</table>
							<br>
							<table border="1" >
								<tr>
									<td style="padding:5px;">
										<h3><u>BANNED ITEMS INSIDE THE STADIUM </u></h3>
									</td>
									<td style="padding:5px;" >
										<h3>OUR SPONSORS</h3>
									</td>
								</tr>
								<tr>
									<td rowspan="4" style="padding:5px;">
										<p>&nbsp; - Animals 
										<br>&nbsp; - Balls, toys or sports equipment
										<br>&nbsp; - Poles or sticks
										<br>&nbsp; - Beverage containers factory sealed plastic bottles of water
										<br>&nbsp; - Cans, Glass bottles or Alcoholic beverages
										<br>&nbsp; - Coolers
										<br>&nbsp; - Glass, Metals or hard plastic containers
										<br>&nbsp; - Helium Balloons 
										<br>&nbsp; - Laser pointers
										<br>&nbsp; - Selfie sticks
										<br>&nbsp; - Weapons or projectiles 
										<br>&nbsp; - Cigarettes lighters
										<br>&nbsp; - Pan/Tobacco products
										<br>&nbsp; - Sunflower seeds 
										<br>&nbsp; - Flammable toxic hazardous substances
										<br>&nbsp; - Fireworks crackers 
										<br>&nbsp; - Illegal substances
										</p>
										<p  style="background-color:red;color:white; padding:5px;">Please cooperate with security checking procedure </p>
									</td>
								</tr>
								<tr>
									<td  style="padding:5px;">
										<img src="<?php echo base_url(); ?>/img/team/pclassic.png"  /> 
										<img src="<?php echo base_url(); ?>/img/team/phorizon.png"  />
										<img src="<?php echo base_url(); ?>/img/team/plikla.png"  /> 
										<img src="<?php echo base_url(); ?>/img/team/pae.png"  /> 
										<img src="<?php echo base_url(); ?>/img/team/pvector.png"  />
									</td>
								</tr>

								
								<tr>
									<td style="padding:5px;">
										<b>Event partner</b>
										<br>
									<img src="<?php echo base_url(); ?>/img/team/pthougal.png"  /> 
									</td>
									
								</tr>
								<tr>
									<td style="padding:5px;">
										<b>IT partner</b> <br>
										<img src="<?php echo base_url(); ?>/img/team/pmobimp.png"  />
									</td>	
								</tr>
							</table>

							
							<br><?php
				
			}
		else{
	?>

			<table>
			
					
			<tr  >
			<td rowspan="" colspan="2" align="center"   style="border-right:2px dotted black;font-family:arial; padding:10px;" >
			<img src="<?php echo base_url(); ?>/img/team/logo.jpg" style="height:75px;"  /><br> <br><b> <?php echo $result['h_team'];?> <br> VS <br> <?php echo $result['a_team'];?> </b>  <br> <br> <span style="font-size:14px;"> <?php echo $result['dt'];?> <br> Khuman Lampak Stadium  <br>(Ticket : Rs.50) </span> <br> <br> ADMIT ONE 
			</td>
			
			
			<td colspan="4" align="center"   style="font-family:arial; padding:10px;" >
			<span style="font-size: 30px;  position: relative;  right: -301px; top: -44px;" ></span> 
			 <img src="<?php echo base_url(); ?>/img/team/logo.jpg" style="height:75px;"  /><br> 
			 <img src="<?php echo base_url(); ?>/img/team/<?php echo $result['h_img'];?>" style="height:50px; padding-left:50px;"  /> 
			  <img src="<?php echo base_url(); ?>/img/team/<?php echo $result['a_img'];?>" style="height:50px; padding-right:100px; padding-left:100px;"  />  
			  <img src="<?php echo base_url(); ?>/img/team/vss.png>"  style="height:50px;padding-right:50px;"  />   
			  <br> <span style="font-size:14px;" align="left">  <b><?php echo $result['h_team'];?> </b></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:14px;" align="right"> <b><?php echo $result['a_team'];?> </b></span> <br><br>  <span style="font-size:14px;"> <?php echo $result['dt'];?> <br> Khuman Lampak Stadium  </span> <br> <br> <br> <span align="left"> ADMIT ONE </span> 
			</td>
			
			<td rowspan="3"  align="center"   style="font-family:arial; padding:10px;" >
			 <img src="<?php echo base_url();?>home/generatecode?code=<?php echo $barcode;?>" style="transform: rotate(90deg);"  />
			</td>
			
			</tr>
			
			<tr   style=" background-color:#0E703F; color:white; font-family:arial;" align="center">
			<td colspan="3"  style="border-right:2px dotted black;">
			<span   align="center"  style="color:white;"> <br> <b> NORMAL GALLERY <br> <?php echo $result['gate'];?> </b><br><br> </span>
			</td>
			<td  >
			<span   align="center" style="color:white;" > <br> <b> NORMAL GALLERY </b><br><br> </span>
			</td>
			<td >
			<span   align="center" style="color:white;" > <br> <b>  <?php echo $result['gate'];?> </span> </b><br><br> </span>
			</td>
			</tr>
			
			
			
			
			</table>
			
			<br>
							<table border="1" >
								<tr>
									<td style="padding:5px;">
										<h3><u>BANNED ITEMS INSIDE THE STADIUM </u></h3>
									</td>
									<td style="padding:5px;" >
										<h3>OUR SPONSORS</h3>
									</td>
								</tr>
								<tr>
									<td rowspan="4" style="padding:5px;">
										<p>&nbsp; - Animals 
										<br>&nbsp; - Balls, toys or sports equipment
										<br>&nbsp; - Poles or sticks
										<br>&nbsp; - Beverage containers factory sealed plastic bottles of water
										<br>&nbsp; - Cans, Glass bottles or Alcoholic beverages
										<br>&nbsp; - Coolers
										<br>&nbsp; - Glass, Metals or hard plastic containers
										<br>&nbsp; - Helium Balloons 
										<br>&nbsp; - Laser pointers
										<br>&nbsp; - Selfie sticks
										<br>&nbsp; - Weapons or projectiles 
										<br>&nbsp; - Cigarettes lighters
										<br>&nbsp; - Pan/Tobacco products
										<br>&nbsp; - Sunflower seeds 
										<br>&nbsp; - Flammable toxic hazardous substances
										<br>&nbsp; - Fireworks crackers 
										<br>&nbsp; - Illegal substances
										</p>
										<p  style="background-color:red;color:white; padding:5px;">Please cooperate with security checking procedure </p>
									</td>
								</tr>
								<tr>
									<td  style="padding:5px;">
										<img src="<?php echo base_url(); ?>/img/team/pclassic.png"  /> 
										<img src="<?php echo base_url(); ?>/img/team/phorizon.png"  />
										<img src="<?php echo base_url(); ?>/img/team/plikla.png"  /> 
										<img src="<?php echo base_url(); ?>/img/team/pae.png"  /> 
										<img src="<?php echo base_url(); ?>/img/team/pvector.png"  />
									</td>
								</tr>

								
								<tr>
									<td style="padding:5px;">
										<b>Event partner</b>
										<br>
									<img src="<?php echo base_url(); ?>/img/team/pthougal.png"  /> 
									</td>
									
								</tr>
								<tr>
									<td style="padding:5px;">
										<b>IT partner</b> <br>
										<img src="<?php echo base_url(); ?>/img/team/pmobimp.png"  />
									</td>	
								</tr>
							</table>

			
			<br>
<?php }}
		}
	}
	?>