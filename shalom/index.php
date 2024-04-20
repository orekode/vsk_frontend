<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link rel="stylesheet"  href="./index.css" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body class="vsk_root">
    

    <div class="container_102">

        <div class="title_102 font-bold_102">
            <h1 class="font-bold_102">Popular Courses</h1>

            <div class="search-box_102">
                <div class="category_filter_102">
                    <select name="cource_category" id="">
                        <option>Science</option>
                        <option>Business</option>
                        <option>Art</option>
                    </select>
                </div>
                <div class="search_102">
                    <input type="text">
                    <button class="icon_btn_102">sch</button>
                </div>
            </div>
        </div>
        
        <div class="card-box_102">

            <?php for ($card = 0; $card < 15; ++$card) { ?>
            <div class="card_102">
                <div class="image_102">
                    <img src="./course.jpg" class="img_cover_102" />
                </div>
                <div class="content_102">
                    <div class="sub_title_102 ">Course 102</div>
                    <div class="title_102 font-bold_102">This is a good title over here you know</div>
                    <div class="summary_102">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio aliquam natus provident adipisci sunt dignissimos!
                    </div>
                    <div class="dates_102">
                        <div class="date_102">1st-May-2022</div>
                        -
                        <div class="date_102">1st-May-2022</div>
                    </div>
                    <div class="teacher_102">
                        <div class="teacher_image_102"></div>
                        <div class="teacher_info_102">
                            <div class="teacher_name_102"></div>
                        </div>
                    </div>
                </div>

                <div class="btn_box_102">
                    <div class="btn_102">
                        View Course
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>


</body>
</html>