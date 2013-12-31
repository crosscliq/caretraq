

<?php //echo \Dsc\Debug::dump( $this->app->hive(), false ); ?>

 <div class="bottom-nav footer"> 2013 &copy; CareTraq </div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="./dashboard/js/jquery.js"></script> 
<script src="./dashboard/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="./dashboard/js/smooth-sliding-menu.js"></script> 
<script class="include" type="text/javascript" src="./dashboard/javascript/jquery191.min.js"></script> 
<script class="include" type="text/javascript" src="./dashboard/javascript/jquery.jqplot.min.js"></script> 
<script src="./dashboard/assets/sparkline/jquery.sparkline.js" type="text/javascript"></script>
<script src="./dashboard/assets/sparkline/jquery.customSelect.min.js" ></script>
<script src="./dashboard/assets/sparkline/sparkline-chart.js"></script>
<script src="./dashboard/assets/sparkline/easy-pie-chart.js"></script>
<!-- maps --> 
<script src="./dashboard/js/jquery-jvectormap-1.2.2.min.js"></script>
<script src="./dashboard/js/jquery-jvectormap-us-aea-en.js"></script>
<script src="./dashboard/js/gdp-data.js"></script>
<script type="text/javascript">
$(function(){
  $('#world-map-gdp').vectorMap({
    map: 'us_aea_en',
    series: {
      regions: [{
        values: gdpData,
        scale: ['#290933', '#fadab8'],
        normalizeFunction: 'polynomial'
      }]
    },
    onLabelShow: function(e, el, code){
      el.html(el.html()+' (GDP - '+gdpData[code]+')');
    },
    onMarkerOver: function(e, code){
            e.preventDefault();
          },
           onMarkerOut: function(e, code){
             e.preventDefault();
           },
           onMarkerClick: function(e, code){
            e.preventDefault();
          },
           onMarkerSelected: function(e, code){
            e.preventDefault();
          },
          onMarkerLabelShow: function(e, code){
            e.preventDefault();
          },
          onViewportChange: function(e, code){
            e.preventDefault();
          }
  });

  
});

//adding marker with push
   var mapChannel = pusher.subscribe('trafficmap');
    mapChannel.bind('addTraffic', function(data) {
     
      var mapObject = $('#world-map-gdp').vectorMap('get', 'mapObject');

       mapObject.addMarker(data.name, { latLng: [data.lat, data.lng], name: data.name}  );
   
    });

    mapChannel.bind('changeColor', function(data) {
    
    $('[data-index=' + data.name + ']').attr('fill',data.fill);

    console.log('change color of ' + data.name + ' to: ' + data.fill );
  });





</script>




</script>
<!-- end of maps --> 
<!--switcher html start-->

<!--switcher html end--> 

<script src="./dash/assets/switcher/moderziner.custom.js"></script>

<link rel="alternate stylesheet" type="text/css" href="./dash/assets/switcher/a.css" title="a" media="all" />

<!--NODE TREE--> 
<script src="./arbor/arbor.js"></script>
<script src="./arbor/arbor-tween.js"></script>
<script src="./arbor/arbor-graphics.js"></script>
<script src="./arbor/main.js"></script>
<script src="./dsc/js/common.js"></script>
