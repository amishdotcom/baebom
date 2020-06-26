<?php

if( ! defined( 'NINACODER' ) ) {

    die( "Hacking attempt!" );

}
$maxmemory = (@ini_get( 'memory_limit' ) != '') ? @ini_get( 'memory_limit' ) : $lang['undefined'];
$safemode = (@ini_get( 'safe_mode' ) == 1) ? "<p class=\"text-error\">Safe mode IS <strong>ON!</strong>  We required off, please set <strong>safe mode</strong> to <strong>off</strong></p>" : "<p class=\"text-success\">Safe mode IS <strong>OFF!</strong></p>";

if(is_writable(ROOT_DIR . "/includes/admin.config.php")){
    $admin_file_status = '<p class="text-success">/includes/admin.config.php</strong> is writable.</p>';
}else{
    $admin_file_status = '<p class="text-error">/includes/admin.config.php</strong> is not writable please CHMOD this file to 666.</p>';
}
if(is_writable(ROOT_DIR . "/includes/config.inc.php")){
    $config_file_status = '<p class="text-success">/includes/config.inc.php</strong> is writable.</p>';
}else{
    $config_file_status = '<p class="text-error">/includes/config.inc.php</strong> is not writable please CHMOD this file to 666.</p>';
}
if(is_writable(ROOT_DIR . "/static")){
    $static_status = '<p class="text-success">/static</strong> is writable.</p>';
}else{
    $static_status = '<p class="text-error">/static</strong> is not writable please CHMOD this folder to 777.</p>';
}
if(is_writable(ROOT_DIR . "/cache")){
    $cache_status = '<p class="text-success">/cache</strong> is writable.</p>';
}else{
    $cache_status = '<p class="text-error">/cache</strong> is not writable please CHMOD this folder to 777.</p>';
}
if(is_writable(ROOT_DIR . "/static/artists/")){
    $static_artists_status = '<p class="text-success">/static/artists/</strong> is writable.</p>';
}else{
    $static_artists_status = '<p class="text-error">/static/artists/</strong> is not writable please CHMOD this folder to 777.</p>';
}
if(is_writable(ROOT_DIR . "/static/users/")){
    $static_users_status = '<p class="text-success">/static/users/</strong> is writable.</p>';
}else{
    $static_users_status = '<p class="text-error">/static/users/</strong> is not writable please CHMOD this folder to 777.</p>';
}
if(is_writable(ROOT_DIR . "/static/songs/")){
    $static_songs_status = '<p class="text-success">/static/songs/</strong> is writable.</p>';
}else{
    $static_songs_status = '<p class="text-error">/static/songs/</strong> is not writable please CHMOD this folder to 777.</p>';
}
if(is_writable(ROOT_DIR . "/static/albums/")){
    $static_albums_status = '<p class="text-success">/static/albums/</strong> is writable.</p>';
}else{
    $static_albums_status = '<p class="text-error">/static/albums/</strong> is not writable please CHMOD this folder to 777.</p>';
}

$row = $db->super_query("SELECT COUNT(*) AS count FROM ninacoder_artists");
$total_artists = $row['count'];

$row = $db->super_query("SELECT id FROM ninacoder_lyrics ORDER BY id DESC LIMIT 0,1");
$total_lyrics = $row['id'];

$row = $db->super_query("SELECT COUNT(*) AS count FROM ninacoder_contribute WHERE approve = 0");
$total_submit = $row['count'];

$content .= <<<HTML
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{$config['admin_path']}">Control Panel</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-6 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-music"></i>
              </div>
              <div class="mr-5">{$total_lyrics} Lyrics in database!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="{$config['admin_path']}?do=lyrics">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-6 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-plus"></i>
              </div>
              <div class="mr-5">{$total_submit} Lyrics submitted waiting for approve!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="{$config['admin_path']}?do=submit">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i> Lyrics submitted by visitors in last 15 days</div>
        <div class="card-body">
          <canvas id="myAreaChart" width="100%" height="30"></canvas>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <!-- Example Bar Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-bar-chart"></i> Lyrics submitted by visitors in month</div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-12 my-auto">
                  <canvas id="myBarChart" width="100" height="50"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <!-- Example Pie Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-pie-chart"></i> Downloads Count</div>
            <div class="card-body">
              <canvas id="myPieChart" width="100%" height="100"></canvas>
            </div>
          </div>
        </div>
      </div>

HTML;


$download =  $db->super_query("SELECT * FROM ninacoder_downloads");

//Day submit
$query = $db->query("SELECT COUNT(*) AS count, onCreated FROM ninacoder_contribute WHERE onCreated > '" . date("Y-m-d H:m:s",time() - 15 * 86400) . "' GROUP BY DAY(onCreated)");

$days = array();

$day_submits = array();

while ($row = $db->get_row($query)){

	$days[] =  date("M-d", strtotime($row['onCreated']));

	$day_submits[] =  intval($row['count']);

}

$days = json_encode($days);

$day_submits = json_encode($day_submits);

//Month submit

$query = $db->query("SELECT COUNT(*) AS count, onCreated FROM ninacoder_contribute WHERE onCreated > '" . date("Y-m-d H:m:s",time() - 180 * 86400) . "' GROUP BY MONTH(onCreated)");

$months = array();

$month_submits = array();

while ($row = $db->get_row($query)){

	$months[] =  date("M", strtotime($row['onCreated']));

	$month_submits[] =  intval($row['count']);

}

$months = json_encode($months);

$month_submits = json_encode($month_submits);


$addon_script = <<<HTML
<script>
// Chart.js scripts
// -- Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: {$days},
    datasets: [{
      label: "Submits",
      lineTension: 0.3,
      backgroundColor: "rgba(2,117,216,0.2)",
      borderColor: "rgba(2,117,216,1)",
      pointRadius: 5,
      pointBackgroundColor: "rgba(2,117,216,1)",
      pointBorderColor: "rgba(255,255,255,0.8)",
      pointHoverRadius: 5,
      pointHoverBackgroundColor: "rgba(2,117,216,1)",
      pointHitRadius: 20,
      pointBorderWidth: 2,
      data: {$day_submits},
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          maxTicksLimit: 5
        },
        gridLines: {
          color: "rgba(0, 0, 0, .125)",
        }
      }],
    },
    legend: {
      display: false
    }
  }
});
// -- Bar Chart Example
var ctx = document.getElementById("myBarChart");
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: {$months},
    datasets: [{
      label: "Submits",
      backgroundColor: "rgba(2,117,216,1)",
      borderColor: "rgba(2,117,216,1)",
      data: {$month_submits},
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 6
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          maxTicksLimit: 5
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: false
    }
  }
});
// -- Pie Chart
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["PDF", "Word", "Text"],
    datasets: [{
      data: [{$download['pdf']}, {$download['word']}, {$download['text']}],
      backgroundColor: ['#dc3545', '#007bff', '#ffc107'],
    }],
  },
});
</script>
HTML;



?>