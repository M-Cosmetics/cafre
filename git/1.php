<?
header('Content-Type: text/html; charset= utf-8');
if($_REQUEST['getcommit']=='true') {
	$all=array();
	$files=array();
	$tmp=file('0.txt'); 
	$newtmp=array_reverse($tmp);
	exec('git show '.$_REQUEST['commit'], $all);
	foreach ($all as $k => $v) {
		if(strpos($v, 'iff --git ')===1) {
			$date=array();
			$filename=substr(str_replace('diff --git ', '', $v), 0, strpos(str_replace('diff --git ', '', $v), ' '));
			foreach ($newtmp as $stroka) { 	
				if(!strpos($stroka, substr($filename, 1))===false) {
					$date=explode(' ', $stroka);
					break;
				}
			}	
			$files[]= "<input type='checkbox' name='".$filename."' value='Y'>&nbsp;&nbsp;&nbsp;<a class='more_commit_file' title='Смотреть изменения' href='?commit=".$_REQUEST['commit']."&filename=".$filename."'>".$filename.(strpos($all[$k+1], 'eleted file mode')===false?'':' (удален файл)').(!empty($date)?' (<span class="i">выгружен '.$date[0].' '.$date[1].'</span>)':'')."</a>";
		}
	}
	echo implode(',<br>', $files)."<br>";
}
elseif($_REQUEST['clean']=='true') {
	$f = fopen('0.txt', 'w');
	fclose($f);
	echo "Готово";
}
else {
	$echo='';
	/*	
	$ftp_server="iitovcf5.beget.tech";
	$ftp_user_name="iitovcf5_10";
	$ftp_user_pass="q6b4*p&Q";
	*/	
	$ftp_server="95.213.222.48";
	$ftp_user_name="git";
	$ftp_user_pass="5U3h1D6x";	
	$conn_id = ftp_connect($ftp_server);	
	$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
	ftp_pasv($conn_id, true);
	ftp_chdir($conn_id, 'home/bitrix/www');

	$connection = ssh2_connect('188.120.232.110', 22);
	ssh2_auth_password($connection, 'root', 'xvn6k3jvkxov');
	$sftp = ssh2_sftp($connection);
	$commit=$_REQUEST['commit'];
	$name_commit=$_REQUEST['name_commit'];
	foreach ($_REQUEST as $key => $value) {
		if(intval($key)>0) {
			$file = substr($value, 1);
			$dir=explode('/', $file);
			$dir[count($dir)-1]='';
			$str='';
			foreach ($dir as $k => $value2) {
				if($value2=='') continue;
				if(!in_array($str==''?$value2:$str.$value2, (array)ftp_nlist($conn_id,$str))) {
					ssh2_sftp_mkdir($sftp, '/home/bitrix/www/'.$str.$value2.'/');
				}
				$str.=$value2.'/';	
			}
			ssh2_scp_recv($connection,  '/home/bitrix/www/index.php',$_SERVER['DOCUMENT_ROOT'].'/101.txt');
			if(ssh2_scp_send($connection,  $_SERVER['DOCUMENT_ROOT'].$file, '/home/bitrix/www'.$file,0644)) {
	 			$echo.= "$file загружен на сервер\n";
	 			file_put_contents($_SERVER['DOCUMENT_ROOT'].'/git/0.txt', PHP_EOL.date('d.m.Y h:i').' '.$file.' ('.$name_commit.')', FILE_APPEND);
			} else {
	 			$echo.= "Не удалось загрузить $file на сервер\n";
			}
		}
	}
	echo $echo;




	
	/*
	$conn_id = ftp_connect($ftp_server);
	
	$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
	ftp_pasv($conn_id, true);
	ftp_chdir($conn_id, 'home/bitrix/www');
	$commit=$_REQUEST['commit'];
	$name_commit=$_REQUEST['name_commit'];
	foreach ($_REQUEST as $key => $value) {
		if(intval($key)>0) {
			$file = substr($value, 1);
			$dir=explode('/', $file);
			$dir[count($dir)-1]='';
			$str='';
			foreach ($dir as $k => $value2) {
				if($value2=='') continue;
				if(!in_array($str==''?$value2:$str.$value2, (array)ftp_nlist($conn_id,$str))) {
					ftp_mkdir($conn_id, $str.$value2.'/');
				}
				$str.=$value2.'/';	
			}
			if(ftp_put($conn_id, '/home/bitrix/www'.$file, $_SERVER['DOCUMENT_ROOT'].$file, FTP_ASCII)) {
	 			$echo.= "$file загружен на сервер\n";
	 			file_put_contents($_SERVER['DOCUMENT_ROOT'].'/git/0.txt', PHP_EOL.date('d.m.Y h:i').' '.$file.' ('.$name_commit.')', FILE_APPEND);
			} else {
	 			$echo.= "Не удалось загрузить $file на сервер\n";
			}
			if (ftp_chmod($conn_id, 0644, '/home/bitrix/www'.$file) !== false) {
 				//echo "Права доступа к файлу $file изменены на 644\n";
			} else {
	 			$echo.= "Не удалось изменить права доступа к файлу $file\n";
			}
		}
	}
	echo $echo;
	*/
} ?>