<?php
include "admin/includes/connection.php";
include "header.php";
$stmt = $conn->prepare("SELECT * from testimonials ");
// $stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$getData = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tname = $_POST["t_name"];
    $t_phone = $_POST["t_phone"];
    $comment = $_POST["t_message"];
    $stmt = $conn->prepare("INSERT INTO testimonials(t_name,t_phone,t_comment) Values(?,?,?)");
    $stmt->bind_param("sis", $tname, $t_phone, $comment);
    $stmt->execute();
    $stmt->close();
    header('Location:thankyou.php');
    exit();
}
?>
<style>
    .container {
        padding: 50px;
        display: flex;
        justify-content: space-between;
        margin: 20px;
    }

    .testimonials,
    .leave-testimonial {
        width: 48%;
    }

    .testimonial {
        background-color: #fff;
        margin-bottom: 10px;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .leave-testimonial {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    input,
    textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 5px;
        border: 1px solid #ddd;
    }

    button {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        background-color: #5cb85c;
        color: white;
        border: none;
        cursor: pointer;
    }

    button:hover {
        background-color: #4cae4c;
    }
    span {
    display: block;
    margin-top: 7px;
    font-weight: 700;
}
</style>
<main>
    <div class="container">
        <div class="testimonials">
            <h2>Testimonials</h2>
            <?php 
            $sql = "SELECT DISTINCT testi_comment,testi_name FROM comment";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                echo '<div class="testimonials">';
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="testimonial">';
                    echo '<p>'.'"' . $row['testi_comment'] . '"'. '</br>'.'<span>'.$row['testi_name'].'</span>'  .'</p>';
                    echo '</div>';
                }
                echo '</div>';
            } else {
                echo '<p>No testimonials available.</p>';
            }
            ?>
            <!-- <div class="testimonial">
                <p><?= $getData['t_comment']; ?></p>
                <p><b></b><?= ($getData['t_name']); ?></b></p>
            </div> -->
            <!-- Repeat for other testimonials -->
          
        </div>
        <div class="leave-testimonial">
            <h2>Leave a Comment</h2>
            <form method="post" enctype="multipart/form-data">
                <input type="text" name="t_name" placeholder="Name..." pattern="[A-Za-z]+" title="Name is required" required>
                <input type="number" name="t_phone" maxlength="10" placeholder="Phone..." required>
                <textarea name="t_message" placeholder="Comment here" required></textarea>
                <button type="submit" name="saveuser">Submit</button>
            </form>
        </div>
</main>

<?php include "footer.php"; ?>