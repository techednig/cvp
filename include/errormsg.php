<div class="col">
                    <small class="form-text text-danger" style="font-size: 14px;">&nbsp;</div><?php
    
            
    if(isset($_GET['msg'])){
    $msg = base64_decode($_GET['msg']);

        if($msg!=""){
            echo "<i class='fas fa-exclamation-triangle' style='color: var(--bs-red)'></i>"; echo $msg;
            //echo $_GET['msg'];
        }
        
        }
    
?></small>
</div>