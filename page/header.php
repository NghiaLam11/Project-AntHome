<!-- --------------------------- START HEADER --------------------- -->
<style type="text/css">

	/*Di động*/
	.nav-tabs .nav-link {
		border: none;
	}
	.nav-tabs .nav-link:hover {
		color: orange !important;
	}
	.nav-item.active {
		color: orange !important;
	}	
	.nav__mobile {
		width: 70vw;
		z-index: 9999;
		left: -100%;
		transition: all 0.35s linear;
	}
	.search__mobile {
		width: 70vw;
		z-index: 9999;
		right: -100%;
		transition: all 0.35s linear;
	}
	.cart__mobile {
		width: 70vw;
		z-index: 9999;
		right: -100%;
		transition: all 0.35s linear;
	}
	.product__fixed{
		z-index: 99999;
		visibility: hidden;
		opacity: 0;
		top: 25%;
		transition: all 0.2s linear;
	}

	/*Tablet*/
	@media (min-width: 768px){
		.nav__mobile {
			width: 40vw;
		}
		.search__mobile {
			width: 45vw;
		}	
		.cart__mobile {
			width: 45vw;
		}	
	}
	/*PC*/
	@media (min-width: 1400px){
		
	}
</style>
<!-- ------------- START PRODUCT WHEN HOVER -------- -->
<div class="product__fixed bg-white position-fixed start-0 end-0 row border-top border-bottom">
	<div class="w-1200 d-flex flex-wrap flex-lg-nowrap p-lg-5 p-md-4 p-2">
		<div class="d-flex flex-column col-lg-2 p-3">
			<h6 class="fw-bold text-uppercase fs-0">Nội thất</h6>
			<ul class="fs-0 list-unstyled">
				<li class="text__hover py-1">
					Phòng khách
				</li>
				<li class="text__hover py-1">
					Phòng khách

				</li>
				<li class="text__hover py-1">
					Phòng ăn

				</li>
				<li class="text__hover py-1">
					Phòng khách

				</li>
				<li class="text__hover py-1">
					Phòng ngủ

				</li>
				<li class="text__hover py-1">
					Phòng ngủ

				</li>
			</ul>
		</div>
		<div class="col-lg-2 p-md-3 px-3 py-0">
			<h6 class="fw-bold text-uppercase fs-0">Đồ trang trí</h6>
			<ul class="fs-0 list-unstyled">
				<li class="text__hover py-1">
					Tranh & Khung ảnh
				</li>
				<li class="text__hover py-1">
					Đồ dùng uống trà & Cafe
				</li>
				<li class="text__hover py-1">
					Tranh & Khung ảnh
				</li>
				<li class="text__hover py-1">
					Đồ dùng uống trà & Cafe
				</li>
				<li class="text__hover py-1">
				Đồ dùng uống trà & Cafe
				</li>
			</ul>
			
		</div>
		<div class="col-lg-2 p-md-3 px-3 py-0">
			<h6 class="fw-bold text-uppercase fs-0">Đèn</h6>
			<ul class="fs-0 list-unstyled">
				<li class="text__hover py-1">
					Đèn bàn
				</li>
				<li class="text__hover py-1">
					Đèn bàn

				</li>
				<li class="text__hover py-1">
					Đèn bàn

				</li>
				<li class="text__hover py-1">
					Đèn bàn

				</li>
			</ul>
		</div>
		<div class="col-lg-2 p-md-3 px-3 py-0">
			<h6 class="fw-bold text-uppercase fs-0">Nội thất</h6>
			<ul class="fs-0 list-unstyled">
				<li class="text__hover py-1">
					Trang trí ngoài trời
				</li>
				<li class="text__hover py-1">
					Trang trí ngoài trời

				</li>
			</ul>
		</div>
		<div class="col-lg-3">
			<img src="img/mega-1-image.webp" class="w-100" alt="">
		</div>
	</div>
</div>	
<!-- ------------- END PRODUCT WHEN HOVER -------- -->

