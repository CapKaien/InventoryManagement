<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sidebar 03</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="sidebar/css/sidebar.css">
    <style>
        /* Adjustments for the sidebar and navbar alignment */
        .wrapper {
            display: flex;
        }

        #sidebar {
            flex: 0 0 250px;
        }

        /* Sticky navbar styles */
        .sticky-top {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
        }

        #content {
            background-color: #f8ffed;
        }

        .navbar-brand {
            margin-right: auto;
        }

        .navbar {
            background-color: #B01041 !important;
        }

        .btn-outline-success {
            color: #f8ffed;
            border-color: white;
        }

        .col-header {
            font-size: 18px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top mb-0">
        <div class="container-fluid">
            <h1 class="navbar-brand mb-0 text-white">Inventory</h1>
            <div class="d-flex">
                <form class="d-flex me-3">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success text-white " type="submit">Search</button>

                </form>
            </div>
        </div>
    </nav>

    <div class="wrapper d-flex align-items-stretch">
        <!-- Sidebar -->
        <nav id="sidebar" class="active">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">Toggle Menu</span>
                </button>
            </div>
            <div class="p-4">
                <ul class="list-unstyled components mb-5">
                    <li class="active">
                        <a href="#" id="dashboard-link"><span class="fa fa-dashboard mr-3"></span> Dashboard</a>
                    </li>
                    <li>
                        <a href="#" id="user-management-link"><span class="fa fa-user mr-3"></span> User Management</a>
                    </li>
                    <li>
                        <a href="#" id="products-link"><span class="fa fa-cube mr-3"></span> Products</a>
                    </li>
                    <li>
                        <a href="#" id="inventory-link"><span class="fa fa-archive mr-3"></span> Inventory</a>
                    </li>
                    <li>
                        <a href="#" id="sales-report-link"><span class="fa fa-line-chart mr-3"></span> Sales Report</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5 ml-3">

            <div id="dashboard-content">
                <!-- Content of the Dashboard section -->
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="bg-primary text-white p-3 rounded" style="height: 100px;">
                            Total Sales
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="bg-secondary text-white p-3 rounded" style="height: 100px;">
                            Total Purchase
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="bg-info text-white p-3 rounded" style="height: 100px;">
                            Remaining Stocks
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-6 mb-4">

                        <div class="p-3 fs-5 rounded" style="background-color:#FBF6EA; font-weight: 500; color:#212427; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                            <div class="p-3">
                                Prodouct Stock Alert
                            </div>
                            <div class="row mb-2 text-center">
                                <div class="col col-header">#</div>
                                <div class="col col-header">ID</div>
                                <div class="col col-header">Name</div>
                                <div class="col col-header">Quantity</div>
                            </div>
                            <!-- Black line -->
                            <hr style="border-top: 1px solid black;">
                            <!-- Example row -->
                            <div class="row mb-2 text-center" style="font-size: 14px;">
                                <div class="col">1</div>
                                <div class="col">ABC123</div>
                                <div class="col">Product 1</div>
                                <div class="col">10</div>
                            </div>
                            <!-- Black line -->
                            <hr style="border-top: 1px solid black;">
                            <!-- Example row -->
                            <div class="row mb-2 text-center" style="font-size: 14px;">
                                <div class="col">2</div>
                                <div class="col">ABC456</div>
                                <div class="col">Product 2</div>
                                <div class="col">20</div>
                            </div>
                            <!-- Black line -->
                            <hr style="border-top: 1px solid black;">
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="p-3 fs-5 rounded" style="background-color:#FBF6EA; font-weight: 500; color:#212427; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                            <div class="p-3">
                                Stock Alert
                            </div>
                            <div class="row mb-2 text-center">
                                <div class="col col-header">#</div>
                                <div class="col col-header">ID</div>
                                <div class="col col-header">Name</div>
                                <div class="col col-header">Quantity</div>
                            </div>
                            <!-- Black line -->
                            <hr style="border-top: 1px solid black;">
                            <!-- Example row -->
                            <div class="row mb-2 text-center" style="font-size: 14px;">
                                <div class="col">1</div>
                                <div class="col">ABC123</div>
                                <div class="col">Product 1</div>
                                <div class="col">10</div>
                            </div>
                            <!-- Black line -->
                            <hr style="border-top: 1px solid black;">
                            <!-- Example row -->
                            <div class="row mb-2 text-center" style="font-size: 14px;">
                                <div class="col">2</div>
                                <div class="col">ABC456</div>
                                <div class="col">Product 2</div>
                                <div class="col">20</div>
                            </div>
                            <!-- Black line -->
                            <hr style="border-top: 1px solid black;">
                        </div>
                    </div>
                </div>
            </div>

            <div id="user-management-content" style="display: none;">
                <div id="dashboard-content">
                    <!-- Content of the User Management section -->
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="bg-info text-white p-3 rounded" style="height: 100px;">
                                Total Sales
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="bg-primary text-white p-3 rounded" style="height: 100px;">
                                Total Purchase
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="bg-secondary text-white p-3 rounded" style="height: 100px;">
                                Remaining Stocks
                            </div>
                        </div>
                    </div>
                </div>
                <p>Content of the User Management section...</p>
            </div>

            <div id="products-content" style="display: none;">
                <!-- Content of the Inventory section -->
                <p>Content of the Products section...</p>
            </div>

            <div id="inventory-content" style="display: none;">
                <!-- Content of the Inventory section -->
                <p>Content of the Inventory section...</p>
            </div>

            <div id="sales-report-content" style="display: none;">
                <!-- Content of the Inventory section -->
                <p>Content of the Sales Report section...</p>
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="sidebar/sidebar-js/sidebar.js"></script>


    <script>
        //Nothing here
    </script>
</body>


</html>