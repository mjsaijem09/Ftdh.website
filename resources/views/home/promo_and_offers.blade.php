
<style type="text/css">
* { font-family: Helvetica, Arial, sans-serif; }

section.bundle{
  margin: 5% 5% 5% 5%;
  padding: 5% 5% 5% 5%;
}

.section-title h4 {
  font-size: 14px;
  font-weight: 500;
  color: #777;
}
.section-title h2 {
  font-size: 32px;
  text-transform: capitalize;
  margin: 15px 0;
  display: inline-block;
  position: relative;
  font-weight: 700;
  padding-bottom: 15px;
  letter-spacing: 1px;
  text-transform: uppercase;
}
.section-title p {
  font-weight: 300;
  font-size: 14px;
}
.black-bg .section-title h2, .black-bg .section-title h4, .black-bg .section-title p {
  color:#fff
}
.section-title h2:before {
  position: absolute;
  content: "";
  width: 150px;
  height: 1px;
  background-color: #777;
  bottom: 0;
  left: 50%;
  margin-left: -75px;
}
.section-title h2:after {
  position: absolute;
  content: ""; 
  width: 80px;
  height: 3px;
  background-color: red;
  border: darkblue;
  bottom: -1px;
  left: 50%;
  margin-left: -40px;
}
.section-title {
  margin-bottom: 70px;
}

