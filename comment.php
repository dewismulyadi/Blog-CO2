<?php
	include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Comment</title>
	<style>
	* {box-sizing: border-box;}

	body { 
		margin: 0;
		font-family: Roboto, sans-serif;
		background-color: #FFC731;
	}

	@media screen and (max-width: 500px) {
  		.header-left {
  			display: none;
  		}
	}

	

	/*Form*/
	.box{
		width: 1305px;
		height: 1006px;
		margin: 73px auto;
		background-color: #FFFFFF;
		border-radius: 94px;
		justify-content: center;
	}
	.box h1{
		padding-top: 144px;
		font-weight: bold;
		font-size: 32px;
		font-style: normal;
		line-height: 37px;
		font-weight: 700;
		font-size: 32px;
		color: #474443;
		text-align: center;
	}
	.box button{
		height: 39px;
		width: 82px;
		align-items: center;
		background-color: #474443;
		color: #FFFFFF;
		border: none;
	}
	.box button:hover{		
		background-color: #FFC731;
	}

	input, textarea {
	  width: 751px;
	  padding: 12px;
	  border-bottom: 1px solid #474443;
	  border: none;
	}

	label {
	  padding: 12px 12px 12px 161px;
	  display: inline-block;
	  color: #474443;
	}



.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
	</style>
<body>
	
	<div class="box">
		<h1>Kirim <span class="text-yellow">Komentar </span></h1>
	  <form>
		  <div class="row">
		    <div class="col-25">
		      <label for="name">Name</label>
		    </div>

		    <div class="col-75">
		      <input type="text" id="name" name="name" placeholder="Input Your Name..">
		    </div>
  		</div>

		  <div class="row">
		    <div class="col-25">
		      <label for="email">Email</label>
		    </div>

		    <div class="col-75">
		      <input type="text" id="email" name="email" placeholder="Input Your Email..">
		    </div>
  		</div>

		  <div class="row">
		    <div class="col-25">
		      <label for="comment">Comment</label>
		    </div>

		    <div class="col-75">
		      <textarea id="comment" name="comment" placeholder="Write something.."></textarea>
		    </div>
		    <button>SEND</button>
  		</div>
	  </form>
	</div>


	
</body>
</html>
<?php
	include 'footer.php';
?>