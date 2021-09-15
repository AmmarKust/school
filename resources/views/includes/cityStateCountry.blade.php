<script type="text/javascript">
	
  states(<?php echo old('state', (null!==(Auth::guard('student')->user())) ? Auth::guard('student')->user()->state : 0); ?>);
      function states(id){
        var country = $('#country').val();
        $.ajax({
          url: "{{route('filter-states')}}?country_id="+country+"&state="+id,
          method: "GET",
        }).done(function(data) {
          $('#dd-states').html(data);
          $('#state').select2(); 
        });
      }
      $(document).on('change','#state',function(){
        cities(0);
      })
      setTimeout(
        function() 
        {
          cities(<?php echo old('city', (null!==(Auth::guard('student')->user())) ? Auth::guard('student')->user()->city : 0); ?>);
        }, 2000);
      

      function cities(id){
        var state = $('form').children('div').find('#state').val();
        $.ajax({
          url: "{{route('filter-cities')}}?state_id="+state+"&city="+id,
          method: "GET",
        }).done(function(data) {
          $('#dd-cities').html(data);
          $('#city').select2();
        });
      }
</script>