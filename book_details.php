<?php
 $query ='';
if(isset($_POST['a'])&& trim($_POST['a']) !=''){
	$query = trim($_POST['a']);
}
$search_result = file_get_contents('https://openlibrary.org/api/books?bibkeys=ISBN:'.$query.'&format=json&jscmd=data');
$result	 = array();
if($search_result !=''){
	$result['status'] = 'success';
	$response_data = (array)json_decode($search_result);
	$result['response_data'] = $response_data['ISBN:'.$_POST['a']];
}else{
	$result['status'] = 'failed';
}
echo json_encode($result);
?>
