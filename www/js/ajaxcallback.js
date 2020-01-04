$(document).ready(function(){
    hostname = window.location.hostname;
    path = window.location.pathname;
    protocol = window.location.protocol;
    url = protocol + "//" + hostname + path + "api.php";
    setInterval(function(){
        $.ajax({
          url: url,
          dataType: 'json',
          jsonpCallback: 'callback',
          success: function(result){
            production = result['production'][1]['wNow'];
            gross_consumption = result['consumption'][0]['wNow'];
            net_consumption = result['consumption'][1]['wNow'];
            $("#prod").html(production);
            $("#gross").html(gross_consumption);
            $("#net").html(net_consumption);
            if (net_consumption < 0) {
              $("#panel_net").attr('class', 'panel panel-success');
            } else {
              $("#panel_net").attr('class', 'panel panel-danger');
            }
        }});
    }, 5000);
});
