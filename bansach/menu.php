<?php 
$kq=$qt->listLSP();

?>
<style>
	.hb-menu {
    padding-left: 11%;
    background: #fed700;
}
</style>
<div class="header-bottom header-sticky stick d-none d-lg-block d-xl-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">	
<div class="hb-menu">
                                   <nav>
                                       <ul>
                                           <li class="dropdown-holder">
											   <a href="index.php">Trang chủ</a>           </li>
										    <li><a href="index.php?p=details">Tất cả sản phẩm</a></li>
										   <?php while($rowLSP=$kq->fetch_assoc()){?>
                                           <li class="dropdown-holder"><a href="index.php?p=sanpham1&idLSP=<?= $rowLSP['idLSP']?>"><?= $rowLSP['Ten']?></a>
                                               <ul class="hb-dropdown" style="display:inline-block">
												   
												   <?php $kq1=$qt->listTLSPTrong1LSP($rowLSP['idLSP']);
												   while($rowTLSP=$kq1->fetch_assoc()){
												   ?>
                                                   <li class="sub-dropdown-holder"><a href="index.php?p=sanpham&idTLSP=<?= $rowTLSP['idTLSP']?>"><?= $rowTLSP['tenTLSP']?></a>
                                                     
                                                   </li><?php }?>

                                               </ul>
                                           </li><?php }?>
                                           
                                           
                                          
                                           <li><a href="contact.php">&nbsp;&nbsp;Contact</a></li>
                                       </ul>
                                   </nav>
                               </div>
							</div>
                        </div>
                    </div>
                </div>