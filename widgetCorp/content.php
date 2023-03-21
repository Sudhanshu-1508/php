
<?php require_once("dbconnection.php"); ?>
<?php require_once("functions.php"); ?>
<?php
if(isset($_GET['subj'])){
    $selSubj = $_GET['subj'];
    $selPage = "";
} elseif (isset($_GET['page'])) {
    $selPage =$_GET['page'];
    $selSubj = "";
}
else{
    $selPage = "";
    $selSubj="";
}
?>
<?php include("includes.php"); ?>
            <table id="structure">
                <tr>
                    <td id="navigation">
                        <ul class="subjects">
<?php 
$subjectSet = mysqli_query( $connection, "SELECT * FROM subjects ORDER BY position ASC");
confirmQuery($subjectSet);

while($subject= mysqli_fetch_array($subjectSet)){
    echo "<li><a href=\"\content.php?subj=" . urlencode($subject['id']) . "\">{$subject["menuName"]}</a>  </li>";   
    $pageSet = mysqli_query( $connection, "SELECT * FROM pages where subjectId = {$subject["id"]} ORDER BY position ASC");
    confirmQuery($pageSet);
    
    echo "<ul class=\"pages\">";
    while($page= mysqli_fetch_array($pageSet)){
       echo "<li><a href=\"content.php?page= " . urldecode($page["id"]) . "\">{$page["menuName"]}</a>  </li>";   
    }
    echo "</ul>";
}
?>
               </ul>
                    </td>
                    <td id="page">
                        <h2>Content Area</h2>
                        <?php echo $selSubj; ?></br>
                        <?php echo $selPage; ?></br>
                    </td>
                </tr>
            </table>
        </div>
<?php include("footer.php");?>

<?php  mysqli_close($connection) ?>