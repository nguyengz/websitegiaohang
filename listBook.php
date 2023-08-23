<?php 
session_start();
include "../../model/connectDB.php";
include "../../model/bookModel.php";
include "../../model/loaiModel.php";
$book = new bookModel(1, 1, 1, 1, 1, 1, 1); //fake data
$arrayOb = $book->getAllBook();
$loai = new loaiModel(1,1);
$result = $loai->getAllLoai();
?>
<!DOCTYPE html>
<html>
<?php include "./layout/head.php"?>
	<body>
		
		<?php include "./layout/pre-loader.php"?>
		<?php include "./layout/header.php"?>

		<?php include "./layout/right-sidebar.php"?>

		<?php
			include "./layout/left_side_bar.php"; 
		?>
		<div class="mobile-menu-overlay"></div>

		<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4>Bảng</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.html">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											DataTable
										</li>
									</ol>
								</nav>
							</div>
							
						</div>
					</div>
					<div class="page-header">
					<button type="button" class="btn btn-primary"> Thêm Sách </button>
					</div>
					<!-- dsbook -->
					<div class="card-box mb-30">
						<div class="pd-20">
							<h4 class="text-blue h4">Danh sách</h4>
							
						</div>
						<div class="pb-20">
							<table class="data-table table stripe hover nowrap">
								<thead>
									<tr>
										<th class="table-plus datatable-nosort">Id</th>
										<th>Tên sách</th>
										<th>Tác giả</th>
										<th>Giá</th>
										<th>Mô tả</th>
										<th>Hình ảnh</th>
										<th class="datatable-nosort">Hành động</th>
									</tr>
								</thead>
								<tbody>
                                    <?php for($i=0;$i<=count($arrayOb);$i++){
										if(!empty($arrayOb[$i])){

										
										?>
									<tr>
										<td class="table-plus"><?php echo $arrayOb[$i]->getId()?></td>
										<td><?php echo $arrayOb[$i]->getTensach()?></td>
										<td><?php echo $arrayOb[$i]->getTacgia()?></td>
										<td><?php echo $arrayOb[$i]->getGia()?></td>
										<td><?php echo $arrayOb[$i]->getMota()?></td>
										<td>
											<img width="120" height="120" src="<?php echo "../".$arrayOb[$i]->getHinh();?>">
											<!-- <img width="120" height="120" src="../images/imageBook/sachbiquyetnguoichienthang.jpg"> -->
										</td>
										<td>
											<div class="dropdown">
												<a
													class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
													href="#"
													role="button"
													data-toggle="dropdown"
												>
													<i class="dw dw-more"></i>
												</a>
												<div
													class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
												>
													 
													<a class="dropdown-item" href="#"
														><i class="dw dw-edit2"></i> Sửa</a
													>
													<a class="dropdown-item" href="#"
														><i class="dw dw-delete-3"></i> Xóa</a
													>
												</div>
											</div>
										</td>
									</tr>
									<?php }}?>
									
								</tbody>
							</table>
						</div>
					</div>
					<div class="page-header">
					<button type="button" class="btn btn-primary"> Thêm Loại </button>
					</div>
					<!-- dstype -->
					<div class="card-box mb-30">
						<div class="pd-20">
							<h4 class="text-blue h4">Danh sách loại sách </h4>
							
						</div>
						<div class="pb-20">
							<table class="data-table table stripe hover nowrap">
								<thead>
									<tr>
										<th class="table-plus datatable-nosort">Id</th>
										<th>Tên loại sách</th>
										<th class="datatable-nosort">Hành động</th>
									</tr>
								</thead>
								<tbody>
								
        
                                    <?php while($row = $result ->fetch()){
										 

										
										?>
									<tr>
										<td class="table-plus"><?php echo $row['id']?></td>
										<td><?php echo $row['tenloai']?></td>
										 
									 
										 
										<td>
											<div class="dropdown">
												<a
													class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
													href="#"
													role="button"
													data-toggle="dropdown"
												>
													<i class="dw dw-more"></i>
												</a>
												<div
													class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
												>
													 
													<a class="dropdown-item" href="#"
														><i class="dw dw-edit2"></i> Sửa</a
													>
													<a class="dropdown-item" href="#"
														><i class="dw dw-delete-3"></i> Xóa</a
													>
												</div>
											</div>
										</td>
									</tr>
									<?php }?>
									
								</tbody>
							</table>
						</div>
					</div>
					<!-- Simple Datatable End -->
					<!-- multiple select row Datatable start -->
				 
					<!-- multiple select row Datatable End -->
					<!-- Checkbox select Datatable start -->
					 
					<!-- Checkbox select Datatable End -->
					<!-- Export Datatable start -->
	 
					<!-- Export Datatable End -->
				</div>
				<!-- <div class="footer-wrap pd-20 mb-20 card-box">
					DeskApp - Bootstrap 4 Admin Template By
					<a href="https://github.com/dropways" target="_blank"
						>Ankit Hingarajiya</a
					>
				</div> -->
			</div>
		</div>
		<?php include "./layout/js.php"?>
	</body>
</html>
