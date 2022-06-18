<?php
	function FileSizeConvert($bytes)
	{
		$bytes = floatval($bytes);
			$arBytes = array(
				0 => array(
					"UNIT" => "TB",
					"VALUE" => pow(1024, 4)
				),
				1 => array(
					"UNIT" => "GB",
					"VALUE" => pow(1024, 3)
				),
				2 => array(
					"UNIT" => "MB",
					"VALUE" => pow(1024, 2)
				),
				3 => array(
					"UNIT" => "KB",
					"VALUE" => 1024
				),
				4 => array(
					"UNIT" => "B",
					"VALUE" => 1
				),
			);

		foreach($arBytes as $arItem)
		{
			if($bytes >= $arItem["VALUE"])
			{
				$result = $bytes / $arItem["VALUE"];
				$result = str_replace(".", "," , strval(round($result, 2)))." ".$arItem["UNIT"];
				break;
			}
		}
		return $result;
	}


	header('Content-Type: text/html; charset=utf-8');
	require_once 'IFile.php';
	require_once 'File.php';
	
	$file = new File('ntoskrnl.exe');
	print(nl2br("FilePath: ".$file->getPath()."\n"));
	print(nl2br("FileDir: ".$file->getDir()."\n"));
	print(nl2br("FileName: ".$file->getName()."\n"));
	print(nl2br("FileExt: ".$file->getExt()."\n"));
	print(nl2br("FileSize: ".FileSizeConvert($file->getSize())."\n"));
	print(nl2br("FileText: не вывожу, файл binary\n"));
	
	#print(nl2br("\n\nFileText: \n\n".$file->getText()."\n"));
	# не вывожу, файл binary.
	
	
	
?>
