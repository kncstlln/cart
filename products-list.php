<?php
require('app/Customer.php');
require('app/Product.php');
require('app/FileUtility.php');

$products_data = FileUtility::openCSV('products.csv');

$products = Product::convertArrayToProducts($products_data);

$customer = new Customer('Kane Castillano', 'kane@mail.com');
?>
<html>
<head>
    <title>My Cart</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Serif+Display">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<!--Main Navigation-->
<header>
  <!-- Navbar-->
  <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
    <div class="container-fluid justify-content-center justify-content-md-between">
      <div class="d-flex my-2 my-sm-0">
        <a class="navbar-brand me-2 mb-1 d-flex justify-content-center" href="#">
          <img src="shoe topper (1).png" height="50" alt=""
            loading="lazy" />
        </a>

        <!-- Search form -->
        <form class="d-flex input-group w-auto my-auto">
          <input autocomplete="off" type="search" class="form-control rounded" placeholder="Search"
            style="min-width: 125px" />
          <span class="input-group-text border-0 d-none d-md-flex"><i class="fas fa-search"></i></span>
        </form>
      </div>
 <ul class="navbar-nav flex-row">
        <li class="nav-item me-3 me-lg-0">
          <a class="nav-link" href="#" role="button" data-mdb-toggle="sidenav" data-mdb-target="#sidenav-1"
            class="btn shadow-0 p-0 me-3" aria-controls="#sidenav-1" aria-haspopup="true">
            <i class="fas fa-bars me-1"></i>
            <span>Categories</span>
          </a>
</li>
        <li class="nav-item me-3 me-lg-0">
          <a class="nav-link" href="shopping-cart.php">
            <span class="d-none d-lg-inline-block">Shopping Cart</span>
            <i class="fas fa-shopping-bag d-inline-block d-lg-none"></i>
          </a>
        </li>
        <!-- Avatar -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdownMenuLink"
            role="button" data-mdb-toggle="dropdown" aria-expanded="false">
            <img src="Castillano_ID Picture.jpg" class="rounded-circle" height="22"
              alt="" loading="lazy" />
          </a>
        </li>
      </ul>
    </div>
  </nav>

  <div id="intro" class="bg-image shadow-1-strong" style="
        background-image: url(shoecover.jpg);
        height: 500px;
      ">
    <div class="mask text-white" style="background-color: rgba(0, 0, 0, 0.6); margin-top: 58px">
      <div class="container d-flex align-items-center justify-content-center text-center h-100">
        <div class="text-white">
        <h1 class="name">Welcome,  <?php echo $customer->getName() ?>! </h1>
          <h1 class="mb-3">Summer sale</h1>
          <h4 class="mb-4">Promotions up to 60%!</h4>
          <a class="btn btn-outline-light btn-lg mb-3" href="#product" role="button" >See products
            <i class="fas fa-gem ms-1"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</header>
