<?php include "header.php";
include "admin/includes/connection.php";
$id = $_GET['pid'];
$stmt = $conn->prepare("SELECT * from property where id= ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$getData = $result->fetch_assoc();
?>
<style>
    section.property-more-details {
        background: #ffffff;
        padding: 57px;
    }

    .propert-left-block {
        float: left;
    }

    .property-right-block {
        display: grid;
        grid-template-columns: auto auto;
    }

    .property-right-block {
        padding-top: 53px;
        padding-bottom: 53px;
        display: grid;
        grid-template-columns: auto auto;
        justify-items: center;
        justify-content: start;
        margin-bottom: 64px;
    }

    .blockimage {
        padding: 8px;
    }
</style>
<section class="property-more-details">
    <div class="container">
        <h1>Property Detail</h1>
        <div class="propert-left-block">
        <a href="uploads/furniture/<?= $getData['p_imgae'] ?>" target="_blank"><img
                    src="admin/uploads/furniture/<?= $getData['p_imgae'] ?>"></a>             
            <h3><b>Price</b> €<?= $getData['price']; ?></h3>
            <p><b>City</b> <?= $getData['town']; ?></p>
            <p><b>Country</b> <?= $getData['country']; ?></p>
            <p><b>Description</b> <?= $getData['long_desc']; ?></p>
        </div>
        <div class="property-right-block">
            <div class="blockimage"><img src="admin/uploads/furniture/<?= $getData['p_imgae'] ?>" height="150px" width="150px" alt=""> </div>
            <div class="blockimage"><img src="admin/uploads/furniture/<?= $getData['p_imgae'] ?>" height="150px" width="150px" alt=""> </div>
            <div class="blockimage"><img src="admin/uploads/furniture/<?= $getData['p_imgae'] ?>" height="150px" width="150px" alt=""> </div>
            <div class="blockimage"><img src="admin/uploads/furniture/<?= $getData['p_imgae'] ?>" height="150px" width="150px" alt=""> </div>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>