<!-- ------- START CART MOBILE ----- -->
<div class="cart__mobile position-fixed top-0 bottom-0 bg-light">
	<div class="position-absolute top-0 end-0 m-2 hidden__cart">
		<i class="bi bi-x-lg"></i>
	</div>
	<h4 class="text-uppercase fw-bold m-2">Gio Hang</h4>
	<div class="text-center mt-5">
		<button class="btn-lg border-0 text-light bg-danger mt-5">
			Tiếp tục mua hàng
		</button>
	</div>
	
</div>	
<!-- ------- END CART MOBILE ----- -->

<!-- ------- START SEARCH MOBILE ----- -->
<div class="search__mobile position-fixed top-0 bottom-0 bg-light">
	<div class="position-absolute top-0 end-0 m-2 hidden__search">
		<i class="bi bi-x-lg"></i>
	</div>
	<h4 class="text-uppercase fw-bold m-2">Tìm kiếm sản phẩm</h4>
	<div class="align-items-center border d-flex my-5 mx-2">
		  <input type="text" class="form-control border-0 bg-transparent" placeholder="Tìm sản phẩm" aria-label="Tìm sản phẩm" aria-describedby="basic-addon2">
		  <span class="input-group-text px-4 py-3 border-0 rounded-0 bg-danger text-light text__hover" id="basic-addon2"><i class="bi bi-search"></i></span>
	</div>
</div>	
<!-- ------- END SEARCH MOBILE ----- -->

<!-- ------------ START BLUR WHEN TOGGLE NAV MOBILE ---------------- -->
<div style="background-color: rgba(0, 0, 0, 0.8); z-index: 999;" class="position-fixed top-0 start-0 end-0 bottom-0 d-none blur__nav">
</div>
<!-- ---------- END BLUR WHEN TOGGLE NAV MOBILE ----------------- -->

<!-- ---------- START NAV MOBILE ---------- -->

<div class="nav__mobile position-fixed top-0 bottom-0 bg-light">
	<div class="position-absolute top-0 end-0 m-2 hidden__nav">
		<i class="bi bi-x-lg"></i>
	</div>
	<ul class="nav nav-tabs list-unstyled m-0 d-flex flex-column">
				<li class="py-2 px-3 nav-item mt-3">
					<a class="nav-link text-uppercase fw-bold text-decoration-none text-dark" href="#">
						Trang chủ
					</a>
				</li>
				<li class="py-2 px-3 nav-item">
					<a class="nav-link text-uppercase fw-bold text-decoration-none text-dark" href="?p=about">
						Giới thiệu
					</a>
				</li>
				<li class="py-2 px-3 nav-item">

					<div class="position-relative">
						<a class="nav-link text-uppercase fw-bold text-decoration-none text-dark w-75 position-absolute top-0 mt-1" href="?p=product" style="z-index: 99;">
						SẢN PHẨM
						</a>
						<div class="accordion accordion-flush" id="accordionFlushExample">
						  <div class="accordion-item">
						    <h2 class="accordion-header" id="flush-headingOne">
						      <button class="accordion-button collapsed text-uppercase bg-transparent pt-2 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
						        
						      </button>
						    </h2>
						    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
						      <div class="accordion-body">
									<ul class="list-unstyled m-0 d-flex flex-column">
										<li class="p-2">
											<div class="form-check d-flex p-0 justify-content-start text__hover">
											  <label class="form-check-label px-2" for="flexCheckDefault">
											    Ant Home
											  </label>
											</div>
										</li>
										<li class="p-2">
											<div class="form-check d-flex p-0 justify-content-start text__hover">
											  <label class="form-check-label px-2" for="flexCheckDefault">
											    Ant Home
											  </label>
											</div>
										</li>
										<li class="p-2">
											<div class="form-check d-flex p-0 justify-content-start text__hover">
											  <label class="form-check-label px-2" for="flexCheckDefault">
											    Ant Home
											  </label>
											</div>
										</li>
										<li class="p-2">
											<div class="form-check d-flex p-0 justify-content-start text__hover">
											  <label class="form-check-label px-2" for="flexCheckDefault">
											    Ant Home
											  </label>
											</div>
										</li>
										<li class="p-2">
											<div class="form-check d-flex p-0 justify-content-start text__hover">
											  <label class="form-check-label px-2" for="flexCheckDefault">
											    Ant Home
											  </label>
											</div>
										</li>
										<li class="p-2">
											<div class="form-check d-flex p-0 justify-content-start text__hover">
											  <label class="form-check-label px-2" for="flexCheckDefault">
											    Ant Home
											  </label>
											</div>
										</li>
									</ul>

						      </div>
						    </div>
						  </div>
						</div>
					</div>					
					
				</li>
				
				<li class="py-2 px-3 nav-item">
					<a class="nav-link text-uppercase fw-bold text-decoration-none text-dark" href="?p=product">
						Deal Hot 
					</a>
				</li>
				<li class="py-2 px-3 nav-item">
					<a class="nav-link text-uppercase fw-bold text-decoration-none text-dark" href="?p=regis">
						Thương hiệu nổi bật
					</a>
				</li>
				<li class="py-2 px-3 nav-item">
					<a class="nav-link text-uppercase fw-bold text-decoration-none text-dark" href="?p=news">
						Tin tức
					</a>
				</li>
				<li class="py-2 px-3 nav-item">
					<a class="nav-link text-uppercase fw-bold text-decoration-none text-dark" href="?p=contact">
						Liên hệ
					</a>
				</li>
				<li class="py-2 px-3 nav-item">
					<a class="nav-link text-uppercase fw-bold text-decoration-none text-dark" href="?p=faq">
						FAQ
					</a>
				</li>
		</ul>
