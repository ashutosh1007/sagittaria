<?php
    $certificate_info = "";
    $query = "SELECT * FROM certifications";
    $select_certification_query = mysqli_query($connection, $query);
    confirmQuery($select_certification_query);
?>
<section id="certifications" class="pb-5" style="background-color: #F6FAEC;">
    <div class="container">
        <h1 class="text-center">Certifications</h1>
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
                The Government of India has recognized us as One Star Export House which speaks about our commitment towards
                consistent Quality &amp; Business Standards. We are also SA 8000:2014 and SMETA 4 Pillar audited &amp; certified for Social and
                Ethical Compliance, <?php echo $certificate_info; ?>
            </p>
            <div class="mt-5">
                <?php
                    foreach ($certificates as $certificate){
                ?> 
                <img src="admin/images/certifications/<?php echo $certificate['certificate_image']; ?>" class="cert-p" alt="" width="150px" height="100px">
                <?php 
                }?>
            </div>
          <?php   
           }
        ?>
    </div>
</section>
