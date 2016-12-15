<?php 
    
    $role="ADMIN";
      
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Consultation du planning de formation.</title>
        
    </head>
    <body>

        <table>
            <caption><b>Consultation du planning de formation</b></caption>
            <tr>
                <td>Date</td>
                <td>Label</td>
                <td>Teacher</td>
                <?php if($role=="ADMIN"){ ?>                    
                        <td>Actions</td>
                <?php } ?>                  
            </tr> 
            
            
            <?php foreach ($outputData as $outputLine ) : ?> 

            <tr>
                <td><?php echo $outputLine['date'] ?></td>
                <td><?php echo $outputLine['label'] ?></td>
                <td><?php echo $outputLine['teach'] ?></td>  
                 <td>
                     
                     <?php if($role=="ADMIN"){?>
                        <a href="../manager/showPlanningManager.php">Delete</a>
                        <a href="../manager/showPlanningManager.php">Update</a>                 
                     <?php } ?>         
                     
                </td>
            </tr>
      
            <?php endforeach ?>          
            
        </table>      
    </body>
</html>
        
