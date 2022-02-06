
          
 
<style type="text/css">

#titledata {
  width: 100%;
  max-width: 700px;
  margin: 0 auto;
  padding: 0;
  text-align: center;
  position: relative; }

svg {
  width: 100%;
  height: 100%;
}

#jugular{
  stroke-dasharray:497;
 -webkit-animation: dash 3.4s infinite ease forwards;
}
/*Animation is the same for all 3 SVG's*/
@-webkit-keyframes dash{
  from{
    
    stroke-dashoffset:814;
  }
  to {
    stroke-dashoffset:-814;
    
  }
  
}
</style>


<div id="titledata">
   <center><img src="<?= base_url(); ?>boxplate/assets/images/logotobelo.png" width="85"></center>
   <h3>SISTEM INFORMASI RUMAH SAKIT</h3>
   <h4>Tanggal: <?= date('Y-m-d') ?></h4> 
   
  <!--JUGULAR-->
    <br><br>
    <svg version="1.2" height="300" width="600">

      <path  id="jugular"stroke="rgba(0,155,155,1)" fill="none"stroke-width="2"stroke-linejoin="round" d="M0,90L250,90Q257,60 262,87T267,95 270,88 273,92t6,35 7,-60T290,127 297,107s2,-11 10,-10 1,1 8,-10T319,95c6,4 8,-6 10,-17s2,10 9,11h210" /> 
       
         
    </svg>
</div>
  






<style type="text/css">
  @import "https://code.highcharts.com/css/highcharts.css";

.highcharts-pie-series .highcharts-point {
  stroke: #ede;
  stroke-width: 2px;
}

.highcharts-pie-series .highcharts-data-label-connector {
  stroke: silver;
  stroke-dasharray: 2, 2;
  stroke-width: 2px;
}

.highcharts-figure,
.highcharts-data-table table {
  min-width: 320px;
  max-width: 600px;
  margin: 1em auto;
}

.highcharts-data-table table {
  font-family: Verdana, sans-serif;
  border-collapse: collapse;
  border: 1px solid #ebebeb;
  margin: 10px auto;
  text-align: center;
  width: 100%;
  max-width: 500px;
}

.highcharts-data-table caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}

.highcharts-data-table th {
  font-weight: 600;
  padding: 0.5em;
}

.highcharts-data-table td,
.highcharts-data-table th,
.highcharts-data-table caption {
  padding: 0.5em;
}

.highcharts-data-table thead tr,
.highcharts-data-table tr:nth-child(even) {
  background: #f8f8f8;
}

.highcharts-data-table tr:hover {
  background: #f1f7ff;
}
</style>




<div class="row">

  <div class="col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th><b>Obat Terbanyak Diberikan</b></th>
                <th></th>
              </tr>
            </thead>
           
              <tr>
                <td>
                    
                </td>
                <td>
                    
                </td>
              </tr>
            </tbody>
           
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Pasien Aktif</h5>
        <br>
        <script src="../include/includeChart1.js"></script>
        <script src="../include/includeChartExporting.js"></script>
        <script src="../include/includeChartExportData.js"></script>
        <script src="../include/includeChartAccessibility.js"></script>

        <figure class="highcharts-figure">
          <div id="containerpasien"></div>
        </figure>
      </div>
    </div>
  </div>
 

</div>




<script type="text/javascript">
Highcharts.chart('containerpasien', {

  chart: {
    styledMode: true
  },

  title: {
    text: ''
  },

  xAxis: {
    categories: ['Laki-laki', 'Perempuan']
  },

  series: [{
    type: 'pie',
    allowPointSelect: true,
    keys: ['name', 'y', 'selected', 'sliced'],
    data: [
      ['Laki-laki', <?= $psnlaki ?>, false],
      ['Perempuan', <?= $psnper ?>, false]
    ],
    showInLegend: true
  }]
});
</script>

