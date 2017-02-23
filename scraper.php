

<?php
 		
 		//var $city="";
if ($_SERVER["REQUEST_METHOD"] == "GET") {
			$found="";
		    $cityName= $_GET['city'];

		    $cityName=str_replace(" ","",$cityName);//to remove space in City Name
			
			
			 
			if(!@file_get_contents("http://www.weather-forecast.com/locations/".$cityName."/forecasts/latest"))
				{
				
				echo http_response_code();

				}
			else{

				$found="true"; 
				$contents=file_get_contents("http://www.weather-forecast.com/locations/".$cityName."/forecasts/latest");
				preg_match('/3 Day Weather Forecast Summary:<\/b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">(.*?)</s', $contents, $matches);
				echo $matches[1];
				}

			///	echo $contents;
		    	//echo $matches[1];
		    	/*
				if(false !== (@file_get_contents("http://www.weather-forecast.com/locations/".$cityName."/forecasts/latest")))
				{		
					$contents=file_get_contents("http://www.weather-forecast.com/locations/".$cityName."/forecasts/latest");
					preg_match('/3 Day Weather Forecast Summary:<\/b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">(.*?)</s', $contents, $matches);
					//if(!empty($matches))
					
					echo $matches[1];
			


					

				}else
				{

					empty($matches);
					echo "error";
					//echo ($cityName);
				//die(http_response_code(404));
				}*/
			
				
			
			/* /s ,at the end is for multiline , another one is /i, which probably for single line*/


			//print_r($matches);
		
			

			
				


			
		}
 		
 ?>

 