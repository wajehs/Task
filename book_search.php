<?php
//echo json_encode($_POST); q=book&limit=10
$query = '';
$limit = 10;
$page = 1;

if(isset($_POST['a'])&& trim($_POST['a']) !=''){
	$query = 'title='.trim($_POST['a']);
}
if(isset($_POST['b'])&& trim($_POST['b']) !=''){
	if($query !=''){
		$query .= '&author='.trim($_POST['b']);
	}else{
		$query .= 'author='.trim($_POST['b']);
	}
}
if(isset($_POST['c'])&& trim($_POST['c']) !=''){
	if($query !=''){
		$query .= '&page='.trim($_POST['c']);
	}else{
		$query .= 'page='.trim($_POST['c']);
	}
	$page = trim($_POST['c']);
}
if(isset($_POST['d'])&& trim($_POST['d']) !=''){
	if($query !=''){
		$query .= '&limit='.trim($_POST['d']);
	}else{
		$query .= 'limit='.trim($_POST['d']);
	}
	$limit = trim($_POST['d']);
}else{
	if($query !=''){
		$query .= '&limit='.$limit;
	}else{
		$query .= 'limit='.$limit;
	}
}


$search_result = file_get_contents('http://openlibrary.org/search.json?'.trim($query));
$result_array = (array)json_decode($search_result,true);
$ajax_result = array();
//print_r($result_array);

$cnt = ($limit * ($page-1))+1;
$reponse_data = '';
foreach($result_array['docs'] as $key => $value){
	$img = "assets/img/book.png";
	$cover_i= '';
	if(isset($value['cover_i']) && $value['cover_i'] !=""){
		$img = "http://covers.openlibrary.org/b/id/".$value['cover_i']."-M.jpg";
		$cover_i = $value['cover_i'];
	}
	$author_name = '';
	if(isset($value['author_name']) &&!empty($value['author_name'])){
		foreach($value['author_name'] as $k =>$v){
			$author_name .= '<br>'.$v.",";
		}
	}
	$reponse_data .= "<tr><td>".$cnt."</td><td><a href='javascript:void(0);' onclick='book_details(".'"'.$value['isbn'][0].'","'.$cover_i.'"'.")'>".$value['title_suggest']."</a></td><td>".trim($author_name,',')."</td><td><img src=".$img." class='cover-img' /></td></tr>";
	$cnt++;
}
$result	 = array();
if($reponse_data !=''){
	$result['status'] = 'success';
	$result['response_data'] = $reponse_data;
	$result['limit'] = $limit;
	$result['page'] = $page;
	$result['no_page'] = ceil($result_array['num_found']/$limit);
	$result['page_options'] = '';
	for($i=1; $i<= $result['no_page']; $i++){
		if($i == $page){
			$result['page_options'] .="<option value='".$i."' selected>".$i."</option>";
		}else{
			$result['page_options'] .="<option value='".$i."'>".$i."</option>";
		}
	}
}else{
	$result['status'] = 'failed';
}
echo json_encode($result);
?>
