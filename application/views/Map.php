<style>
#map {
    width: 100%;
    height: 450px;
    margin-bottom: 20px;
}

#chartdiv {
    width: 100%;
    height: 200px;
}
</style>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
    integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
    crossorigin="" />
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
    integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
    crossorigin=""></script>

<section class="page-header">
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-md-6" style="color: white">Tahun</label>
                    <select class="form-control" name="data_format" id="data_format">
                        <option value="">Pilih Tahun</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="col-md-6" style="color: white">Bulan</label>
                    <select class="form-control" name="data_format" id="data_format">
                        <option value="">Pilih Bulan</option>
                        <option value="januari">Januari</option>
                        <option value="februari">Februari</option>
                        <option value="maret">Maret</option>
                        <option value="april">April</option>
                        <option value="mei">Mei</option>
                        <option value="juni">Juni</option>
                        <option value="juli">Juli</option>
                        <option value="agustus">Agustus</option>
                        <option value="september">September</option>
                        <option value="oktober">Oktober</option>
                        <option value="november">November</option>
                        <option value="desember">Desember</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container-fluid" style="margin-top: 20px;">
    <div class="row">
        <div class="col-md-7">
            <div id="map"></div>
        </div>
        <div class="col-md-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-warning">
                        <div class="panel-heading">Informasi Tabular</div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama Organisasi</th>
                                    <th>Kegiatan</th>
                                    <th>Nilai Anggaran</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Dinas Pekerjaan Umum Dan Perumahan</td>
                                    <td>Pembangunan Jalan</td>
                                    <td>1504505000.00</td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-warning">
                        <div class="panel-heading">Informasi Grafik</div>
                        <br>
                        <div id="chartdiv"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/apps/map/main.js"></script>
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>

<!-- Chart code -->
<script>
// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

var chart = am4core.create("chartdiv", am4charts.PieChart3D);
chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

chart.legend = new am4charts.Legend();

chart.data = [{
        country: "Target",
        litres: 501.9
    },
    {
        country: "Realisasi",
        litres: 301.9
    }
];

var series = chart.series.push(new am4charts.PieSeries3D());
series.dataFields.value = "litres";
series.dataFields.category = "country";
</script>