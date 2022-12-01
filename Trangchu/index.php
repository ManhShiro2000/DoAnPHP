<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <!--
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body data-spy="scroll" data-target="#navbarSupportedContent">
<header>
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Tinyshop</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link" href="#exchange">Quy đổi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#rates">Tỉ Giá</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#service">Sản phầm</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#signup">Lịch sử</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#discover">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#discover">Chi nhánh</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contactus">Liên hệ</a>
        </li>
      </ul>
        <button class="btn btn-success text-dark" type="submit">Đăng nhập</button>
        <button class="btn btn-success text-dark" type="submit">Đăng ký</button>
    </div>
  </div>
</nav>
<div class="mid">
	<video autoplay muted loop>
		<source class="embed-responsive" src="img/1.mp4" type="video/mp4">
	</video>
	<div class="hero text-center">
		<h2 class="text-light display-4 font-weight-bold">Tinyshop là một website chuyên cung cấp dịch vụ mua bán ngoại tệ</h2>
		<p class="text-light mx-auto">Chúng tôi có thể giúp bạn Gửi, Nhận, Trao đổi, Thanh toán mua sắm hoặc chấp nhận thanh toán trực tuyến một cách dễ dàng trên tài khoản cá nhân của bạn.</p>
		<a class="text-dark" href="#">Bắt đầu</a>
	</div>
</div>
</header>

<section class="bg-info" id="exchange">
  <div class="row align-items-center container pt-5 mx-auto">
    <div class="text col-lg-12 col-md-12 col-12  pb-5">
      <h2 style="text-align: center;">Quy đổi tiền tệ </h2>
      <h6 style="text-align: center;">Không giới hạn quy đổi</h6>
      <form class="align-items-center container my-5 mx-auto w-50" action="index.php" method="get">
        <div class="form-group">
          <label for="exampleFormControlInput1">Lượng VNĐ muốn quy đổi:</label>
          <input type="text" class="form-control" name="input" require>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Quy đổi sang tiền tệ:</label>
          <select class="form-control" id="exampleFormControlSelect1" name="dropdown">
            <option value="rmb">RMB</option>
            <option value="usd">USD</option>
            <option value="gbp">EURO</option>
          </select>
        </div>
        
        <div class="form-group">
          <input style="padding: 5px; border-radius: 5px;" class="btn btn-success" type="submit" name="sbmt" value="Convert">
        </div>
        <div class="form-group">
          
<?php 
if(isset($_GET['sbmt']))
{
  $cc_input = $_GET['input'];
  $cc_dropdown = $_GET['dropdown'];
  if($cc_input!=null){
  if($cc_dropdown == 'rmb')
  {
    $output = $cc_input * 0.00029;
    echo "<h1>" . $output . " RMB" . "</h1>";
  }else if($cc_dropdown == 'usd')
  {
    $output = $cc_input * 0.000041;
    echo "<h1>" . $output . " USD" . "</h1>";
  }else if($cc_dropdown == 'gbp')
  {
    $output = $cc_input * 0.00864463;
    echo "<h1>" . $output . " Euro" . "</h1>";
  }}
}

?>
        </div>
      </form>
  </div>
</section>

<section id="rates" class="rates py-5">
<div class="col mx-auto align-items-center my-5"> 
  <div class="heading text-center pt-5">
    <h2 class="font-weight-bold pb-5 text-light">Tỉ giá của tinyshop
</h2>
  </div>
  <div class="row mx-auto justify-content-center align-items-center text-center container">
    <div class="one col-lg-3 col-md-3 col-12 w-25 m-2">
      <img class="img-fluid w-75" src="img/5.jpg">
      <h5 class="font-weight-bold pt-4">USD</h5>
      <p>0.00029</p>
    </div>
    <div class="one col-lg-3 col-md-3 col-12 w-25 m-2">
      <img class="img-fluid w-75" src="img/6.jpg">
      <h5 class="font-weight-bold pt-4">Euro</h5>
      <p>0.00864463</p>
    </div>
    <div class="one col-lg-3 col-md-3 col-12 w-25 m-2">
      <img class="img-fluid w-75" src="img/7.jpg">
      <h5 class="font-weight-bold pt-4">RMB</h5>
      <p>0.00029</p>
    </div>
  </div>
</div>
</section>

