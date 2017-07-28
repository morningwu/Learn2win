
<?php

function Insert_class_content($educator,$class_topics,$class_title,$class_summary){

		$class_topics 	= mysql_real_escape_string(htmlentities($class_topics));
		$class_title 	= mysql_real_escape_string(htmlentities($class_title));
		$class_summary 	= mysql_real_escape_string(htmlentities($class_summary));

		mysql_query("INSERT INTO `content` (
			`educator`,
			`content_topic`,
			`content_title`,
			`content_summary`

			) VALUES (
			'$educator',
			'$class_topics',
			'$class_title',
			'$class_summary'

			)");

		$_SESSION['class-title'] = $_POST['class-title'];

		echo '<meta HTTP-EQUIV="REFRESH" content="0; url=create-course2.php">';
}

function Insert_class_content_link($video_link){

		$content_title = $_SESSION['class-title'];

		$video_link 	= mysql_real_escape_string(htmlentities($video_link));

		mysql_query("UPDATE `content` SET `content_link` = '$video_link' WHERE `content_title` = '$content_title'");

		echo '<meta HTTP-EQUIV="REFRESH" content="0; url=create-course3.php">';
}
function Insert_class_content_flash_card($card_title1,$card_des1,$card_title2,$card_des2,$card_title3,$card_des3,$card_title4,$card_des4,$card_title5,$card_des5){

		$content_title = $_SESSION['class-title'];

		$card_title1 	= mysql_real_escape_string(htmlentities($card_title1));
		$card_des1		= mysql_real_escape_string(htmlentities($card_des1));
		$card_title2 	= mysql_real_escape_string(htmlentities($card_title2));
		$card_des2		= mysql_real_escape_string(htmlentities($card_des2));
		$card_title3 	= mysql_real_escape_string(htmlentities($card_title3));
		$card_des3		= mysql_real_escape_string(htmlentities($card_des3));
		$card_title4 	= mysql_real_escape_string(htmlentities($card_title4));
		$card_des4		= mysql_real_escape_string(htmlentities($card_des4));
		$card_title5 	= mysql_real_escape_string(htmlentities($card_title5));
		$card_des5		= mysql_real_escape_string(htmlentities($card_des5));
		
		
		
		
		

		mysql_query("UPDATE `content` SET 

			`content_flash_card_title_1` 		= '$card_title1',
			`content_flash_card_description_1` 	= '$card_desc1',
			`content_flash_card_title_2` 		= '$card_title2',
			`content_flash_card_description_2` 	= '$card_desc2',
			`content_flash_card_title_3` 		= '$card_title3',
			`content_flash_card_description_3`	= '$card_desc3',
			`content_flash_card_title_4` 		= '$card_title4',
			`content_flash_card_description_4` 	= '$card_desc4',
			`content_flash_card_title_5` 		= '$card_title5', 
			`content_flash_card_description_5` 	= '$card_desc5'
			
			
			WHERE `content_title` = '$content_title'");

		echo '<meta HTTP-EQUIV="REFRESH" content="0; url=create-course4.php">';
}

?>