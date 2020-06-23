<?php
require('script.php');
 
$we = new Get_data();
$lists=$we->list();
$lead=$we->lead();




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            box-sizing: border-box;
        }
        body{
            
            padding: 0;
            margin: 0;
            /*background: linear-gradient(to bottom left, #55d6ff 20%, #45bcfe 100%);*/
            background-color: white;
        }
        .board{
            background-color: #f7f7f8;
            color: #4892b3;
            width: 75%;
            margin-left: 12%;
            margin-top: 5%;
            margin-bottom: 5%;
            border-radius: 20px 20px 20px 20px;
            border: 2px dotted black;
            padding-bottom: 2rem;
        }
        p{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 17pt;
            font-weight: 200;
        }
        .header{
            border-bottom: .5px solid #909090;
            border-radius: 20px 20px 0px 0px;
            /*background: linear-gradient(to top right, #090909 0%, #090909 101%);*/
            background-color: #547580;
            color: #f7f7f8;
            text-align: center;
            padding-top: 1rem;
            font-family: fantasy;
        }
        .container{
            display: flex;
            background-color: white;
            justify-content: space-between;
            width: 90%;
            margin-top: 1rem;
            margin-left: 5%;
            border-bottom: 1px solid rgba(211,211,211,0.3);
            transition: all 1s;
            border-radius: 10px 20px 10px 20px;
            padding-right: 1rem;
            box-shadow: 2px 2px #909090;
        }
        .container:hover{
            background-color: skyblue;
            color: white;
            transform: scale(1.1);
            border-radius: 10px 10px 10px 10px;
            cursor: pointer;
        }
        .gold:hover{
            background-color: #daa520;
            transform: scale(1.2);
            border-radius: 10px 10px 10px 10px;
            cursor: pointer;
        }
        .silver:hover{
            background-color: #c0c0c0;
            transform: scale(1.13);
            border-radius: 10px 10px 10px 10px;
            cursor: pointer;
        }
        .bronze:hover{
            background-color: #d7995b;
            transform: scale(1.105);
            border-radius: 10px 10px 10px 10px;
            cursor: pointer;
        }
        .loose:hover{
            background-color: red;
            transform: scale(1.1);
            border-radius: 10px 10px 10px 10px;
            cursor: pointer;
        }
        .serial{
            margin-left: 5%;
        }
        .image{
            /*margin-left: 5%;*/
            margin-top: 1rem;
        }
        .name{
            margin-left: 2%;
        }
        .points{
            margin-left: 5%;
            text-align: center;
        }
        .position{
            margin-left: 2%;
            text-align: center;
        }
        /*table{
            border: 1px solid rgba(211,211,211,0.9);
            background-color: white;
            width: 75%;
            margin-left: 10%;
            margin-bottom: 5%;
            border: 1px solid #D0D0D0;
            border-radius: 20px 20px 20px 20px;
            text-align: left;
            padding-left: 5rem;
        }
        th{
            height: 3rem;
            border-bottom: 1px solid #ddd;
        }
        td{
            
        }*/
        .share{
            margin-right: 60%;
        }
        .sort{
            width: 10%;
            
        }
        #sort{
            width: 100%;
            height: 40px;
            background-color: #c0c0c0;
            border-radius: 5px 5px 5px 5px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12pt;
            border: 2px solid black;
        }
        .top{
            display: flex;
            margin-top: 2%;
            margin-left: 5%;
        }
    </style>
</head>
<body>
    <div class="top">
        <div class="share">
            <iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&layout=button_count&size=small&width=96&height=20&appId" width="96" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        <div class="sort">
            <select name="" id="sort">
                <option value="">sort</option>
                <option value="">0-50</option>
                <option value="">50-0</option>
            </select>
        </div>
    </div>
    <div class="board">
        <div class="header">
            <h1> HNG Global Leaderboard </h1>
            <img src="75846-trophy-cup-icon-free-download-image.png" alt="" height="10%" width="10%">
        </div>

        <!--NAMES-->
        <div class="container gold">
            <div class="serial">
                <p>
                    <?php echo $lead['first']['email']?>
                </p>
            </div>
            <div class="image">
                <img src="person_13.png" alt="" height="30px" width="30px">
            </div>
            <div class="name">
                <p>
                <?php echo $lead['first']['name']?>
                </p>
            </div>
            <div class="points">
                <p>
                <?php echo $lead['first']['points']?>
                </p>
            </div>
            <div class="position">
                <p>
                <?php echo $lead['first']['project']?>
                </p>
            </div>
        </div>

        <div class="container silver">
            <div class="serial">
                <p>
                <?php echo $lead['second']['email']?>
                </p>
            </div>
            <div class="image">
                <img src="person_13.png" alt="" height="30px" width="30px">
            </div>
            <div class="name">
                <p>
                <?php echo $lead['second']['name']?>
                </p>
            </div>
            <div class="points">
                <p>
                <?php echo $lead['second']['points']?>
                </p>
            </div>
            <div class="position">
                <p>
                <?php echo $lead['second']['project']?>
                </p>
            </div>
        </div>

        <div class="container bronze">
            <div class="serial">
                <p>
                <?php echo $lead['third']['email']?>
                </p>
            </div>
            <div class="image">
                <img src="person_13.png" alt="" height="30px" width="30px">
            </div>
            <div class="name">
                <p>
                <?php echo $lead['third']['name']?>
                </p>
            </div>
            <div class="points">
                <p>
                <?php echo $lead['third']['points']?>
                </p>
            </div>
            <div class="position">
                <p>
                <?php echo $lead['third']['project']?>
                </p>
            </div>
        </div>
        <?php
        foreach($lists as $list){
            
        ?>
        <div class="container">
            <div class="serial">
                <p>
                    <?php echo $list['email'] ?>
                </p>
            </div>
            <div class="image">
                <img src="person_13.png" alt="" height="30px" width="30px">
            </div>
            <div class="name">
                <p>
                    <?php echo $list['name'] ?>
                </p>
            </div>
            <div class="points">
                <p>
                <?php echo $list['points'] ?>
                </p>
            </div>
            <div class="position">
                <p>
                <?php echo $list['project'] ?>
                </p>
            </div>
        </div>
        <?php 
        
    } ?>
        
    </div>
    
</body>
</html>