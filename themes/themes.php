<?php

function wpt_price_table_style($postid)
	{	
		$wpt_themes = get_post_meta( $postid, 'wpt_themes', true );
		
		$wpt_column_width = get_post_meta( $postid, 'wpt_column_width', true );
		$wpt_row_height = get_post_meta( $postid, 'wpt_row_height', true );
		$wpt_corner_radius = 0; //get_post_meta( $postid, 'wpt_corner_radius', true ); //for free version	
		$wpt_corner_gradient = 0; //get_post_meta( $postid, 'wpt_corner_gradient', true ); //  for free version	
		$wpt_table_column_color = get_post_meta( $postid, 'wpt_table_column_color', true );
		$wpt_total_column = get_post_meta( $postid, 'wpt_total_column', true );
		$wpt_bg_img = get_post_meta( $postid, 'wpt_bg_img', true );
		$wpt_themes = get_post_meta( $postid, 'wpt_themes', true );		
		$wpt_featured_column = get_post_meta( $postid, 'wpt_featured_column', true );
		$wpt_column_margin = 10; // get_post_meta( $postid, 'wpt_column_margin', true ); //for free version		


		if($wpt_themes=="default")
			{	
		echo "<style type='text/css'>";


		if(($wpt_column_margin!=NULL))
			{
				echo ".price-table-main.default .price-table ul li{
					margin: 0 ".$wpt_column_margin."px;}";
			}


		if(isset($wpt_corner_radius))
			{
				echo ".price-table-main.default .price-table .price-table-column-items.wpt-featured{
					border-radius: ".$wpt_corner_radius."px;}";
			}

		if(isset($wpt_bg_img))
			{
				$bg_dir_url = plugins_url("kento-pricing-table/css/bg/");
				$bg_name = str_replace($bg_dir_url,"",$wpt_bg_img);
				
			if($bg_name=="wpt-bg-1.jpg")
				{
					echo ".price-table-main.default .price-table
						{background:none;}";
				}
			else
				{
					echo ".price-table-main.default .price-table
						{background:url('".$wpt_bg_img."') repeat scroll 0 0 rgba(0, 0, 0, 0);}";
				}
			}

		if(!empty($wpt_column_width))
			{
				echo ".price-table-main.default .price-table ul li ul li
					{width: ".$wpt_column_width."px;}";
				
					
						
			}
	
		$i =1;
		if(!empty($wpt_row_height[$i]))
			{
				echo ".price-table-main.default .price-table ul li ul li:first-child{
					height: ".$wpt_row_height[$i].";}";
			}

		$j = 1;
		while($j<=$wpt_total_column)
			{
				echo "
				.price-table-main.default .table-column-".$j." li:first-child
					{
					border-top-left-radius: ".$wpt_corner_radius."px;
					border-top-right-radius: ".$wpt_corner_radius."px;
					}
				.price-table-main.default .table-column-".$j." li:last-child
					{
					border-bottom-left-radius: ".$wpt_corner_radius."px;
					border-bottom-right-radius: ".$wpt_corner_radius."px;
					}";			
				
		if(!empty($wpt_table_column_color))
		{
			echo "
				.price-table-main.default .table-column-".$j." li:first-child
					{
					border-bottom: 1px solid ".wpt_style_dark_color($wpt_table_column_color)." !important;
					background: linear-gradient(to bottom, ".wpt_style_dark_color($wpt_table_column_color)." 0%, ".$wpt_table_column_color." ".$wpt_corner_gradient."%) !important;
					background: ".$wpt_table_column_color.";
					background: -moz-linear-gradient(top, ".wpt_style_dark_color($wpt_table_column_color)." 0%, ".$wpt_table_column_color." ".$wpt_corner_gradient."%);
					background: -webkit-linear-gradient(top, ".wpt_style_dark_color($wpt_table_column_color)." 0%, ".$wpt_table_column_color." ".$wpt_corner_gradient."%);
					background: linear-gradient(to bottom, ".wpt_style_dark_color($wpt_table_column_color)." 0%, ".$wpt_table_column_color." ".$wpt_corner_gradient."%);
					}
				.price-table-main.default .table-column-".$j." li:last-child
					{
					background: ".$wpt_table_column_color.";
					background: -moz-linear-gradient(bottom, ".wpt_style_dark_color($wpt_table_column_color)." 0%, ".$wpt_table_column_color." ".$wpt_corner_gradient."%);
					background: -webkit-linear-gradient(bottom, ".wpt_style_dark_color($wpt_table_column_color)." 0%, ".$wpt_table_column_color." ".$wpt_corner_gradient."%);
					background: linear-gradient(to top, ".wpt_style_dark_color($wpt_table_column_color)." 0%, ".$wpt_table_column_color." ".$wpt_corner_gradient."%);
					}
				.price-table-main.default .table-column-".$j." li:nth-child(2)
					{background-color: ".$wpt_table_column_color." !important;}
				.price-table-main.default .table-column-".$j." li:last-child div a
					{background-color: ".wpt_style_dark_color($wpt_table_column_color)." !important;}";
		}			
	else
		{
			echo ".price-table-main.default .table-column-".$j." li:first-child
					{
					border-bottom: 1px solid #23c8a7;
					background: #25f5cb;
					background: -moz-linear-gradient(top, #148b73 0%, #25f5cb ".$wpt_corner_gradient."%);
					background: -webkit-linear-gradient(top, #148b73 0%, #25f5cb ".$wpt_corner_gradient."%);
					background: linear-gradient(to bottom, #148b73 0%, #25f5cb ".$wpt_corner_gradient."%);
					}
				.price-table-main.default .table-column-".$j." li:last-child
					{
					background: #25f5cb;
					background: -moz-linear-gradient(bottom, #148b73 0%, #25f5cb ".$wpt_corner_gradient."%);
					background: -webkit-linear-gradient(bottom, #148b73 0%, #25f5cb ".$wpt_corner_gradient."%);
					background: linear-gradient(to top, #148b73 0%, #25f5cb ".$wpt_corner_gradient."%);
					}
				.price-table-main.default .table-column-".$j." li:nth-child(2)
					{background-color: #25f5cb !important;}
				.price-table-main.default .table-column-".$j." li:last-child div a
					{background-color: #11705d !important;}";
		}
				$j++; 	
			}
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
		echo "</style>";
		}
		
	elseif($wpt_themes=="flat")
		{
	
		echo "<style type='text/css'>";


		if(($wpt_column_margin!=NULL))
			{
				echo ".price-table-main.flat .price-table ul li{
					margin: 0 ".$wpt_column_margin."px;}";
			}


		if(isset($wpt_corner_radius))
			{
				echo ".price-table-main.flat .price-table .price-table-column-items.wpt-featured{
					border-radius: ".$wpt_corner_radius."px;}";
			}

		if(isset($wpt_bg_img))
			{
				$bg_dir_url = plugins_url("kento-pricing-table/css/bg/");
				$bg_name = str_replace($bg_dir_url,"",$wpt_bg_img);
				
			if($bg_name=="wpt-bg-1.jpg")
				{
					echo ".price-table-main.flat .price-table
						{background:none;}";
				}
			else
				{
					echo ".price-table-main.flat .price-table
						{background:url('".$wpt_bg_img."') repeat scroll 0 0 rgba(0, 0, 0, 0);}";
				}
			}

		if(!empty($wpt_column_width))
			{
				echo ".price-table-main.flat .price-table ul li ul li
					{width: ".$wpt_column_width."px;}";
				
					
						
			}
	
		$i =1;
		if(!empty($wpt_row_height[$i]))
			{
				echo ".price-table-main.flat .price-table ul li ul li:first-child{
					height: ".$wpt_row_height[$i].";}";
			}

		$j = 1;
		while($j<=$wpt_total_column)
			{
				echo "
				.price-table-main.flat .table-column-".$j." li:first-child
					{
					border-top-left-radius: ".$wpt_corner_radius."px;
					border-top-right-radius: ".$wpt_corner_radius."px;
					}
				.price-table-main.flat .table-column-".$j." li:last-child
					{
					border-bottom-left-radius: ".$wpt_corner_radius."px;
					border-bottom-right-radius: ".$wpt_corner_radius."px;
					}";			
				
		if(!empty($wpt_table_column_color))
		{
			echo "
				.price-table-main.flat .table-column-".$j." li:first-child
					{
					border-bottom: 1px solid ".wpt_style_dark_color($wpt_table_column_color)." !important;
					background: linear-gradient(to bottom, ".wpt_style_dark_color($wpt_table_column_color)." 0%, ".$wpt_table_column_color." ".$wpt_corner_gradient."%) !important;
					background: ".$wpt_table_column_color.";
					background: -moz-linear-gradient(top, ".wpt_style_dark_color($wpt_table_column_color)." 0%, ".$wpt_table_column_color." ".$wpt_corner_gradient."%);
					background: -webkit-linear-gradient(top, ".wpt_style_dark_color($wpt_table_column_color)." 0%, ".$wpt_table_column_color." ".$wpt_corner_gradient."%);
					background: linear-gradient(to bottom, ".wpt_style_dark_color($wpt_table_column_color)." 0%, ".$wpt_table_column_color." ".$wpt_corner_gradient."%);
					}
				.price-table-main.flat .table-column-".$j." li:last-child
					{
					background: ".$wpt_table_column_color.";
					background: -moz-linear-gradient(bottom, ".wpt_style_dark_color($wpt_table_column_color)." 0%, ".$wpt_table_column_color." ".$wpt_corner_gradient."%);
					background: -webkit-linear-gradient(bottom, ".wpt_style_dark_color($wpt_table_column_color)." 0%, ".$wpt_table_column_color." ".$wpt_corner_gradient."%);
					background: linear-gradient(to top, ".wpt_style_dark_color($wpt_table_column_color)." 0%, ".$wpt_table_column_color." ".$wpt_corner_gradient."%);
					}
				.price-table-main.flat .table-column-".$j." li:nth-child(2)
					{background-color: ".$wpt_table_column_color." !important;}
					
				.price-table-main.flat .table-column-".$j." li:nth-child(2) .price
					{background-color: ".wpt_style_dark_color($wpt_table_column_color)." !important;}					
				.price-table-main.flat .table-column-".$j." li:last-child div a
					{background-color: ".wpt_style_dark_color($wpt_table_column_color)." !important;}";
		}			
	else
		{
			echo ".price-table-main.flat .table-column-".$j." li:first-child
					{
					border-bottom: 1px solid #23c8a7;
					background: #25f5cb;
					background: -moz-linear-gradient(top, #148b73 0%, #25f5cb ".$wpt_corner_gradient."%);
					background: -webkit-linear-gradient(top, #148b73 0%, #25f5cb ".$wpt_corner_gradient."%);
					background: linear-gradient(to bottom, #148b73 0%, #25f5cb ".$wpt_corner_gradient."%);
					}
				.price-table-main.flat .table-column-".$j." li:last-child
					{
					background: #25f5cb;
					background: -moz-linear-gradient(bottom, #148b73 0%, #25f5cb ".$wpt_corner_gradient."%);
					background: -webkit-linear-gradient(bottom, #148b73 0%, #25f5cb ".$wpt_corner_gradient."%);
					background: linear-gradient(to top, #148b73 0%, #25f5cb ".$wpt_corner_gradient."%);
					}
				.price-table-main.flat .table-column-".$j." li:nth-child(2)
					{background-color: #25f5cb !important;}
				.price-table-main.flat .table-column-".$j." li:last-child div a
					{background-color: #11705d !important;}";
		}
				$j++; 	
			}
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
		echo "</style>";
		
		
		
		
		
		}
		
		elseif($wpt_themes=="ultra")
			{
echo "<style type='text/css'>";


		if(($wpt_column_margin!=NULL))
			{
				echo ".price-table-main.ultra .price-table ul li{
					margin: 0 ".$wpt_column_margin."px;}";
			}


		if(isset($wpt_corner_radius))
			{
				echo ".price-table-main.ultra .price-table .price-table-column-items.wpt-featured{
					border-radius: ".$wpt_corner_radius."px;}";
			}

		if(isset($wpt_bg_img))
			{
				$bg_dir_url = plugins_url("kento-pricing-table/css/bg/");
				$bg_name = str_replace($bg_dir_url,"",$wpt_bg_img);
				
			if($bg_name=="wpt-bg-1.jpg")
				{
					echo ".price-table-main.ultra .price-table
						{background:none;}";
				}
			else
				{
					echo ".price-table-main.ultra .price-table
						{background:url('".$wpt_bg_img."') repeat scroll 0 0 rgba(0, 0, 0, 0);}";
				}
			}

		if(!empty($wpt_column_width))
			{
				echo ".price-table-main.ultra .price-table ul li ul li
					{width: ".$wpt_column_width."px;}";
				
					
						
			}
	
		$i =1;
		if(!empty($wpt_row_height[$i]))
			{
				echo ".price-table-main.ultra .price-table ul li ul li:first-child{
					height: ".$wpt_row_height[$i].";}";
			}

		$j = 1;
		while($j<=$wpt_total_column)
			{
				echo "
				.price-table-main.ultra .table-column-".$j." li:first-child
					{
					border-top-left-radius: ".$wpt_corner_radius."px;
					border-top-right-radius: ".$wpt_corner_radius."px;
					}
				.price-table-main.ultra .table-column-".$j." li:last-child
					{
					border-bottom-left-radius: ".$wpt_corner_radius."px;
					border-bottom-right-radius: ".$wpt_corner_radius."px;
					}";			
				
		if(!empty($wpt_table_column_color))
		{
			echo "
				.price-table-main.ultra .table-column-".$j." li:first-child
					{
					border-bottom: 1px solid ".wpt_style_dark_color($wpt_table_column_color)." !important;
					background: linear-gradient(to bottom, ".wpt_style_dark_color($wpt_table_column_color)." 0%, ".$wpt_table_column_color." ".$wpt_corner_gradient."%) !important;
					background: ".$wpt_table_column_color.";
					background: -moz-linear-gradient(top, ".wpt_style_dark_color($wpt_table_column_color)." 0%, ".$wpt_table_column_color." ".$wpt_corner_gradient."%);
					background: -webkit-linear-gradient(top, ".wpt_style_dark_color($wpt_table_column_color)." 0%, ".$wpt_table_column_color." ".$wpt_corner_gradient."%);
					background: linear-gradient(to bottom, ".wpt_style_dark_color($wpt_table_column_color)." 0%, ".$wpt_table_column_color." ".$wpt_corner_gradient."%);
					}
				.price-table-main.ultra .table-column-".$j." li:last-child
					{
					background: ".$wpt_table_column_color.";
					background: -moz-linear-gradient(bottom, ".wpt_style_dark_color($wpt_table_column_color)." 0%, ".$wpt_table_column_color." ".$wpt_corner_gradient."%);
					background: -webkit-linear-gradient(bottom, ".wpt_style_dark_color($wpt_table_column_color)." 0%, ".$wpt_table_column_color." ".$wpt_corner_gradient."%);
					background: linear-gradient(to top, ".wpt_style_dark_color($wpt_table_column_color)." 0%, ".$wpt_table_column_color." ".$wpt_corner_gradient."%);
					}
				.price-table-main.ultra .table-column-".$j." li:nth-child(2)
					{background-color: ".$wpt_table_column_color." !important;}
					
				.price-table-main.ultra .table-column-".$j." li:nth-child(2) .price
					{background-color: ".wpt_style_dark_color($wpt_table_column_color)." !important;}					
				.price-table-main.ultra .table-column-".$j." li:last-child div a
					{background-color: ".wpt_style_dark_color($wpt_table_column_color)." !important;}";
		}			
	else
		{
			echo ".price-table-main.ultra .table-column-".$j." li:first-child
					{
					border-bottom: 1px solid #23c8a7;
					background: #25f5cb;
					background: -moz-linear-gradient(top, #148b73 0%, #25f5cb ".$wpt_corner_gradient."%);
					background: -webkit-linear-gradient(top, #148b73 0%, #25f5cb ".$wpt_corner_gradient."%);
					background: linear-gradient(to bottom, #148b73 0%, #25f5cb ".$wpt_corner_gradient."%);
					}
				.price-table-main.ultra .table-column-".$j." li:last-child
					{
					background: #25f5cb;
					background: -moz-linear-gradient(bottom, #148b73 0%, #25f5cb ".$wpt_corner_gradient."%);
					background: -webkit-linear-gradient(bottom, #148b73 0%, #25f5cb ".$wpt_corner_gradient."%);
					background: linear-gradient(to top, #148b73 0%, #25f5cb ".$wpt_corner_gradient."%);
					}
				.price-table-main.ultra .table-column-".$j." li:nth-child(2)
					{background-color: #25f5cb !important;}
				.price-table-main.ultra .table-column-".$j." li:last-child div a
					{background-color: #11705d !important;}";
		}
				$j++; 	
			}
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
		echo "</style>";
			
			}
		
		elseif($wpt_themes=="monsoon")
			{
echo "<style type='text/css'>";


		if(($wpt_column_margin!=NULL))
			{
				echo ".price-table-main.monsoon .price-table ul li{
					margin: 0 ".$wpt_column_margin."px;}";
			}


		if(isset($wpt_corner_radius))
			{
				echo ".price-table-main.monsoon .price-table .price-table-column-items.wpt-featured{
					border-radius: ".$wpt_corner_radius."px;}";
			}

		if(isset($wpt_bg_img))
			{
				$bg_dir_url = plugins_url("kento-pricing-table/css/bg/");
				$bg_name = str_replace($bg_dir_url,"",$wpt_bg_img);
				
			if($bg_name=="wpt-bg-1.jpg")
				{
					echo ".price-table-main.monsoon .price-table
						{background:none;}";
				}
			else
				{
					echo ".price-table-main.monsoon .price-table
						{background:url('".$wpt_bg_img."') repeat scroll 0 0 rgba(0, 0, 0, 0);}";
				}
			}

		if(!empty($wpt_column_width))
			{
				echo ".price-table-main.monsoon .price-table ul li ul li
					{width: ".$wpt_column_width."px;}";
				
					
						
			}
	
		$i =1;
		if(!empty($wpt_row_height[$i]))
			{
				echo ".price-table-main.monsoon .price-table ul li ul li:first-child{
					height: ".$wpt_row_height[$i].";}";
			}

		$j = 1;
		while($j<=$wpt_total_column)
			{
				echo "
				.price-table-main.monsoon .table-column-".$j." li:first-child
					{
					border-top-left-radius: ".$wpt_corner_radius."px;
					border-top-right-radius: ".$wpt_corner_radius."px;
					}
				.price-table-main.monsoon .table-column-".$j." li:last-child
					{
					border-bottom-left-radius: ".$wpt_corner_radius."px;
					border-bottom-right-radius: ".$wpt_corner_radius."px;
					}";			
				
		if(!empty($wpt_table_column_color))
		{
			echo "
				.price-table-main.monsoon .table-column-".$j." li:first-child
					{
					border-bottom: 1px solid ".wpt_style_dark_color($wpt_table_column_color)." !important;
					background: linear-gradient(to bottom, ".wpt_style_dark_color($wpt_table_column_color)." 0%, ".$wpt_table_column_color." ".$wpt_corner_gradient."%) !important;
					background: ".$wpt_table_column_color.";
					background: -moz-linear-gradient(top, ".wpt_style_dark_color($wpt_table_column_color)." 0%, ".$wpt_table_column_color." ".$wpt_corner_gradient."%);
					background: -webkit-linear-gradient(top, ".wpt_style_dark_color($wpt_table_column_color)." 0%, ".$wpt_table_column_color." ".$wpt_corner_gradient."%);
					background: linear-gradient(to bottom, ".wpt_style_dark_color($wpt_table_column_color)." 0%, ".$wpt_table_column_color." ".$wpt_corner_gradient."%);
					}
				.price-table-main.monsoon .table-column-".$j." li:last-child
					{
					background: ".$wpt_table_column_color.";
					background: -moz-linear-gradient(bottom, ".wpt_style_dark_color($wpt_table_column_color)." 0%, ".$wpt_table_column_color." ".$wpt_corner_gradient."%);
					background: -webkit-linear-gradient(bottom, ".wpt_style_dark_color($wpt_table_column_color)." 0%, ".$wpt_table_column_color." ".$wpt_corner_gradient."%);
					background: linear-gradient(to top, ".wpt_style_dark_color($wpt_table_column_color)." 0%, ".$wpt_table_column_color." ".$wpt_corner_gradient."%);
					}
				.price-table-main.monsoon .table-column-".$j." li:nth-child(2)
					{background-color: ".$wpt_table_column_color." !important;}
				.price-table-main.monsoon .table-column-".$j." li:last-child div a
					{background-color: ".wpt_style_dark_color($wpt_table_column_color)." !important;}";
		}			
	else
		{
			echo ".price-table-main.monsoon .table-column-".$j." li:first-child
					{
					border-bottom: 1px solid #23c8a7;
					background: #25f5cb;
					background: -moz-linear-gradient(top, #148b73 0%, #25f5cb ".$wpt_corner_gradient."%);
					background: -webkit-linear-gradient(top, #148b73 0%, #25f5cb ".$wpt_corner_gradient."%);
					background: linear-gradient(to bottom, #148b73 0%, #25f5cb ".$wpt_corner_gradient."%);
					}
				.price-table-main.monsoon .table-column-".$j." li:last-child
					{
					background: #25f5cb;
					background: -moz-linear-gradient(bottom, #148b73 0%, #25f5cb ".$wpt_corner_gradient."%);
					background: -webkit-linear-gradient(bottom, #148b73 0%, #25f5cb ".$wpt_corner_gradient."%);
					background: linear-gradient(to top, #148b73 0%, #25f5cb ".$wpt_corner_gradient."%);
					}
				.price-table-main.monsoon .table-column-".$j." li:nth-child(2)
					{background-color: #25f5cb !important;}
				.price-table-main.monsoon .table-column-".$j." li:last-child div a
					{background-color: #11705d !important;}";
		}
				$j++; 	
			}
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
		echo "</style>";
		
			}
		
		
		
		
		
		
		
		
		
	}




?>