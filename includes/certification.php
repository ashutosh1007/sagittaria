<?php
    $certificate_info = "";
    $query = "SELECT * FROM certifications";
    $select_certification_query = mysqli_query($connection, $query);
    confirmQuery($select_certification_query);
?>


<section id="certifications" class="pb-5" >
<div class="">
        <h4 class="pl-4">Accreditions &amp; Certifications</h4>
        <hr class="horizontal-line">
        <?php
            $count=0;
            while($row = mysqli_fetch_assoc($select_certification_query)){
                $certificate_info .= $row['certificate_name'];
                $certificates[] = $row;
                $count++;
            }
           if($count > 0){
           ?>
            <p class="p-styles">
               <?php //echo $certificate_info; ?>
            </p>
            <div class="mt-4 ml-3 px-2">
                <?php
                    foreach ($certificates as $certificate){
                ?> 
                <img src="admin/images/certifications/<?php echo $certificate['certificate_image']; ?>" class="mx-2 mb-5" alt="" width="120px" height="120px">
                <?php 
                }?>
            </div>
          <?php   
           }
        ?>
    </div>
    <!--End of About us section-->
</section>