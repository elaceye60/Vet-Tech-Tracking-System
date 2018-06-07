<html lang="en-us">
<head>
	<title>Add Student Skill</title>
	
	<?php
		include('nav.php');
	?>
	
</head>
<body>
    
    <div class="body_container">

        <?php

            if($_SERVER['REQUEST_METHOD'] == 'GET'){
                
                if (isset($_GET['id']) and is_numeric($_GET['id'])){
                    $id = $_GET['id'];
                    
                    echo "<h2>Add Completed Skill</h2>";
                    
                    $skills = new SkillViewer();
                    $skills->showAllSkillsSpecial();
                }
                
            }
            elseif ($_SERVER['REQUEST_METHOD'] == 'POST'){
                if (isset($_GET['id']) and is_numeric($_GET['id'])){
                    $id = $_GET['id'];
                    
                    $skill = new StudentSkillViewer();
                    //$skill->addStudentSkill();
                }
            }
            else{
                
                echo "<h1>There was an issue</h1>";
                echo "<p>Please try to search again.</p>";
                echo '<a href="home.php">Return to Home</a>';
            }
            
        ?>
        
    </div>
    
   <!-- <script>
        var acc = document.getElementsByClassName("accordion");
        var i;
        
        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                
                var panel = this.nextElementSibling;
                panel.style.display = "none";
                /*if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }*/
            });
        }
    </script> -->
    
</body>

</html>