<?php
include "t_headuser.php";
include "t_sidebaruser.php";
include "t_caruser.php";

?>
<section class="utama" id="utama">
           <div class="container">
            <div class="row pt-4">
              <div class="col-lg-8">
              	<h2>Halaman Download</h2>
             	<br>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama File</th>
                        <th>Tanggal Post</th>
                        <th>Hit</th>
                        <th>Download</th>
                    </tr>
                    </thead>
                    <tbody>
            <?php   $no = 1;
                    foreach ($vdown->result_array() as $r){
                        $tgl_post = $r['tgl_post'];       
                echo   "<tr>
                            <td>$no</td>
                            <td>$r[judul]</td>
                            <td>$tgl_post</td>
                            <td>$r[hits]</td>
                            <td><a class='btn btn-primary btn-sm' href='".base_url()."assets/files/$r[nama_file]'>Download</a></td>
                        </tr>";
                        $no++;
                    }       ?>         
                    </tbody>
                </table>
              </div>
            
<?php                
include "t_infouser.php";
include "t_footuser.php";
?>                   