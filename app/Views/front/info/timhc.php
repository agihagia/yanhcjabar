<style type="text/css">
    .footer {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
    }
</style>
<?= $this->extend('front/layout/main') ?>
<?= $this->section('mainbg') ?>
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs" data-aos="fade-in">
    <div class="container">
    </div>
</div><!-- End Breadcrumbs -->

<?= $this->endSection('mainbg') ?>
<?= $this->section('isi') ?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<section id="tim" class="tim">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>TIM YAN HC JABAR</h2>
        </div>
        <div class="row justify-content-center align-items-left">
        <div class="col-lg-6 col-md-6 footer-contact">
        <div id="chart_div" style="height: 100%; width: 100%; align: left"></div>
        </div>
        </div>

    </div>
</section>

<script type="text/javascript">
      google.charts.load('current', {packages:["orgchart"]});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Name');
        data.addColumn('string', 'Manager');
        data.addColumn('string', 'ToolTip');

        // For each orgchart box, provide the name, manager, and tooltip to show.
        data.addRows([
          [{'v':'IIN', 'f':'IIN<div style="color:red; font-style:arial; font-size:70%">PLT VP REG JAMALI</div>'},
           '', 'IIN INDRIYANI FITRIA - PLT VP PELAYANAN HC REGIONAL JAMALI'],
          [{'v':'ANNE', 'f':'ANNE<div style="color:red; font-style:arial; font-size:70%">MANAGER JABAR</div>'},
           'IIN', 'ANNE SETIYANI - MANAGER YAN HC JABAR'],
          [{'v':'AGI', 'f':'AGI<div style="color:red; font-style:arial; font-size:70%">PLT ASMAN BANDUNG</div>'},
           'ANNE', 'AGI ADITYA - PLT ASMAN YAN HC BANDUNG'],
          ['AJENG', 'AGI', 'AJENG TRIVANI'],
          ['DESTI', 'AGI', ' DESTI ARDELA PUTRI'],
          ['BRAMIANTO', 'AGI', 'BRAMIANTO RESA ADI'],
          ['DETI', 'AGI', 'DETI NURWULANDARI'],
          ['DEWI', 'AGI', 'DEWI SINTAWATI'],
        ]);

        // Create the chart.
        var chart = new google.visualization.OrgChart(document.getElementById('chart_div'));
        // Draw the chart, setting the allowHtml option to true for the tooltips.
        chart.draw(data, {allowHtml:true, allowCollapse:true, size:'medium'});
      }
   </script>
<?= $this->endSection('isi') ?>
