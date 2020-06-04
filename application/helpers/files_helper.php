<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * createFile est une fonction qui permet de creer un fichier il prend 3 parametres
 *le nom du fichier $fileName 
 *le mode d'ouverture à la creation $accessMode
 *l'extension du fichier
 */

function createFile($fileName,$fileAccessMode,$fileExtensionName){
	// Check the existence of file
	$file="$fileName.$fileExtensionName";
	// $file = "data.txt";
	// echo $file;
	if(!empty($file)){
		// Open the file for reading
		/**
		 * chercher une function qui recherche un caractere dans un tableau de caractere
		 * verifier si le mode d'access est en w,w+,a,a+,x car celui renvoie false en cas d'echec de creation 
		 */  
		// if($fileAccessMode == "w")
		// {
			$handle = fopen($file, $fileAccessMode) or die("ERROR: Cannot open the file.");
			
			return array('name' => "$fileName.$fileExtensionName",'statut'=>true);;
			/* Some code to be executed */
			
			// Closing the file handle
		// }
		// else {
		// 	die("ERROR : Cannot give a correct file access.");
		// }
		
		
		fclose($handle);
	} else{
		echo "ERROR: File does not exist.";
		return  array('statut' => false);;
	}
}

function readInFile($fileName,$fileExtensionName,$filetype)
{
	// 1 to txt files
	// if($filetype==1)
	// {
		$fileName =$fileName.$fileExtensionName;
		//var_dump($fileName);die;
	 	if(file_exists($fileName)){
			// Open the file for reading
			$handle = fopen($fileName, "r") or die("ERROR: Cannot open the file.");
			// Reading the entire file
			$content = file($fileName);
			// Closing the file handle
			fclose($handle);
			// Display the file content
			$content=json_encode($content);
			$json=json_decode($content,true);
			
			return $json;
		} else{
			echo "ERROR: File does not exist."; 
			return FALSE;
		}
	//}
	// 2 to json files 
	// if($filetype==2)
	// {
	// 	return json_decode($fileName,true);

	// }
}
function writeInFile($fileName,$dataToWrite=[])
{
	file_put_contents($fileName, $dataToWrite, FILE_APPEND) or die("ERROR: Cannot write the file.");	
}
function generateRandomString($lenght = 6)
{
	$string='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$stringLenght = strlen($string);
	$randomString = '';
	for ($i=0; $i <$lenght ; $i++) { 
		# code...
		$randomString .= $string[mt_rand(0,$stringLenght - 1)];
	}
	return $randomString;
}
function generateRandomStringNew($lenght = 6)
{
	return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',ceil($lenght/strlen($x)))),1,$lenght);
}

function deleteusersfile($fileName,$fileExtensionName)
{
	if(file_exists($fileName.$fileExtensionName)){
		// Attempt to delete the file
		if(unlink($fileName.$fileExtensionName)){
			//echo "File removed successfully.";
		} else{
			echo "ERROR: File cannot be removed.";
		}
	} else{
		echo "ERROR: File does not exist.";
	}
}
?>
