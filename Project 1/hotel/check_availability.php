<?php
include("hotel_db.php");

  if($_SERVER['REQUEST_METHOD']=='POST')
  {
    $check_in_date=$_POST['check_in_date'];
    $check_out_date=$_POST['check_out_date'];
    $roomtype=$_POST['roomtype'];
	}
?>
<section class="page-section bg-dark">
						<?php 
						 $cat = $conn->query("SELECT * FROM room_categories");
						$cat_arr = array();
						while($row = $cat->fetch_assoc()){
							$cat_arr[$row['id']] = $row['id'];
						}
						$qry = $conn->query("SELECT distinct(category_id),category_id from rooms where id not in (SELECT room_id from checked where '$check_in_date' BETWEEN date(date_in) and date(date_out) and '$check_out_date' BETWEEN date(date_in) and date(date_out)  )");
							while($row= $qry->fetch_assoc()):

						?>
						<div class="card item-rooms mb-3">
							<div class="card-body">
								<div class="row">
								<div class="col-md-5">
									<img src="assets/img/<?php echo $cat_arr[$row['category_id']]['cover_img']  ?>" alt="">
								</div>
								<div class="col-md-5" height="100%">
									<h3><b><?php echo 'Rs '.number_format($cat_arr[$row['category_id']]['price'],2) ?></b><span> / per day</span></h3>

									<h4><b>
										<?php echo $cat_arr[$row['category_id']]['name'] ?>
									</b></h4>
									<div class="align-self-end mt-5">
										<button class="btn btn-primary  float-right book_now" type="button" data-id="<?php echo $row['category_id'] ?>">Book now</button>
									</div>
								</div>
							</div>

							</div>
						</div>
						<?php endwhile; ?>
				</div>	
		</div>	
</section>
<style type="text/css">
	.item-rooms img {
    width: 23vw;
}
</style>
<script>
	$('.book_now').click(function(){
		uni_modal('Book','admin/book.php?in=<?php echo $date_in ?>&out=<?php echo $date_out ?>&cid='+$(this).attr('data-id'))
	})
</script>