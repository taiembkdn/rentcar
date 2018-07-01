<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/car/inc/header.php'?>
      <section class="section-lg-top-100">
        <!-- Car Rental Search-->
        <div class="box box-lg section-relative shadow-drop-md text-left">
          <div class="box-lg-header bg-gray-darker context-dark section-50 section-md-75">
            <div class="shell">
              <h3>Tìm kiếm xe cho thuê</h3>
<?php

  /* server timezone */
  $address_car = "";
  $address_from = "";
  if(isset($_POST['submit'])){
    $address_car  = $_POST['address-car'];
    $pickup_date  = $_POST['pickup-date'];
    $pickup_drop  = $_POST['pickup-drop'];
    $rent_time    = $_POST['rent-time'];
    $rent_return  = $_POST['return-time'];
    $address_to   = $_POST['address-to'];
      $url = "/cat.php?adcar={$address_car}&adreturn={$address_to}&pickdate={$pickup_date}&pickdrop={$pickup_drop}&renttime={$rent_time}&rentreturn={$rent_return}";
      header("location:{$url}");
  }
?>
            </div>
          </div>
          <div class="box-lg-body section-50 section-md-90 bg-alabaster">
            <div class="shell">
              <!-- RD Mailform-->
              <form action="" method="post">
                <div class="range range-xs-center">
                  <div class="cell-sm-11 cell-md-4">
                    <div class="form-group form-group-select-outside">
                      <!--Select 2-->
                      <label name="address-car" class="form-custom-label form-custom-label-outside hehe">Địa điểm thuê</label>
                      <select name="address-car" data-placeholder="Chọn địa điểm thuê" required style="background: url('/templates/car/images/clock.png') no-repeat left center;background-size: 100px 100px">
                        <option value="">&nbsp;</option>
                        <option value="Quảng Ngãi">Quảng Ngãi </option>
                        <option value="Đà Nẵng">Đà Nẵng</option>
                      </select>
                    </div>
                    <div class="form-group form-group-select-outside offset-top-35 offset-sm-top-18">
                      <!--Select 2-->
                      <label class="form-custom-label form-custom-label-outside hehe">Địa điểm trả</label>
                      <select name="address-to" data-placeholder="Chọn địa điểm trả" required class="form-control select-filter">
                        <option value="">&nbsp;</option>
                        <option value="Quảng Ngãi">Quảng Ngãi </option>
                        <option value="Đà Nẵng">Đà Nẵng</option>
                      </select>
                    </div>
                  </div>
                  <div class="cell-xs-6 cell-sm-6 cell-md-4 offset-top-35 offset-md-top-0">
                    <!-- BootstrapDateTimePicker-->
                    <div class="form-group form-group-icon">
                      <label for="home-pickup-date" class="form-label form-label-outside hehe">Ngày đặt:</label>
                      <div class="form-control-wrap">
                        <input id="home-pickup-date" type="text" name="pickup-date" data-time-picker="date" placeholder="Chọn ngày thuê" required class="form-control">
                        <span class="icon icon-xs fa fa-angle-down text-gray-dark"></span>
                      </div>
                    </div>
                    <!-- BootstrapDateTimePicker-->
                    <div class="form-group form-group-icon offset-top-35 offset-sm-top-18">
                      <label for="home-pickup-drop" class="form-label form-label-outside hehe">Ngày trả</label>
                      <div class="form-control-wrap">
                        <input id="home-pickup-drop" placeholder="Chọn ngày trả" type="text" name="pickup-drop" data-time-picker="date" required class="form-control">
                        <span class="icon icon-xs fa fa-angle-down text-gray-dark"></span>
                      </div>
                    </div>
                    <div class="form-group offset-top-35 offset-sm-top-65">
                      <div class="form-group">
                      </div>
                    </div>
                  </div>
                  <div class="cell-lg-1 offset-top-0 veil reveal-lg-inline-block">
                    <label for="home-pickup-date" class="label-inverse-lg-none icon icon-img icon-circle icon-default offset-top-40 veil reveal-sm-inline-block hehe">
                      <img src="/templates/car/images/icon-01-23x20.png" width="23" height="20" alt="" class="img-responsive center-block">
                    </label>
                    <label for="home-pickup-drop" class="label-inverse-lg-none icon icon-img icon-circle icon-default offset-top-35 veil reveal-sm-inline-block hehe">
                      <img src="/templates/car/images/icon-01-23x20.png" width="23" height="20" alt="" class="img-responsive center-block">
                    </label>
                  </div>
                  <div class="cell-xs-6 cell-sm-5 cell-md-4 cell-lg-3 offset-top-35 offset-md-top-0">
                      <div class="form-group product-number">
                        <label class="form-custom-label form-custom-label-outside hehe">Giờ thuê:</label>
                        <input type="number" name='rent-time' data-zeros="true" placeholder="Chọn giờ thuê" value="" min="1" max="24" data-constraints="@Numeric @Required" class="form-control">
                      </div>
                      <div class="form-group product-number offset-top-30 offset-sm-top-30">
                        
                      </div>
                      <div class="offset-top-5 offset-sm-top-0 offset-inverse-sm-top-10">
                        <div class="form-group product-number">
                          <label class="form-custom-label form-custom-label-outside hehe">Giờ trả:</label>
                          <input type="number" name='return-time' data-zeros="true" value="" placeholder="Chọn giờ thuê" min="1" max="24" data-constraints="@Numeric @Required" class="form-control">
                        </div>
                        <div class="form-group product-number offset-top-14 offset-sm-top-24">
                          
                        </div>
                      </div>
                    </div>

                  <button type="submit" name="submit" class="btn btn-primary offset-top-20 offset-md-top-45 hehe" style="padding: 12px 17px">Tìm</button>
              </div>
              </form>
            </div>
          </div>
        </div>
      </section>
<script type="text/javascript">
  $('#time').clockInput({
    // 12 or 24 hour
    twelvehour: true,
});
</script>
      <!-- Page Footer-->
  <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/car/inc/footer.php'?>