.promoBox {
    display: inline-block;
    position: relative;
    margin: 5px 5px 5px 5px;
    padding: 10px;
    width: 300px;
    border: 2px solid #ddd;
    -webkit-border-radius: 8px;
            border-radius: 8px;
    overflow: hidden;

    background: #ffffff;
    background: -moz-linear-gradient(-45deg, #ffffff 0%, #f1f1f1 50%, #e1e1e1 51%, #f6f6f6 100%);
    background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,#ffffff), color-stop(50%,#f1f1f1), color-stop(51%,#e1e1e1), color-stop(100%,#f6f6f6));
    background: -webkit-linear-gradient(-45deg, #ffffff 0%,#f1f1f1 50%,#e1e1e1 51%,#f6f6f6 100%);
    background: -o-linear-gradient(-45deg, #ffffff 0%,#f1f1f1 50%,#e1e1e1 51%,#f6f6f6 100%);
    background: -ms-linear-gradient(-45deg, #ffffff 0%,#f1f1f1 50%,#e1e1e1 51%,#f6f6f6 100%);
    background: linear-gradient(135deg, #ffffff 0%,#f1f1f1 50%,#e1e1e1 51%,#f6f6f6 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#f6f6f6',GradientType=1 );

    -webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.2);
            box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.2);
}

.promoBox aside {
    position: absolute;
    width: 230px;
    right: 0;
    margin: 0 -65px 0 0;
    -webkit-transform: rotate(35deg);
     -khtml-transform: rotate(35deg);
       -moz-transform: rotate(35deg);
        -ms-transform: rotate(35deg);
            transform: rotate(35deg);
    -webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.2);
            box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.2);
    text-align: center;
    text-transform: uppercase;
    font-size: 10px;

    
    color: #fff;
    background: #4f85bb;
    background: -moz-linear-gradient(-45deg, #4f85bb 0%, #4f85bb 100%);
    background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,#4f85bb), color-stop(100%,#4f85bb));
    background: -webkit-linear-gradient(-45deg, #4f85bb 0%,#4f85bb 100%);
    background: -o-linear-gradient(-45deg, #4f85bb 0%,#4f85bb 100%);
    background: -ms-linear-gradient(-45deg, #4f85bb 0%,#4f85bb 100%);
    background: linear-gradient(135deg, #4f85bb 0%,#4f85bb 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4f85bb', endColorstr='#4f85bb',GradientType=1 );

}

.promoBox aside p { padding: 10px 80px 10px 80px; margin: 0; }
.promoBox h4 { 
    font-size: 25px; 
    margin: 35px 35px 35px 35px;
    padding: 0 35px 10px 0; 
    line-height: 25px; 
    border-bottom: 1px solid #ddd;

}
.promoBox p { font-size: 12px; }

/* COLOR: Box & Text
\* --------------------------------- */
.promoBox.info-box {
    background: #e0f3fa;
    background: -moz-linear-gradient(-45deg, #e0f3fa 0%, #d8f0fc 50%, #b8e2f6 51%, #b6dffd 100%);
    background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,#e0f3fa), color-stop(50%,#d8f0fc), color-stop(51%,#b8e2f6), color-stop(100%,#b6dffd));
    background: -webkit-linear-gradient(-45deg, #e0f3fa 0%,#d8f0fc 50%,#b8e2f6 51%,#b6dffd 100%);
    background: -o-linear-gradient(-45deg, #e0f3fa 0%,#d8f0fc 50%,#b8e2f6 51%,#b6dffd 100%);
    background: -ms-linear-gradient(-45deg, #e0f3fa 0%,#d8f0fc 50%,#b8e2f6 51%,#b6dffd 100%);
    background: linear-gradient(135deg, #e0f3fa 0%,#d8f0fc 50%,#b8e2f6 51%,#b6dffd 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e0f3fa', endColorstr='#b6dffd',GradientType=1 );
    border-color: #b6e1f6;

}
.promoBox.info-box h4 { color: #225b9c; border-color: #8dc2dd; }

.promoBox.warning-box {
    background: #fceabb;
    background: -moz-linear-gradient(-45deg, #fceabb 0%, #fccd4d 50%, #f8b500 51%, #fbdf93 100%);
    background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,#fceabb), color-stop(50%,#fccd4d), color-stop(51%,#f8b500), color-stop(100%,#fbdf93));
    background: -webkit-linear-gradient(-45deg, #fceabb 0%,#fccd4d 50%,#f8b500 51%,#fbdf93 100%);
    background: -o-linear-gradient(-45deg, #fceabb 0%,#fccd4d 50%,#f8b500 51%,#fbdf93 100%);
    background: -ms-linear-gradient(-45deg, #fceabb 0%,#fccd4d 50%,#f8b500 51%,#fbdf93 100%);
    background: linear-gradient(135deg, #fceabb 0%,#fccd4d 50%,#f8b500 51%,#fbdf93 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fceabb', endColorstr='#fbdf93',GradientType=1 );
    border-color: #fccf5a;
    
}
.promoBox.warning-box h4 { color: #775600; border-color: #9e8135; }

.promoBox.danger-box {
    background: #f85032;
    background: -moz-linear-gradient(-45deg, #f85032 0%, #f16f5c 50%, #f6290c 51%, #f02f17 71%, #e73827 100%);
    background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,#f85032), color-stop(50%,#f16f5c), color-stop(51%,#f6290c), color-stop(71%,#f02f17), color-stop(100%,#e73827));
    background: -webkit-linear-gradient(-45deg, #f85032 0%,#f16f5c 50%,#f6290c 51%,#f02f17 71%,#e73827 100%);
    background: -o-linear-gradient(-45deg, #f85032 0%,#f16f5c 50%,#f6290c 51%,#f02f17 71%,#e73827 100%);
    background: -ms-linear-gradient(-45deg, #f85032 0%,#f16f5c 50%,#f6290c 51%,#f02f17 71%,#e73827 100%);
    background: linear-gradient(135deg, #f85032 0%,#f16f5c 50%,#f6290c 51%,#f02f17 71%,#e73827 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f85032', endColorstr='#e73827',GradientType=1 );
    border-color: #ff433e;
    color: #fff;
}
.promoBox.danger-box h4 { color: #fff; border-color: #ff706d; }

.promoBox.success-box {
    background: #9dd53a;
    background: -moz-linear-gradient(-45deg, #9dd53a 0%, #a1d54f 50%, #80c217 51%, #7cbc0a 100%);
    background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,#9dd53a), color-stop(50%,#a1d54f), color-stop(51%,#80c217), color-stop(100%,#7cbc0a));
    background: -webkit-linear-gradient(-45deg, #9dd53a 0%,#a1d54f 50%,#80c217 51%,#7cbc0a 100%);
    background: -o-linear-gradient(-45deg, #9dd53a 0%,#a1d54f 50%,#80c217 51%,#7cbc0a 100%);
    background: -ms-linear-gradient(-45deg, #9dd53a 0%,#a1d54f 50%,#80c217 51%,#7cbc0a 100%);
    background: linear-gradient(135deg, #9dd53a 0%,#a1d54f 50%,#80c217 51%,#7cbc0a 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#9dd53a', endColorstr='#7cbc0a',GradientType=1 );
    border-color: #9dd53a;
    color: #fff;
}
.promoBox.success-box h4 { color: #4d690b; border-color: #ccfc5a; }

/* COLOR: Ribbon
\* --------------------------------- */
.promoBox.info-ribbon aside {
    background: #1e5799;
    background: -moz-linear-gradient(top, #1e5799 0%, #2989d8 50%, #207cca 51%, #7db9e8 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#1e5799), color-stop(50%,#2989d8), color-stop(51%,#207cca), color-stop(100%,#7db9e8));
    background: -webkit-linear-gradient(top, #1e5799 0%,#2989d8 50%,#207cca 51%,#7db9e8 100%);
    background: -o-linear-gradient(top, #1e5799 0%,#2989d8 50%,#207cca 51%,#7db9e8 100%);
    background: -ms-linear-gradient(top, #1e5799 0%,#2989d8 50%,#207cca 51%,#7db9e8 100%);
    background: linear-gradient(to bottom, #1e5799 0%,#2989d8 50%,#207cca 51%,#7db9e8 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e5799', endColorstr='#7db9e8',GradientType=0 );
}

.promoBox.warning-ribbon aside {
    background: #f9c667;
    background: -moz-linear-gradient(-45deg, #f9c667 0%, #f79621 100%);
    background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,#f9c667), color-stop(100%,#f79621));
    background: -webkit-linear-gradient(-45deg, #f9c667 0%,#f79621 100%);
    background: -o-linear-gradient(-45deg, #f9c667 0%,#f79621 100%);
    background: -ms-linear-gradient(-45deg, #f9c667 0%,#f79621 100%);
    background: linear-gradient(135deg, #f9c667 0%,#f79621 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f9c667', endColorstr='#f79621',GradientType=1 );
}

.promoBox.danger-ribbon aside {
    background: #ff3019;
    background: -moz-linear-gradient(45deg, #ff3019 0%, #cf0404 100%);
    background: -webkit-gradient(linear, left bottom, right top, color-stop(0%,#ff3019), color-stop(100%,#cf0404));
    background: -webkit-linear-gradient(45deg, #ff3019 0%,#cf0404 100%);
    background: -o-linear-gradient(45deg, #ff3019 0%,#cf0404 100%);
    background: -ms-linear-gradient(45deg, #ff3019 0%,#cf0404 100%);
    background: linear-gradient(45deg, #ff3019 0%,#cf0404 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff3019', endColorstr='#cf0404',GradientType=1 );
}

.promoBox.success-ribbon aside {
    background: #a9db80;
    background: -moz-linear-gradient(-45deg, #a9db80 0%, #96c56f 100%);
    background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,#a9db80), color-stop(100%,#96c56f));
    background: -webkit-linear-gradient(-45deg, #a9db80 0%,#96c56f 100%);
    background: -o-linear-gradient(-45deg, #a9db80 0%,#96c56f 100%);
    background: -ms-linear-gradient(-45deg, #a9db80 0%,#96c56f 100%);
    background: linear-gradient(135deg, #a9db80 0%,#96c56f 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a9db80', endColorstr='#96c56f',GradientType=1 );
}

img {
    width: 70%;
    height: 70%;
    margin: 10px 10px 10px 10px;

}

h5 {
    font-weight: bold;
    font-size: 20px;
    font-family: Helvetica, Arial, sans-serif;
}


</style>
<section class="bundle">
<center>
<div class="promo_and_offers  pt-100 pb-100" id="promo">

<div class="container">
    <div class="row">
        <div class="col-xl-12 mx-auto text-center">
          <div class="section-title">
            <h2>Promo and Offers</h2>
          </div>
        </div>
        <center>
        @foreach($promo_and_offers as $bundle)
        <div class="promoBox info-box info-ribbon">
            <aside><p>{{$bundle -> status}}</p></aside>
            <br>
            <img src="assets/sites/images/Promo/{{$bundle->filename}}">
            <h5>{{$bundle -> promo}}</h5>
            <center><a class="btn btn-danger" href="promo_and_offers">Avail Now!</a></center>
        </div>
        @endforeach
      </center>
    </div>
</div>
    <div class="promo_and_offers" style="margin-top: 45%">&nbsp;</div>
    <hr>
</div>
</center>
</section>