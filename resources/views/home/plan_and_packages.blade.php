@extends('layouts.welcome')


<body class="plan_and_packages">
<style type="text/css">





 
  .pb-100 {
  padding-bottom: 100px;
  }

.pt-100 {
  padding-top: 100px;
 }



#tabs .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
  color: red;

  
}

#tabs .nav-tabs .nav-link {
  border: 1px solid transparent;
  border-top-left-radius: .25rem;
  border-top-right-radius: .25rem;
  color: red;
  font-size: 20px;
}

</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- Tabs -->
<center>

  <div id="plan_and_packages">
<section id="tabs">
  <div class="container">
     <section class="plan">
    <div class="section-title">
      <h2>Plan and Packages</h2>
    </div>
    <div class="row">
      <div class="col-xs-12 ">
        <nav>
          <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">

            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#quadplay" role="tab" aria-controls="nav-home" aria-selected="true">QUADPLAY</a>

            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#triple-play" role="tab" aria-controls="nav-profile" aria-selected="false">TRIPLEPLAY</a>

            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#double-play" role="tab" aria-controls="nav-contact" aria-selected="false">DOUBLEPLAY</a>
            
          </div>
        </nav>
        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
          
          <div class="tab-pane fade show active" id="quadplay" role="tabpanel" aria-labelledby="nav-home-tab">
            @foreach($quad_play_list as $quadplay)
              <div class="promoBox danger-box warning-ribbon">
<!--                 <aside><p>{{$quadplay -> status}}</p></aside>
 -->                <h4 align="center">{{$quadplay -> package_name}}</h4>
                <h5>{{$quadplay -> information}}</h5>
                <h4>{{$quadplay -> plan_name}}</h4>
                <h6>{{$quadplay -> details}}</h6>
                <center>{{$quadplay -> package_name}}</center>
              </div>
            @endforeach
          </div>
          <div class="tab-pane fade" id="triple-play" role="tabpanel" aria-labelledby="nav-profile-tab">
            @foreach($triple_play_list as $tripleplay)
              <div class="promoBox danger-box warning-ribbon">
<!--                 <aside><p>{{$tripleplay -> status}}</p></aside>
 -->                <h4 align="center">{{$tripleplay -> package_name}}</h4>
                <h5>{{$tripleplay -> information}}</h5>
                <h4>{{$tripleplay -> plan_name}}</h4>
                <h6>{{$tripleplay -> details}}</h6>
                <center>{{$tripleplay -> status}}</p></center>
              </div>
            @endforeach
          </div>
          <div class="tab-pane fade" id="double-play" role="tabpanel" aria-labelledby="nav-contact-tab">
            @foreach($double_play_list as $doubleplay)
              <div class="promoBox danger-box warning-ribbon">
<!--                 <aside><p>{{$doubleplay -> status}}</p></aside>
 -->                <h4 align="center">{{$doubleplay -> package_name}}</h4>
                <h5>{{$doubleplay -> information}}</h5>
                <h4>{{$doubleplay -> plan_name}}</h4>
                <h6>{{$doubleplay -> details}}</h6>
                <center>{{$doubleplay -> status}}</center>
              </div>
            @endforeach

          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</section>
</section>
</div>
</center>
<!-- ./Tabs -->

@section('scripts')
<script type="text/javascript">
  var index = $('#navtop ul').index($('#tabId'));
  alert();
$('#navtop ul').tabs('select', index);

</script>

@stop