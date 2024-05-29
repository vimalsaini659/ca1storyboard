<?php include "header.php";
include "admin/includes/connection.php";
$stmt = $conn->prepare("SELECT * from property WHERE p_type = 'Sites'");
$stmt->execute();
$result = $stmt->get_result(); 
?>
<main>
<h1>Sites Properties</h1>
<div class="card-area">
    <?php
while($row = $result->fetch_assoc()) {
    echo '      
        <div class="card">
            <img src="admin/uploads/furniture/'.$row['p_imgae'].'" alt="property image" style="width:100%">
            <div class="card-content">
            <div class="container">
                <h3>'.$row['paddress'].', '.$row['town'].'</h3>
                <span class="price">€ '.$row['price'].'</span>
                <p>'.$row['long_desc'].'</p>
                 <div class="moredetails"><a href="propertyDetail.php?pid='.$row['id'].'" class="btn-more">More Details</a></div>
                 </div>
            </div>
        </div>  ';
}
?>    
</div>     

 
</main>

<!--main-->
<?php include "footer.php"; ?>