<br>
<section style="background-color: #eee;">
  <div class="text-center container py-5">
    <h4 class="mt-4 mb-5"><strong>Product Overview</strong></h4>

    <div class="row">
      <div class="col-lg-4 col-md-12 mb-4">
        <div class="card">
          <div
            class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
            data-mdb-ripple-color="light"
          >
            <img
              src="nikeover.webp"
              class="w-100"
            />
            <a href="#!">
              <div class="mask">
                <div class="d-flex justify-content-start align-items-end h-100">
                  <h5><span class="badge bg-primary ms-2">New</span></h5>
                </div>
              </div>
              <div class="hover-overlay">
                <div
                  class="mask"
                  style="background-color: rgba(251, 251, 251, 0.15);"
                ></div>
              </div>
            </a>
          </div>
          <div class="card-body">
            <a href="" class="text-reset">
              <h5 class="card-title mb-3">Nike Air Force 1 '07 Premium</h5>
            </a>
            <a href="" class="text-reset">
              <p>Best Seller</p>
            </a>
            <h6 class="mb-3">₱7,595</h6>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card">
          <div
            class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
            data-mdb-ripple-color="light"
          >
            <img
              src="nike3over.webp"
              class="w-100"
            />
            <a href="#!">
              <div class="mask">
                <div class="d-flex justify-content-start align-items-end h-100">
                  <h5><span class="badge bg-success ms-2">Eco</span></h5>
                </div>
              </div>
              <div class="hover-overlay">
                <div
                  class="mask"
                  style="background-color: rgba(251, 251, 251, 0.15);"
                ></div>
              </div>
            </a>
          </div>
          <div class="card-body">
            <a href="" class="text-reset">
              <h5 class="card-title mb-3">Nike Victori One</h5>
            </a>
            <a href="" class="text-reset">
              <p>Men's Shower Slide</p>
            </a>
            <h6 class="mb-3">₱1,295</h6>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card">
          <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
            <img
              src="jordanover.webp"
              class="w-100"
            />
            <a href="#!">
              <div class="mask">
                <div class="d-flex justify-content-start align-items-end h-100">
                  <h5><span class="badge bg-danger ms-2">-10%</span></h5>
                </div>
              </div>
              <div class="hover-overlay">
                <div
                  class="mask"
                  style="background-color: rgba(251, 251, 251, 0.15);"
                ></div>
              </div>
            </a>
          </div>
          <div class="card-body">
            <a href="" class="text-reset">
              <h5 class="card-title mb-3">Air Jordan 1 Retro High OG</h5>
            </a>
            <a href="" class="text-reset">
              <p>Shoes</p>
            </a>
            <h6 class="mb-3">
              <s>₱9,095</s><strong class="ms-2 text-danger">₱8185.5</strong>
            </h6>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-12 mb-4">
        <div class="card">
          <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
            <img
              src="jordan1over.webp"
              class="w-100"
            />
            <a href="#!">
              <div class="mask">
                <div class="d-flex justify-content-start align-items-end h-100">
                  <h5>
                    <span class="badge bg-success ms-2">Eco</span
                    ><span class="badge bg-danger ms-2">-10%</span>
                  </h5>
                </div>
              </div>
              <div class="hover-overlay">
                <div
                  class="mask"
                  style="background-color: rgba(251, 251, 251, 0.15);"
                ></div>
              </div>
            </a>
          </div>
          <div class="card-body">
            <a href="" class="text-reset">
              <h5 class="card-title mb-3">Air Jordan 1 Retro High OG</h5>
            </a>
            <a href="" class="text-reset">
              <p>Boys' Shoe</p>
            </a>
            <h6 class="mb-3">
              <s>₱5,595</s><strong class="ms-2 text-danger">₱5,035.5</strong>
            </h6>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card">
          <div
            class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
            data-mdb-ripple-color="light"
          >
            <img
              src="nike1over.webp"
              class="w-100"
            />
            <a href="#!">
              <div class="mask">
                <div class="d-flex justify-content-start align-items-end h-100"></div>
              </div>
              <div class="hover-overlay">
                <div
                  class="mask"
                  style="background-color: rgba(251, 251, 251, 0.15);"
                ></div>
              </div>
            </a>
          </div>
          <div class="card-body">
            <a href="" class="text-reset">
              <h5 class="card-title mb-3 mt-4">Nike Air Max Dawn</h5>
            </a>
            <a href="" class="text-reset">
              <p>Women's Shoes</p>
            </a>
            <h6 class="mb-3">₱5,895</h6>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card">
          <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
            <img
              src="nike2over.webp"
              class="w-100"
            />
            <a href="#!">
              <div class="mask">
                <div class="d-flex justify-content-start align-items-end h-100">
                  <h5>
                    <span class="badge bg-primary ms-2">New</span
                    ><span class="badge bg-success ms-2">Eco</span
                    ><span class="badge bg-danger ms-2">-10%</span>
                  </h5>
                </div>
              </div>
              <div class="hover-overlay">
                <div
                  class="mask"
                  style="background-color: rgba(251, 251, 251, 0.15);"
                ></div>
              </div>
            </a>
          </div>
          <div class="card-body">
            <a href="" class="text-reset">
              <h5 class="card-title mb-3">LeBron Witness 6 EP</h5>
            </a>
            <a href="" class="text-reset">
              <p>Basketball Shoes</p>
            </a>
            <h6 class="mb-3">
              <s>₱5,095</s><strong class="ms-2 text-danger">₱4,585.5</strong>
            </h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<h1 class="display-6" > Available Products </h1>
<a id="product"> <?php foreach ($products as $product): ?> </a>
  <form action="add-to-cart.php" method="POST">
    <input type="hidden" name="product_id" value="<?php echo $product->getId(); ?>" /> 
  <section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6 col-xl-4">
        <div class="card text-black">
          <i class="fab fa-apple fa-lg pt-3 pb-1 px-3"></i>
          
          <img
            src="<?php echo $product->getImage(); ?>"
            class="card-img-top"
            alt="Nike Air Force 1"
          />
          <div class="card-body">
            <div class="text-center">
              <h5 class="card-title"><?php echo $product->getDescription(); ?></h5>
              <p class="text-muted mb-4"><?php echo $product->getName(); ?></p>
              <span><?php echo $product->getPrice(); ?> PHP</span>
              <div class="p-3 mb-4">
              <div class="text-center">
                <button type="button" class="btn btn-dark">Buy now</button>
              </div>
            </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>

<?php endforeach; ?>

</body>
<style>
    .name{
        font-family: 'Noto Serif Display', serif;
    }


</style>







</html>
