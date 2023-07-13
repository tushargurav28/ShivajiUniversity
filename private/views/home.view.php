<?php $this->view('/includes/header');?>
<?php $this->view('/includes/nav');?>

<!-- this php part inludes the header placed in file header.view.php in inludes folder -->
<body>
    <div class= "pt-4 div.container-fluid">
<h1><i class="fa fa-plus"></i> i am home page


<?php
echo "<pre>";
echo print_r($rows);
?>

</h1>
<!-- this php part inludes the footer placed in file footer.view.php in inludes folder -->
<?php $this->view('/includes/footer');?>