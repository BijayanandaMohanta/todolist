<?php
    include("to-do.php");

    $classObj = new todo();
    if(isset($_POST['add'])){
        $title = $_POST['title'];
        $content = $_POST['content'];
        $warning = $_POST['warning'];

        $insertData = $classObj->insertData($title,$content,$warning);

        if($insertData){
            header("location:index.php");
        }
        else{
            return false;
        }
    }
?>


<?php include('header.php');?>
    <form action="add.php" method="post">
        Title <br>
        <input type="text" name="title" id="" autofocus> </br>
        Content <br>
        <textarea name="content" id="" cols="30" rows="10"></textarea> </br>
        Warning <br>
        <input type="text" name="warning" id="">
        <div class="footer">
            <button name="add" type="submit">Add</button>
            <button type="reset">Clear</button>
        </div>
    </form>
</body>
</html>