<section id="discover" class="discovery py-5">
  <div class="row align-items-center container my-5 mx-auto">
    <div class="img col-lg-6 col-md-6 col-12 w-50 pt-2 pb-5">
      <img class="img-fluid" src="img/FAQ.svg">
    </div>
    <div class="text col-lg-6 col-md-6 col-12 w-50 pt-2 pb-5">
      <h2>Câu hỏi cho chúng tôi</h2>
      <h6>Trong phần này, bạn có thể biết thông tin chi tiết về hệ thống Tinyshop, nếu sau khi đọc tài liệu này, bạn vẫn còn bất kỳ vấn đề hoặc câu hỏi nào về hệ thống, vui lòng liên hệ với chúng tôi.</h6>
      
      <h5 onclick="myFunction1()" class="bg-info">Tinyshop là gì? </h5>
      

      <p id="myfirstDIV" style="display: none;" class="bg-warning">Tinyshop là một dịch vụ trao đổi tiền điện tử đơn giản và nhanh chóng dành cho dịch vụ tự do. Bạn chỉ cần đăng ký và xác minh. Chúng tôi sẽ nhanh chóng chuyển đổi giao dịch cho bạn mà không tính thêm bất kỳ khoản phí ẩn hoặc phí nào.</p>

      <h5 onclick="myFunction2()" class="bg-info">Sẽ mất bao lâu để xử lý đơn đặt? </h5>

      <p id="mysecondDIV" style="display: none;" class="bg-warning">Thông thường, chúng tôi mất 5 phút và tối đa là 20 phút để hoàn thành đơn đặt hàng. Nếu có bất kỳ trường hợp khẩn cấp nào, bạn có thể liên hệ với chúng tôi qua trò chuyện trực tiếp, email, hộp thư đến trang người hâm mộ FB, WhatsApp, Skype và imo, bạn có thể tìm thấy chi tiết liên hệ của chúng tôi tại đây.</p>

      <h5 onclick="myFunction3()" class="bg-info">Các tài liệu cần thiết để xác minh là gì? </h5>

      <p id="mythirdDIV" style="display: none;" class="bg-warning">Hộ chiếu quốc tế, Giấy phép lái xe hoặc Chứng minh nhân dân (chúng tôi chỉ chấp nhận thẻ căn cước địa phương từ các quốc gia thuộc khu vực)</p>
      
    </div>
  </div>
</section>



<footer class="page-footer font-small-stylish-color-dark pt-4 text-light" id="contactus">
  <!-- Grid container -->
  <div class="container text-center text-md-left">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-md-4 mx-auto">
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Shingu</h5>
         <p>+676767676767 (Whatsapp)</p>
         <p>Shitiny (Skype)</p> 
         <p>support@tinyshop.com</p> 
        
      </div>
      <hr class="clearfix w-100 d-md-none">
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-2 mx-auto">
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Link hữu ích</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Giới thiệu</a>
          </li>
          <li>
            <a href="#!">Blog</a>
          </li>
          <li>
            <a href="#!">Chi nhánh</a>
          </li>
          <li>
            <a href="#!">Lời chứng thực</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->
      <hr class="clearfix w-100 d-md-none">
      <!--Grid column-->
      <div class="col-md-2 mx-auto">
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Hỗ trợ</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Hỗ trợ người dùng</a>
          </li>
          <li>
            <a href="#!">Tin tức</a>
          </li>
          <li>
            <a href="#!">Điều khoản và điều kiện</a>
          </li>
          <li>
            <a href="#!">Chính sách bảo mật</a>
          </li>
        </ul>
      </div>

      <hr class="clearfix w-100 d-md-none">
      <!--Grid column-->
      <div class="col-md-2 mx-auto">
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Follow Us</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Tinyshop</a>
          </li>
          <li>
            <a href="#!">Tinyshop</a>
          </li>
          <li>
            <a href="#!">Tinyshop</a>
          </li>
          <li>
            <a href="#!">Tinyshop</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <hr>
  <ul class="list-unstyled list-inline text-center py-2">
    <li class="list-inline-item">
      <h5 class="mb-1">Đăng ký miễn phí</h5>
    </li>
    <li class="list-inline-item">
      <a href="#!" class="btn btn-danger btn-rounded">Đăng ký</a>
    </li>
  </ul>
  <hr>
  <ul class="list-unstyled list-inline text-center">
    <li class="list-inline-item">
      <a class="btn-floating btn-fb mx-1">
        <i class="fab fa-facebook-f"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-tw mx-1">
        <i class="fab fa-twitter"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-gplus mx-1">
        <i class="fab fa-google-plus-g"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-li mx-1">
        <i class="fab fa-linkedin-in"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-dribbble mx-1">
        <i class="fab fa-dribbble"> </i>
      </a>
    </li>
  </ul>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3"> &copy; 2022 Copyright:
    <a href="#">tinyshop@gmail.com</a>
  </div>
  <!-- Copyright -->
</footer>


<script>
function myFunction1() {
  var x = document.getElementById("myfirstDIV");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>


<script>
function myFunction2() {
  var x = document.getElementById("mysecondDIV");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>


<script>
function myFunction3() {
  var x = document.getElementById("mythirdDIV");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>