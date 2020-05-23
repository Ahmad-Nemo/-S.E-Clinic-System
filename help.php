<html>

<?php 
session_start(); 
include_once("connection.php");
include("header.php");
?>

    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
         <link rel="stylesheet" href="style.css">
         <script src="https://kit.fontawesome.com/fd397b4a5e.js" crossorigin="anonymous"></script>
        
<style>



.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
  font-size:20px;
  font-weight:Bold;
}

.active, .accordion:hover {
  background-color: #ccc; 
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}
    h2
    {
        font-family: Georgia, serif;
        font-size: 25px;
        letter-spacing: 2px;
        word-spacing: 2px;
        color: #a12353;
        font-weight: 700;
        text-decoration: underline solid rgb(68, 68, 68);
        font-style: italic;
        font-variant: normal;
        text-transform: capitalize;
        
        
        
        
    }
    .top
    {
        
            background-image: url(img/doctooor.jpg);
            background-size: 100% 100%;
            background-attachment: fixed;
    }
.search
    {
        padding-top: 250px;
        padding-bottom: 50px;
        margin-left: 110px;
        margin-right: 50px;   
    }
   
     .container
    {
        text-align: center;
        position: absolute;
        top: 10%;
        left: 50%;
        transform: translate(-50%,-50%);
        width: 100%;
        padding: 0px ;
        margin: 5px
        
    }
    .container span
    {
        text-transform: uppercase;
        display: block;
    }
     .text1
    {
        
        font-size: 50px;
        font-weight: 700;
        letter-spacing: 7px;
        margin-bottom: 20px;
        position: relative;
        animation: text 3s 1;
        color: black;
        
        
    }
    .text2
    {
        
        font-size: 50px;
        font-weight: 900;
        color: #007bff;    
        
    }
    
    @keyframes text
    {
        0%{
            color:black;
            margin-bottom: -30px;
            
        }
        30%
        {
            letter-spacing: 25px;
            margin-bottom: -30px; 
        }
        85%{
            letter-spacing: 8px;
            margin-bottom: -30px;
            color:black;
        }
        
               
    }
    .search-box
    {
        position: absolute;
        top: 10%;
        left: 10%;
        transform: translate(-50%,-50%);
        background: #2f3640;
        height: 60px;
        border-radius: 40px;
        padding: 10px; 
    }
    .search-box:hover > .search-txt
    {
        width: 240px;
        padding: 0 6px;
        
    }
    .search-btn
    {
        color:#2f3640;
        float: right;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #007bff;
        display: flex;
        justify-content: center;
        align-items: center;  
    }
    .search-txt
    {
        
        border: none;
        background: none;
        outline: none;
        float: left;
        padding: 0;
        color: white;
        font-size: 16px;
        transition: 0.4s;
        line-height: 40px;
        width: 0px;
    }
   
   
   
    .all{
position:relative;
min-height:100vh;

    }
    .containeer
    {
      padding-bottom:20rem;
    }
   
   .answer
   {
     font-size:20px;



   }
</style>
</head>
<body>  

    
    
  
    
<!-- Search form -->
    <section class="all">
    <section class="containeer">

        
<section class="top">
 <div class="container " >
    <span class="text1" style="color:white;">We are here  </span>
    <span class="text2">FOR YOU</span>    
    </div>
    
<section class="search" id ="search">
    
    
    
<div class="search-box" >
 <input class="search-txt" id= "usearch" onkeyup="search()" type="text" placeholder="write your question">
    <a class="search-btn" href="#">
        <i class="fas fa-search"></i>
    
    
    </a>
</div>
    
    
</section>
    
       
    </section>

<!-- Q % A-->

<h2>Frequently asked questions</h2>
    <div id="Q/A">
    <?php
        include_once("connection.php");

        $sql = "select question,answer from qa";
        $result = mysqli_query($conn,$sql);
        $Qnumber = 1;
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<button class='accordion'>Question" .$Qnumber. " : ".$row['question']."</button>
                <div class='panel'>
                  <p class='answer'>".$row['answer']."</p>
                </div>";
                $Qnumber++;
            }
        }
      
    
    ?>
    </div>

<script>


     function search(){
        var valuex = document.getElementById("usearch").value;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("Q/A").innerHTML=this.response;
                interaction();
            }
            };
              xmlhttp.open("GET", "updateQA.php?code=" + valuex, true);
              xmlhttp.send();
        
    }
    //document.getElementById("Q/A").innerHTML="";
var acc = document.getElementsByClassName("accordion");
var i;
function interaction(){
for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
}
interaction();
   
</script>
</section>
<!-- footer-->


</section>
    </body>
</html>