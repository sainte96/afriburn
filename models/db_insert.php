<?php
	// every table insert fuction is here just use dbi::table_name('1st_field','2nd_field')
		
class dbi {
		
	////////////////////////////////////////insert functions ///////////////////////
		public static function media($name,$album,$artiste,$type,$description,$media_id,$date,$file_path,$file_path2,$user_id){ $db=config::dbcon();
		 $stmt = $db->prepare("INSERT INTO ".__FUNCTION__."(`name`,`album`,`artiste`,`type`,`description`,`media_id`,`date`,`img_path`,`media_path`,`upl_by`) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		 $stmt->execute(array($name,$album,$artiste,$type,$description,$media_id,$date,$file_path,$file_path2,$user_id));
		 // return $stmt->lastInsertId(); 
		}

		public static function service($service_id,$service,$dated){ $db=config::dbcon();
		 $stmt = $db->prepare("INSERT INTO ".__FUNCTION__."(`service_id`,`service`,`dated`) VALUES(?, ?, ?)");
		 $stmt->execute(array($service_id,$service,$dated));
		 // return $stmt->lastInsertId(); 
		}

		public static function category($category_id,$service_id,$category){ $db=config::dbcon();
		 $stmt = $db->prepare("INSERT INTO ".__FUNCTION__."(`category_id`,`service_id`,`category`) VALUES(?, ?, ?)");
		 $stmt->execute(array($category_id,$service_id,$category));
		 // return $stmt->lastInsertId(); 
		}

		public static function package($package_id,$service_id,$basic,$classic,$pro,$basic_price,$classi_price,$pro_price){ $db=config::dbcon();
		 $stmt = $db->prepare("INSERT INTO ".__FUNCTION__."(`package_id`,`service_id`,`basic`,`classic`,`pro`,`basic_price`,`classic_price`,`pro_price`) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
		 $stmt->execute(array($package_id,$service_id,$basic,$classic,$pro,$basic_price,$classi_price,$pro_price));
		 // return $stmt->lastInsertId(); 
		}

		public static function users($userid,$username,$email,$password,$date){ $db=config::dbcon();
		 $stmt = $db->prepare("INSERT INTO ".__FUNCTION__."(`userid`, `username`, `email`, `password`, `date`) VALUES(?, ?, ?, ?, ?)");
		 $stmt->execute(array($userid,$username,$email,$password,$date));
		 // return $stmt->lastInsertId(); 
		}

		public static function auditions($username,$name,$email,$phone,$age,$gender,$address,$school,$role,$experience,$talent,$category,$production,$schedule,$dated,$status){ $db=config::dbcon();
		 $stmt = $db->prepare("INSERT INTO ".__FUNCTION__."(`username`, `name`, `email`, `phone`, `age`, `gender`, `address`,`school`, `role`, `experience`, `talent`, `category`, `production`, `schedule`, `dated`, `status`) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		 $stmt->execute(array($username,$name,$email,$phone,$age,$gender,$address,$school,$role,$experience,$talent,$category,$production,$schedule,$dated,'0'));
		 // return $stmt->lastInsertId(); 
		}

		public static function audition($username,$fname,$lname,$state,$phone,$email,$instagram,$dated,$status){ $db=config::dbcon();
		 $stmt = $db->prepare("INSERT INTO ".__FUNCTION__."(`username`, `fname`, `lname`, `state`, `phone`, `email`, `instagram_link`, `dated`, `status`) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)");
		 $stmt->execute(array($username,$fname,$lname,$state,$phone,$email,$instagram,$dated,'0'));
		 // return $stmt->lastInsertId(); 
		}

		public static function reports($reportid,$school_id,$subject,$content,$status,$userid,$date){ $db=config::dbcon();
		 $stmt = $db->prepare("INSERT INTO ".__FUNCTION__."(`reportid`, `school_id`, `subject`,`content`, `status`, `userid`, `date`) VALUES(?, ?, ?, ?, ?, ?, ?)");
		 $stmt->execute(array($reportid,$school_id,$subject,$content,$status,$userid,$date));
		 // return $stmt->lastInsertId(); 
		}

		public static function report_comments($reportid,$name,$comment,$date){ $db=config::dbcon();
		 $stmt = $db->prepare("INSERT INTO ".__FUNCTION__."(`reportid`, `name`, `comment`, `date`) VALUES(?, ?, ?, ?)");
		 $stmt->execute(array($reportid,$name,$comment,$date));
		 // return $stmt->lastInsertId(); 
		}
 
		public static function schools($name,$phone,$category,$website,$email,$address,$facebook,$twitter,$linkedin,$description,$file_path,$date,$school_id){ $db=config::dbcon();
		 $stmt = $db->prepare("INSERT INTO ".__FUNCTION__."(`name`,`phone`,`category`,`website`,`email`,`address`,`facebook`,`twitter`,`linkedin`,`description`,`pic_dir`,`date_added`,`school_id`) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		 $stmt->execute(array($name,$phone,$category,$website,$email,$address,$facebook,$twitter,$linkedin,$description,$file_path,$date,$school_id));
		 // return $stmt->lastInsertId(); 
		}

		public static function review($review_id,$infrastructure,$faculty,$lecture,$review,$file_path,$date,$anonymous,$school_id,$userid){ $db=config::dbcon();
		 $stmt = $db->prepare("INSERT INTO ".__FUNCTION__."(`review_id`,`infrastructure`,`faculty`,`lecture`,`review`,`pic_dir`,`date_added`,`anonymous`,`school_id`,`userid`) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		 $stmt->execute(array($review_id,$infrastructure,$faculty,$lecture,$review,$file_path,$date,$anonymous,$school_id,$userid));
		 // return $stmt->lastInsertId(); 
		}

		public static function update($name,$album,$artiste,$type,$price,$description,$media_id){ $db=config::dbcon();
		 $stmt = $db->prepare("UPDATE music SET `name`= ?,`album`= ?,`artiste`= ?,`type`= ?,`price`= ?,`description`= ? WHERE `media_id`= ?");
            $stmt->execute(array($name,$album,$artiste,$type,$price,$description,$media_id));
		 // return $stmt->lastInsertId(); 
		}

		public static function update_pic($file_path,$media_id){ $db=config::dbcon();
		 $stmt = $db->prepare("UPDATE music SET `img_path`= ? WHERE `media_id`= ?");
            $stmt->execute(array($file_path,$media_id));
		 // return $stmt->lastInsertId(); 
		}

		public static function update_media($file_path,$media_id){ $db=config::dbcon();
		 $stmt = $db->prepare("UPDATE music SET `media_path`= ? WHERE `media_id`= ?");
            $stmt->execute(array($file_path,$media_id));
		 // return $stmt->lastInsertId(); 
		}

		public static function del_media($media_id){ $db=config::dbcon();
		 $stmt = $db->prepare("DELETE FROM music WHERE `media_id`= ?");
            $stmt->execute(array($media_id));
		 // return $stmt->lastInsertId(); 
		}

		public static function review_reply($name,$review_id,$reply,$date,$reply_id){ $db=config::dbcon();
		 $stmt = $db->prepare("INSERT INTO ".__FUNCTION__."(`name`,`review_id`,`reply`,`date`,`reply_id`) VALUES(?, ?, ?, ?, ?)");
		 $stmt->execute(array($name,$review_id,$reply,$date,$reply_id));
		 // return $stmt->lastInsertId(); 
		}

		public static function media_like($media_id,$userid,$like_id,$date){ $db=config::dbcon();
		 $stmt = $db->prepare("INSERT INTO ".__FUNCTION__."(`media_id`,`userid`,`like_id`,`date`) VALUES(?, ?, ?, ?)");
		 $stmt->execute(array($media_id,$userid,$like_id,$date));
		 // return $stmt->lastInsertId(); 
		}

		public static function beat_order($name,$email,$date,$order_id){ $db=config::dbcon();
		 $stmt = $db->prepare("INSERT INTO ".__FUNCTION__."(`beat_name`,`order_user`,`order_date`,`order_id`) VALUES(?, ?, ?, ?)");
		 $stmt->execute(array($name,$email,$date,$order_id));
		 // return $stmt->lastInsertId(); 
		}

	//////// End of Insert //////////////


/////////////closing bracket for class /////////////
}

?>
