<?php /* Smarty version 2.6.26, created on 2020-11-02 11:48:40
         compiled from agencyadminaproval.tpl */ ?>
<html>
<head>
<link rel="stylesheet" href="web/css/table1.css">
<link rel="stylesheet" href="web/ak/css/mycssbutto.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php echo '
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
<style>

  /* Style buttons */
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 20px;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
body {font-family: Arial, Helvetica, sans-serif;}

#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 100px;
  right: 35px;
  color: #f1f1f1;
  font-size: 60px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>
'; ?>

</head>

<body>


<br><br><br><br>
<br><br><br><br>

	<center><h1 style="font-size: 60px; word-spacing: 100px;">Agencys</h1></center><hr width="45%" size="1" color="black"></center><br>
		<form method="POST" action="">
			<table align="center" border="5" bgcolor="white" style="text-align: center;">
		<tr><th>Agency Name</th><th>Address</th><th>Register Number</th><th>Proof</th><th>Status</th></tr>
		<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['b']):
?>

		<tr><td><?php echo $this->_tpl_vars['b']['aname']; ?>
</td><td><?php echo $this->_tpl_vars['b']['address']; ?>
</td><td><?php echo $this->_tpl_vars['b']['regno']; ?>
</td><td><!-- <img id="myImg"  style="width:100%;max-width:200px;" src="<?php echo $this->_tpl_vars['b']['pathpic1']; ?>
"> -->
    
   <button class="btn"><i class="fa fa-download"></i> <a class="text-success" href="<?php echo $this->_tpl_vars['b']['pathpic1']; ?>
" target="_blank">Download</a> </button>

    </td><?php if ($this->_tpl_vars['b']['status'] == 0): ?>
			<td>Not Aproved</td><td style="border-right: hidden;border-top: hidden;border-bottom: hidden;"><a  class="button1" style="text-decoration: none;" 	href="agencyapprove.php?f=<?php echo $this->_tpl_vars['b']['loginid']; ?>
">Approve</a></td><?php else: ?>
	<td>Aproved</td><td style="border-right: hidden;border-bottom: hidden;border-top: hidden;"><a  class="button2"  style="text-decoration: none;" href="agencyreject.php?g=<?php echo $this->_tpl_vars['b']['loginid']; ?>
">Reject</a></td>
	<?php endif; ?></tr>
		<?php endforeach; endif; unset($_from); ?>
			</table>
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
		</body>
	<?php echo '	
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
'; ?>

</html>