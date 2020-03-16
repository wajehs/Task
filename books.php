<html>
	<head>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="assets/js/book_search_script.js"></script>
		<link rel="stylesheet" href="assets/css/style.css">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<?php include 'header.php';?>
		<div id="preloader"></div>
		<div id="lightbox">	
			<div class="book_details">
				<div class="close-popup">
					<a href="javascript:void(0);" onclick="close_popup();">
						<i class="fa fa-times"></i>
					</a>
				</div>
				<div class="data">
					<div class="row">
						<div class="col-md-3 col-sm-3 text-right"> 
							<img src="assets/img/book.png" class="book-pic">
						</div>
						<div class="col-md-9 col-sm-9">
							<h3 id="book_title">
							</h3>
							<div class="book-specs">
								<span class="title-span"> Url </span>  &nbsp;&nbsp;&nbsp;<a href="#" target="_blank" id="book_url">Book Link</a>
							</div>
							<div class="book-specs">
								<span class="title-span"> No Of Page </span> &nbsp;&nbsp;&nbsp;<span id= "no_page"></span>
							</div>
							<div class="book-specs">
								<span class="title-span"> Publishers </span> &nbsp;&nbsp;&nbsp;<span id= "publisher_details"></span>
							</div>
							<div class="book-specs">
								<span class="title-span"> Publish Date </span> &nbsp;&nbsp;&nbsp;<span id= "publish_date"></span>
							</div>
							<div class="book-specs">
								<div class="book-sub-specs">
									<h5>Subjects</h5>
								</div>
								<div id="subject_details" class="book-sub-specs">
								</div>
							</div>
							<div class="book-specs">
								<div class="book-sub-specs">
									<h5>Author</h5>
								</div>
								<div id="author_details" class="book-sub-specs">
								</div>
							</div>
							<div class="book-specs">
								<div class="book-sub-specs">
									<h5>Published Places</h5>
								</div>
								<div id="publish_details" class="book-sub-specs">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="search-div">
				<div>
					<h3>Book Search </h3>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-12 row">
						<div class="col-md-5 col-sm-5 col-12">
							<input type="text" class="form-control filter" placeholder="Title" id="title" >
						</div>
						<div class="col-md-5 col-sm-5 col-12">
							<input type="text" class="form-control filter" placeholder="Author" id="author">
						</div>
						<div class="col-md-2 col-sm-2 col-12">
							<button class="custom-search-btn" onclick="search_data();">
								<i class="fa fa-search"></i> Search
							</button>
						</div>
					</div>
				</div>
			</div>
			<div class="search-result-div">
				<div>
					<h3>Result</h3>
				</div>
				<div>
					<table class="table">
						<thead>
							<tr>
								<th width="10%">
									No
								</th>
								<th width="50%">
									Title
								</th>
								<th width="20%">
									Author
								</th>
								<th width="20%">
									Cover
								</th>
							</tr>
						</thead>
						<tbody id="search_data" class='search-data-div'>
							
						</tbody>
					</table>
				</div>
			</div>
			<div id="page_specs_div" style="display:none;" >
				Number Per Page:
				<select id='num_per_page' onchange="search_data();">
					<option value='10'>10</option>
					<option value='20'>20</option>
					<option value='40'>40</option>
					<option value='60'>60</option>
					<option value='80'>80</option>
					<option value='100'>100</option>
				</select>
				Page Num:
				<select id='page_num' onchange="search_data();">
				</select>
			</div>
		</div>
		<?php include 'footer.php';?>
	</body>
</html>