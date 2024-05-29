<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<style>
  .thankyou {
    display: grid;
    place-items: center;
    height: 100vh;
    font-family: Helvetica, Arial, sans-serif
}
  .box {
    background-color: #fff;
    width: 700px;
    /* height: 100%; */
    padding: 20px 30px;
    border-radius: 30px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    text-align: center;

}
    .image{
        display:flex;
        align-items: center;
        justify-content: center;
    }
    .heading{
        font-family: Helvetica, Arial, sans-serif;
        font-size:25px;
        text-align: center;
    }
    .paragraph p {
    font-size: 18px;
    line-height: 27px;
    text-align: center;
}
    .text-muted{
        text-align: center;
        
    }   
   
    a.btn-home {
    background-color: #ee6c4d;
    color: #fff;
    padding: 14px 30px;
    text-decoration: none;
    font-weight: 600;
    border-radius: 4px;
    display: inline-block;
    margin-top: 22px;
}
    
</style>
<body>
    <div class="thankyou">
    <div class="box">
      
        <div class="heading">
            <h1>Thank You!</h1>
        </div>
        <div class="paragraph">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis nisi non neque imperdiet, sed blandit sem congue. Vivamus placerat diam nec ipsum tempus, in molestie nisl fringilla. </p>
    </div>
  
    <div class="icon">
        <a href="testimonials.php" class="btn-home">Back To Home</a>
    </div>
    </div>
    </div>
    
</body>
</html>