</div>
<!-- ---------- END NAV MOBILE ---------- -->

<div class="row header">
	<div class="w-1200 py-3 px-md-5 px-3 d-flex align-items-center justify-content-between">
		<div class="d-block d-lg-none display__nav">
			<i class="bi bi-justify fs-2"></i>
		</div>
		<img src="img/logo.webp" alt="" class="col-lg-2" style="width: 170px;">
		<div class="align-items-center col-lg-6 border mx-3 d-none d-lg-flex">
		  <input type="text" class="form-control border-0 bg-transparent" placeholder="Tìm sản phẩm" aria-label="Tìm sản phẩm" aria-describedby="basic-addon2">
		  <span class="input-group-text border-0 bg-transparent text__hover" id="basic-addon2"><i class="bi bi-search"></i></span>
		</div>
		<div class="col-lg-4 d-flex justify-content-end align-items-center">
			<div class="text-dark text__hover position-relative px-2 d-none d-lg-inline">
			  <i class="fs-5 p-1 fst-normal bi bi-heart"></i><span>Yêu thích</span>
			  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
			    0
			  </span>
			</div>
			<div class="text-dark text__hover position-relative px-2 d-none d-lg-inline">
			  <i class="fs-5 p-1 bi bi-person"></i><span class="d-none d-lg-inline">Tài khoản</span>
			</div>
			<div class="d-block d-lg-none display__search">
				<i class="bi bi-search fs-4"></i>
			</div>
			<div href="" class="text-dark text__hover position-relative px-md-2 ps-2 pe-0 display__cart">
			  <i class="fs-5 p-1 bi bi-bag"></i><span class="d-none d-lg-inline">Giỏ hàng</span>
			  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger d-none d-md-inline">
			    0
			  </span>
			</div>
		</div>
	</div>
	<div class="w-1200 justify-content-center d-none d-lg-flex">
		<ul class="nav nav-tabs list-unstyled m-0 d-flex align-items-center border-0 justify-content-center">
				<li class="py-3 px-1 nav-item ">
					<a class="nav-link text-decoration-none text-dark" href="#">
						Trang chủ
					</a>
				</li>
				<li class="py-3 px-1 nav-item">
					<a class="nav-link text-decoration-none text-dark" href="?p=about">
						Giới thiệu
					</a>
				</li>
				<li class="py-3 px-1 nav-item product__hover">
					<a class="nav-link text-decoration-none text-dark" href="?p=product">
						Sản phẩm <i class="bi bi-caret-down-fill"></i>
					</a>
				</li>
				<li class="py-3 px-1 nav-item">
					<a class="nav-link text-decoration-none text-dark" href="?p=product">
						Deal Hot 
					</a>
				</li>
				<li class="py-3 px-1 nav-item">
					<a class="nav-link text-decoration-none text-dark" href="?p=regis">
						Thương hiệu nổi bật
					</a>
				</li>
				<li class="py-3 px-1 nav-item">
					<a class="nav-link text-decoration-none text-dark" href="?p=news">
						Tin tức
					</a>
				</li>
				<li class="py-3 px-1 nav-item">
					<a class="nav-link text-decoration-none text-dark" href="?p=contact">
						Liên hệ
					</a>
				</li>
				<li class="py-3 px-1 nav-item">
					<a class="nav-link text-decoration-none text-dark" href="?p=faq">
						FAQ
					</a>
				</li>
		</ul>
	</div>
