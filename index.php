<?php include('header.php'); ?>
    <div class="container">
        <?php include("to-do.php");
            $calssObj = new todo();
            $response = $calssObj->displayData();

            foreach($response as $data){

            
        ?>
    <div class="box">
        <div class="heading">
            <?php echo $data['title']; ?>
        </div>
        <div class="content">
        <?php echo $data['content']; ?>
        <p>
            echo <?php echo $data['warning']; ?>
        </p>
        </div>
        <div class="footer">
            <button name="complete">Complete</button>
            <button name="cancel">Cancel</button>
        </div>
    </div>
    <?php
        }
    ?>
    </div>
</body>
</html>