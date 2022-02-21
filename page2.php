<?php include "components/head.php"; ?>

<body class="posts">
    <?php include "components/menu.php"?>

    <div class="upk-container dg-3">

        <?php
            $conn = new mysqli ("localhost", "root", "root", "blog"); 
            $query = "select * from clanky order by id desc limit 3" ;
            $clanky = $conn->query($query);
            
            $kategory = array(1=>"Travel", 2=>"Food", 8=>"Animals");

            if ($clanky->num_rows > 0) {
                while($row = $clanky->fetch_assoc()) {
            
                    $i = 0;
                    $data = array();

                    foreach ($_POST as $key => $value){
                        $data[$i] = $value;
                        echo $value;
                        $i++;
                    }

                echo '
                        <div class="upk-item">
                            <div class="upk-item-box">
                                <div class="upk-img-wrap">
                                    <img alt="Business women having a brainstor meeting" class="upk-img" src="https://cdn.pixabay.com/photo/2018/04/07/08/28/notepad-3297994_960_720.jpg">
                                    <div class="upk-category">
                                        <a href="#" rel="category tag">'.$kategory [$row["kategory"]].'</a>
                                    </div>
                                </div>
                                <div class="upk-content">
                                    <div class="upk-content-wrap">
                                        <div class="upk-category">
                                            <a href="#" rel="category tag">Corporate</a> <a href="#" rel="category tag"></a>
                                        </div>
                                        <div class="upk-meta">
                                            <div class="upk-author-wrap">
                                                <span class="upk-by">by</span> <a class="upk-author-name" href="#">'.$row["autor"].'</a>
                                            </div><span class="upk-separator">//</span>
                                            <div class="upk-flex upk-flex-middle">
                                                <div class="upk-featured-list-date">
                                                <span class="upk-by">by</span> <a class="upk-author-name" href="#">'.$row["date"].'
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="upk-title"><a class="title-animation-underline" href="#" title="Business women having a brainstor meeting">'.$row["name"].'</a></h3>
                                        <div class="upk-text">
                                            <p>'.$row ["text"].' </p>
                                        </div>
                                        <div class="upk-counter">
                                            01
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ';
                }
            } 
            
            else {
                echo "Nebyly přidáne žádné příspěvky";
            }

            $conn->close();

        ?>


    </div>

    <?php include "components/footer.php"; ?>


