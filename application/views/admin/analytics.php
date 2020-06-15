<div class="content-page">
    <div class="content">

        <!-- Topbar Start -->
        <?php require_once 'partials/topbar.php';?>
        <!-- end Topbar -->

        <!-- Start Content-->
        <div class="container-fluid">
            
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Analytics</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <!-- Contents -->
            <h3><?= date('F') ?> Stats</h3>
            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="panel panel-default">
                                <div class="panel-heading"><h4><?= $transactioncount ?></h4> No of Products Sold</div>
                            </div>
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="panel panel-default">
                                <div class="panel-heading"><h4>₦<?= number_format($transactionSum) ?></h4> Total Amount of Transactions</div>
                            </div>
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="panel panel-default">
                                <div class="panel-heading">Top 5 Selling Products</div>
                                <div class="panel-body" style="padding:10px">
                                    <canvas id="product_revenue"></canvas>
                                </div>
                            </div>
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="panel panel-default">
                                <div class="panel-heading">Top 5 customers by number of transactions</div>
                                <div class="panel-body" style="padding:10px">
                                    <canvas id="customer_revenue"></canvas>
                                </div>
                            </div>
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="panel panel-default">
                                <div class="panel-heading">Top 5 customers based on the amount spent</div>
                                <div class="panel-body" style="padding:10px">
                                    <canvas id="buyer_revenue"></canvas>
                                </div>
                            </div>
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            
            <!-- Contents -->
            <h3><?= date('Y') ?> Stats</h3>
            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="panel panel-default">
                                <div class="panel-heading"><h4><?= $yeartransactioncount ?></h4> No of Products Sold</div>
                            </div>
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="panel panel-default">
                                <div class="panel-heading"><h4>₦<?= number_format($yeartransactionSum) ?></h4> Total Amount of Transactions</div>
                            </div>
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="panel panel-default">
                                <div class="panel-heading">Top 5 Selling Products</div>
                                <div class="panel-body" style="padding:10px">
                                    <canvas id="yearproduct_revenue"></canvas>
                                </div>
                            </div>
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="panel panel-default">
                                <div class="panel-heading">Top 5 customers by number of transactions</div>
                                <div class="panel-body" style="padding:10px">
                                    <canvas id="yearcustomer_revenue"></canvas>
                                </div>
                            </div>
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="panel panel-default">
                                <div class="panel-heading">Top 5 customers based on the amount spent</div>
                                <div class="panel-body" style="padding:10px">
                                    <canvas id="yearbuyer_revenue"></canvas>
                                </div>
                            </div>
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            
        </div> <!-- container -->

    </div> <!-- content -->


<script src="<?= base_url('assets/admin/js/Chart.min.js') ?>"></script>
<script>
    var customer_revenueid = document.getElementById("customer_revenue").getContext('2d');
    var customer_revenue = new Chart(customer_revenueid, {
        type: 'pie',
        data: {
            labels: <?= json_encode($topfiveVisit['name']) ?>,
            datasets: [{
                label: 'Revenue from Transactions',
                data: <?= json_encode($topfiveVisit['value']) ?>,
                backgroundColor: [
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(75, 192, 192, 1)',                  
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
    var buyer_revenueid = document.getElementById("buyer_revenue").getContext('2d');
    var buyer_revenue = new Chart(buyer_revenueid, {
        type: 'pie',
        data: {
            labels: <?= json_encode($topfiveSpent['name']) ?>,
            datasets: [{
                label: 'Revenue from Transactions',
                data: <?= json_encode($topfiveSpent['value']) ?>,
                backgroundColor: [
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(75, 192, 192, 1)',                  
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
    var product_revenueid = document.getElementById("product_revenue").getContext('2d');
    var product_revenue = new Chart(product_revenueid, {
        type: 'pie',
        data: {
            labels: <?= json_encode($topfiveProducts['name']) ?>,
            datasets: [{
                label: 'Revenue from Transactions',
                data: <?= json_encode($topfiveProducts['value']) ?>,
                backgroundColor: [
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(75, 192, 192, 1)',                  
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });

    // Year stats
    var yearcustomer_revenueid = document.getElementById("yearcustomer_revenue").getContext('2d');
    var yearcustomer_revenue = new Chart(yearcustomer_revenueid, {
        type: 'pie',
        data: {
            labels: <?= json_encode($yeartopfiveVisit['name']) ?>,
            datasets: [{
                label: 'Revenue from Transactions',
                data: <?= json_encode($yeartopfiveVisit['value']) ?>,
                backgroundColor: [
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(75, 192, 192, 1)',                  
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
    var yearbuyer_revenueid = document.getElementById("yearbuyer_revenue").getContext('2d');
    var yearbuyer_revenue = new Chart(yearbuyer_revenueid, {
        type: 'pie',
        data: {
            labels: <?= json_encode($yeartopfiveSpent['name']) ?>,
            datasets: [{
                label: 'Revenue from Transactions',
                data: <?= json_encode($yeartopfiveSpent['value']) ?>,
                backgroundColor: [
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(75, 192, 192, 1)',                  
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
    var yearproduct_revenueid = document.getElementById("yearproduct_revenue").getContext('2d');
    var yearproduct_revenue = new Chart(yearproduct_revenueid, {
        type: 'pie',
        data: {
            labels: <?= json_encode($yeartopfiveProducts['name']) ?>,
            datasets: [{
                label: 'Revenue from Transactions',
                data: <?= json_encode($yeartopfiveProducts['value']) ?>,
                backgroundColor: [
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(75, 192, 192, 1)',                  
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>