</div>

<script>



const product__hover = document.querySelector('.product__hover')	
const product__fixed = document.querySelector('.product__fixed')	

product__hover.addEventListener('mouseover', () => {
	product__fixed.style.top = '19%';
	product__fixed.style.visibility = 'visible';
	product__fixed.style.opacity = '1';
})

product__fixed.addEventListener('mouseover', () => {
	product__fixed.style.top = '19%';
	product__fixed.style.visibility = 'visible';
	product__fixed.style.opacity = '1';
})

product__hover.addEventListener('mouseout', () => {
	product__fixed.style.top = '25%';
	product__fixed.style.visibility = 'hidden';
	product__fixed.style.opacity = '0';
})
product__fixed.addEventListener('mouseout', () => {
	product__fixed.style.top = '25%';
	product__fixed.style.visibility = 'hidden';
	product__fixed.style.opacity = '0';

})


const nav__mobile = document.querySelector('.nav__mobile')	
const display__nav = document.querySelector('.display__nav')	
const hidden__nav = document.querySelector('.hidden__nav')
const blur__nav = document.querySelector('.blur__nav')

display__nav.addEventListener('click', ()=> {
	nav__mobile.style.left = '0'
	blur__nav.classList.add('d-block')
	blur__nav.classList.remove('d-none')
})
hidden__nav.addEventListener('click',()=> {
	nav__mobile.style.left = '-100%'
	blur__nav.classList.add('d-none')
	blur__nav.classList.remove('d-block')
})

const search__mobile = document.querySelector('.search__mobile')	
const display__search = document.querySelector('.display__search')	
const hidden__search = document.querySelector('.hidden__search')

display__search.addEventListener('click', ()=> {
	search__mobile.style.right = '0'
	blur__nav.classList.add('d-block')
	blur__nav.classList.remove('d-none')
})
hidden__search.addEventListener('click',()=> {
	search__mobile.style.right = '-100%'
	blur__nav.classList.add('d-none')
	blur__nav.classList.remove('d-block')
})

const cart__mobile = document.querySelector('.cart__mobile')	
const display__cart = document.querySelector('.display__cart')	
const hidden__cart = document.querySelector('.hidden__cart')

display__cart.addEventListener('click', ()=> {
	cart__mobile.style.right = '0'
	blur__nav.classList.add('d-block')
	blur__nav.classList.remove('d-none')
})
hidden__cart.addEventListener('click',()=> {
	cart__mobile.style.right = '-100%'
	blur__nav.classList.add('d-none')
	blur__nav.classList.remove('d-block')
})
</script>
<!-- --------------------------- END HEADER --------------------- -->
