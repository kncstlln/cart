<?php
interface CartInterface
{
    public function add($product, $quantity);
    public function remove($product, $quantity);
    public function clear();
    public function getAllItems();
    public function checkout();
}
?>

<html>
    <head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css"rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"></script>
    </head>
    <body>
    <section class="h-100 h-custom">
  <div class="container h-100 py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">

        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col" class="h5">Shopping Bag</th>
                <th scope="col">Item</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">
                  <div class="d-flex align-items-center">
                    <img src="https://sneakernews.com/wp-content/uploads/2021/05/Nike-Air-Force-1-DJ5523-100-2.jpeg" class="img-fluid rounded-3" style="width: 120px;" alt="Book">
                    <div class="flex-column ms-4">
                      <p class="mb-2">Nike Air Force 1</p>
                    </div>
                  </div>
                </th>
                <td class="align-middle">
                  <p class="mb-0" style="font-weight: 500;">Shoes</p>
                </td>
                <td class="align-middle">
                  <div class="d-flex flex-row">
                    <button class="btn btn-link px-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                      <i class="fas fa-minus"></i>
                    </button>

                    <input id="form1" min="0" name="quantity" value="1" type="number"
                      class="form-control form-control-sm" style="width: 50px;" />

                    <button class="btn btn-link px-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                      <i class="fas fa-plus"></i>
                    </button>
                  </div>
                </td>
                <td class="align-middle">
                  <p class="mb-0" style="font-weight: 500;">₱6785</p>
                </td>
              </tr>
              <tr>
                <th scope="row" class="border-bottom-0">
                  <div class="d-flex align-items-center">
                    <img src="https://www.highsnobiety.com/static-assets/thumbor/Dp3zrCVWahFRtmUjTZIzejMXLD8=/1500x1000/whatdropsnow.s3.amazonaws.com/product_image/182981/shrine_image/92a9d16b8af729aa45a77e442d934eda.jpg" class="img-fluid rounded-3" style="width: 120px;" alt="Book">
                    <div class="flex-column ms-4">
                      <p class="mb-2">Air Jordan 1</p>
                    </div>
                  </div>
                </th>
                <td class="align-middle border-bottom-0">
                  <p class="mb-0" style="font-weight: 500;">Shoes</p>
                </td>
                <td class="align-middle border-bottom-0">
                  <div class="d-flex flex-row">
                    <button class="btn btn-link px-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                      <i class="fas fa-minus"></i>
                    </button>

                    <input id="form1" min="0" name="quantity" value="1" type="number"
                      class="form-control form-control-sm" style="width: 50px;" />

                    <button class="btn btn-link px-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                      <i class="fas fa-plus"></i>
                    </button>
                  </div>
                </td>
                <td class="align-middle border-bottom-0">
                  <p class="mb-0" style="font-weight: 500;">₱25000</p>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="card shadow-2-strong mb-5 mb-lg-0" style="border-radius: 16px;">
          <div class="card-body p-4">

            <div class="row">
              <div class="col-md-6 col-lg-4 col-xl-3 mb-4 mb-md-0">
                <form>
                  <div class="d-flex flex-row pb-3">
                    <div class="d-flex align-items-center pe-2">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="radioNoLabel"
                        id="radioNoLabel1v"
                        value=""
                        aria-label="..."
                        checked
                      />
                    </div>
                    <div class="rounded border w-100 p-3">
                      <p class="d-flex align-items-center mb-0">
                        <i class="fab fa-cc-mastercard fa-2x text-dark pe-2"></i>Credit
                        Card
                      </p>
                    </div>
                  </div>
                  <div class="d-flex flex-row pb-3">
                    <div class="d-flex align-items-center pe-2">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="radioNoLabel"
                        id="radioNoLabel2v"
                        value=""
                        aria-label="..."
                      />
                    </div>
                    <div class="rounded border w-100 p-3">
                      <p class="d-flex align-items-center mb-0">
                        <i class="fab fa-cc-visa fa-2x fa-lg text-dark pe-2"></i>Debit Card
                      </p>
                    </div>
                  </div>
                  <div class="d-flex flex-row">
                    <div class="d-flex align-items-center pe-2">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="radioNoLabel"
                        id="radioNoLabel3v"
                        value=""
                        aria-label="..."
                      />
                    </div>
                    <div class="rounded border w-100 p-3">
                      <p class="d-flex align-items-center mb-0">
                        <i class="fab fa-cc-paypal fa-2x fa-lg text-dark pe-2"></i>PayPal
                      </p>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-md-6 col-lg-4 col-xl-6">
                <div class="row">
                  <div class="col-12 col-xl-6">
                    <div class="form-outline mb-4 mb-xl-5">
                      <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                        placeholder="John Smith" />
                      <label class="form-label" for="typeName">Name on card</label>
                    </div>

                    <div class="form-outline mb-4 mb-xl-5">
                      <input type="text" id="typeExp" class="form-control form-control-lg" placeholder="MM/YY"
                        size="7" id="exp" minlength="7" maxlength="7" />
                      <label class="form-label" for="typeExp">Expiration</label>
                    </div>
                  </div>
                  <div class="col-12 col-xl-6">
                    <div class="form-outline mb-4 mb-xl-5">
                      <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
                        placeholder="1111 2222 3333 4444" minlength="19" maxlength="19" />
                      <label class="form-label" for="typeText">Card Number</label>
                    </div>

                    <div class="form-outline mb-4 mb-xl-5">
                      <input type="password" id="typeText" class="form-control form-control-lg"
                        placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                      <label class="form-label" for="typeText">Cvv</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-xl-3">
                <div class="d-flex justify-content-between" style="font-weight: 500;">
                  <p class="mb-2">Subtotal</p>
                  <p class="mb-2">₱31,785</p>
                </div>

                <div class="d-flex justify-content-between" style="font-weight: 500;">
                  <p class="mb-0">Shipping</p>
                  <p class="mb-0">₱300</p>
                </div>

                <hr class="my-4">

                <div class="d-flex justify-content-between mb-4" style="font-weight: 500;">
                  <p class="mb-2">Total (tax included)</p>
                  <p class="mb-2">₱32,085</p>
                </div>

                <button type="button" class="btn btn-primary btn-block btn-lg">
                  <div class="d-flex justify-content-between">
                    <span>Checkout</span>
                    <span>₱32,085</span>
                  </div>
                </button>

              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>
</section>
</body>
<style>
    @media (min-width: 1025px) {
  .h-custom {
    height: 100vh !important;
  }
}
</style>
</html>