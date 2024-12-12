<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Đăng nhập thanh toán</title>
  <link rel="stylesheet" type="text/css" href="css/style.css" media="all">
  <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
  <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">

  <script src="js/jquery-1.8.1.min.js"></script>
  <script src="js/script.js"></script>
  <script src="js/jquery.magnific-popup.js"></script>
  <script src="js/jquery.fancybox.js"></script>
  <script src="js/jquery.fancybox-media.js"></script>
  <style>
    .vn-pay {
      background-color: hwb(209deg 8% 17%);
      color: #fff;
      display: block;
      margin: 0 auto;
      padding: 8px 0;
      width: 300px;
      border: 1px solid hwb(209deg 8% 17%);
      border-radius: 5px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    #payment-stores fieldset input[type="submit"] {
      height: 33px;
    }
  </style>

</head>

<body data-control="Index">
  <div id="page-top">


    <div class="pagecuston">
      <div class="wrap">
        <ul class="menu-top">
          <!-- <li >
          <a href="/">Trang chủ</a>
        </li>
         <li >
          <a href="/">Hướng dẫn mua hàng</a>
        </li>
         <li >
          <a href="/">Điều khoản sử dụng</a>
        </li> -->
        </ul>

      </div>
    </div>
  </div>
  <!-------end#page-top--->
  <div id="page-all">
    <div id="header">
      <div class="header_top">
        <div class="wrap">
          <div class="logo"> <a href="/"><img src="images/logomt.png" alt="" title="logo" /></a> </div>
          <!-------end#logo--->
          <div class="shopping-check">
            <div class="breadcrumb-top">
              <a href="/login-thanhtoan">Đăng nhập</a>
              <a href="/thongtin">Thông tin khách hàng</a>
              <a href="/checkout" class="active">Thanh toán</a>
            </div>




          </div>
        </div>
        <!-----end#shopping_header--->

      </div>
      <!-----end#header-top--->
      <!--------end#nav-top---->

    </div>
    <!-------end#header--->
    <div id="content">
      <div class="wrap">

        <div class="Login-checkout">

          <div id="payment">

            <h2><span class="fontawesome-lock"></span>Chọn hình thức thanh toán</h2>


            <div class="box productTeaserBox prd-row">
              <script src="JS_stor/tabcontent.js"></script>

              <div class="header-title4">
                <ul class="tabs" data-persist="true">
                  <li>

    <h4 class="lfloat "> <a href="#payment-stores">  Hình thức thanh toán qua ngân hàng</a> </h4>

            </li>
            <li>
     <h4 class="lfloat "> <a href="#payment-at"> Hình thức thanh toán khi nhận hàng </a> </h4>
     </li>
            <li>
               </ul>
              </div>
              <div class="tabcontents">
                <div id="payment-at">
                  <div class="content-payment spen-plus">

                    <h3> <a href="Detainews.html"> Bạn có thể thanh toán bằng tiền mặt cho chúng tôi khi bạn đã nhận được hàng ngay tại cửa hàng nhà bạn </a></h3>

                    <form action="<?= '/thanhtoan' ?>" method="post">

                      <fieldset>
                        <p class="cten">
                          <input type="checkbox" name="" value=""><span> Giao hàng đến cùng địa chỉ</span>   </p>
                          <p><label for="TDN">Địa chỉ: </label>
                          <input type="TDN" id="TDN" name="diachikh" value="" ></p> 
                        <p><input type="submit" name="checkout" value="Xác nhận thanh toán khi nhận hàng (COD)"></p>
                        <p>(*) Tôi đã đồng ý với điều khoản của MTshop.vn </p>

                      </fieldset>

                    </form>
                  </div>

                </div>
                <div id="payment-stores">
                           <div class="content-payment spen-plus">

        <div class="direct">
    <h4> <a href="Detainews.html">Vui lòng chuyển thanh toán tới một trong các tài khoản của chúng tôi dưới đây:  </a></h4>

    </div>

    <div class="bankinh">
					<div class="row-bank">
                    <div class="img-bank">
                    <img src="images/vietinbank.jpg"  alt="" >
                    </div>
                       <div class="text-bank">

                       <p> Ngân hàng       : Vietinbank - Chi nhánh Gia Nghĩa</p>
                           <p>  Tên TK             : NGUYỄN HỒNG ANH  </p>
                               <p> Số TK               : 666688834567</p>
                       </div>


                    </div>
                    <div class="row-bank">
                    <div class="img-bank">
                    <img src="images/Logo-Vietcombank_1.jpg"  alt="" >
                    </div>
                       <div class="text-bank">

                       <p>   Ngân hàng       : Vietcombank Chi nhánh Gia Nghĩa  </p>
                           <p>  Tên TK             : NGUYỄN HỒNG ANH </p>
                               <p> Số TK               : 1037205405 </p>
                       </div>


                    </div>
                    <div class="row-bank">
                   <strong> Lưu ý: </strong>
                    <p>+ Người chuyển tiền cần cung cấp đầy đủ thông tin cá nhân cho Ngân hàng (như họ tên, địa chỉ) để tránh nhầm lẫn trong thanh toán.</p>
                    <p>+ Sau khi chuyển tiền thanh công hãy nhập thông tin Họ Tên , Mã Giao Dịch để chúng tôi kiểm tra thanh toán.</p>
                    </div>

                    </div>
          <form action="<?= '/thanhtoan' ?>" method="post">

			<fieldset>
    <p class="cten">
               	<p><label for="TDN">Tên khách hàng: </label>
				<input type="TDN" id="TDN" name="company" value="" ></p>
                  <p><label for="DC">Địa chỉ: </label>
				<input type="DC" id="DC" name="diachikh" value="" ></p>
                <p><label for="MDD">Mã Giao Dịch: </label>
				<input type="MDD" id="MDD" name="MST" value="" ></p>
               <p><input type="submit" name="checkout" value="Đặt hàng"></p>
    <p>(*) Tôi đã đồng ý với điều khoản của MtShop.vn </p>

			</fieldset>

		</form>

        </div>
            </div>
                <div id="payment-bank">


        <div class="content-payment spen-plus">


    </ul>
        </div>
      </div>
              </div>

            </div>

          </div>

          <div class="CartShop">
            <h1>Thông tin đơn hàng</h1>
            <div class="compare_plan">


              <div class="plans-list">
              <p>Bạn đang có <?php echo array_sum(array_column($cart, 'so_luong_mua')); ?> sản phẩm đang chờ thanh toán</p>
              </div>


              <div class="sho-row">
                <div class="plans-list1">
                  <h3>Sản phẩm</h3>
                </div>
                <div class="plans-list2">
                  <h3>Số lượng</h3>
                </div>
                <div class="plans-list3">
                  <h3>Giá </h3>
                </div>
                <div class="clear-float"></div>
              </div>

              <div class="body-row">

                <?php foreach ($cart as $item) { ?>
                  <div class="plans-list1">
                    <img src="/uploads/<?php echo $item->avatar ?>" alt="" title="" width="60px" height="60" />
                    <h4></h4>
                  </div>
                  <div class="plans-list2"><input type="text" id="soluongmua" name="so_luong_mua" value="<?php echo $item->so_luong_mua ?>" /></div>

                  <div class="plans-list3" id="test" value="<?= $item->price ?>"><?= number_format($item->price) ?> VNĐ</div>
                  <div class="clear-float"></div>
                <?php } ?>
              </div>
              <div class="control-shop">
                <div class="order_now1">Phí vận chuyển</div>
                <div class="order_now2"><?= number_format($up) ?></div>
                <div class="clear-float"></div>
              </div>
              <div class="control-shop">
                <div class="order_now1">Tổng cộng</div>
                <div class="order_now2"><?= number_format($tong + $up) ?>VNĐ</div>
                <div class="clear-float"></div>

                <div class="control-suse">
                  <div class="order_now1">Thành tiền</div>
                  <div class="order_now2"><?= number_format($total + $up) ?>VNĐ</div>
                  <div class="clear-float"></div>
                </div>

                <div class="sale-fo">
                  </form>
                </div>

              </div>

            </div>

          </div>

        </div>

      </div>




    </div>
    <!-----end#content----->
    <div id="footer">
      <div class="wrap">
        <!-------end.footer-top--->
        <div class="copy-footer">
          <b>WEBSITE CỬA HÀNG ĐIỆN THOẠI DI ĐỘNG MTSHOP HỒNG ANH VƯƠNG DŨNG</b>
          <p>Địa chỉ: Tổ 4 , Phường Nghĩa Phú , Thành Phố Gia Nghĩa , Tỉnh Đắk Nông</p>
          <p>Điện thoại: 0337 62 3334 | Email: nguyenanhitnct2225@gmail.com</p>
        </div>
        <!---------end.copy-footer--->
      </div>
    </div>
    <!-------end#footer-top------->
  </div>
  </div>
  <!-------end#page-all--->
  <script>
    const btnCheckout = document.querySelector('input[type="submit"]');

    function paymentOnline(data) {
      data = {
        orderId: (Math.floor(Math.random() * 10000) + 1).toString(),
        amount: <?= $total + $up ?>,
        orderInfo: 'note'
      };

      fetch('http://localhost:3001/payment/vnpay', {
          method: 'POST', // or 'PUT'
          headers: {
            'Content-Type': 'application/json',
          },
          body: JSON.stringify(data),
        })
        .then(response => response.json())
        .then(data => {
          btnCheckout.click();

          window.open(
            data.data,
            '_blank'
          );
          console.log('Success:', data);
        })
        .catch((error) => {
          console.error('Error:', error);
        });

    }
  </script>
</body>

</html>