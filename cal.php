<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <div class="all">
        <div class="box">
         <h1>ตารางสูตรคูณ <?php echo $multi_x ?></h1>
          <b>ใส่เลขเพื่อคำนวณ</b>
                <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
                    <input type="number" name="number">
                    <input type="submit" value="แสดงตารางสูตรคูณ">
                </form>

            <table>
                <tbody>
                    <tr>
                    <div class="scrollBar">
                        <?php
                            isset( $_POST['number'] ) ? $number = $_POST['number'] : $number = "";
                                if( !empty( $number ) ) {
                                    for( $i=1; $i<=24; $i++ ) {
                                        echo "<br/>{$number} x {$i} = ".( $number * $i );
                                    }
                                }
                        ?>
                    </div>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <style>

        .body{
            padding: 5%;
        }

        table {
            width: 150px;
            height: 265px;

        }
        .scrollBar{
            height: 40vh;
            overflow-y : auto;
        }
        .all {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 5%;
            width: 45%;
            height: 50%;
            

           
        }
         .box {
            padding-bottom: 5%;
            }
    </style>
   
   

</body>

</html>

