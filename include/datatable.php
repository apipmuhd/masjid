<?php
include('config/dblink.php');
include('config/function.php');
$result = display_data();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataTable - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/masjid/assets/css/bootstrap.css">

    <link rel="stylesheet" href="/masjid/assets/vendors/simple-datatables/style.css">

    <link rel="stylesheet" href="/masjid/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="/masjid/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/masjid/assets/css/app.css">
    <link rel="shortcut icon" href="/masjid/assets/images/favicon.svg" type="image/x-icon">
</head>
<?php include("sidebar.php"); ?>

<body>
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>DataTable</h3>
                        <p class="text-subtitle text-muted">For user to check they list</p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        Simple Datatable
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>Product Number</th>
                                    <th>Product Name</th>
                                    <th>Create date</th>
                                    <th>Update date</th>
                                    <th>Product status</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = mysqli_fetch_array($result)) { ?>
                                    <tr>
                                        <td><?php echo $row['ProductNum']; ?></td>
                                        <td><?php echo $row['ProductType']; ?></td>
                                        <td><?php echo $row['create_at']; ?></td>
                                        <td><?php echo $row['update_at']; ?></td>
                                        
                                    </tr>
                                <?php } ?>

                                </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

            </section>
        </div>

    </div>
    </div>
    <script src="/masjid/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/masjid/assets/js/bootstrap.bundle.min.js"></script>

    <script src="/masjid/assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

    <script src="/masjid/assets/js/main.js"></script>
</body>

</html>