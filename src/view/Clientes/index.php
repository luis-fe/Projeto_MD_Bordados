<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MD - BORDADO E REVISAO</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link href="styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
    <?php include '../../../MenuSuspenso.php'; ?>
    <div id="layoutSidenav">
        <?php include '../../../MenuLateral.php'; ?>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">CLIENTES</h1>
                </div>

                <table class="table align-middle mb-0 bg-white">
                    <thead class="bg-light">
                        <tr>
                        <th>Name</th>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Position</th>
                        <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>
                            <div class="d-flex align-items-center">
                            <img
                                src="https://mdbootstrap.com/img/new/avatars/8.jpg"
                                alt=""
                                style="width: 45px; height: 45px"
                                class="rounded-circle"
                                />
                            <div class="ms-3">
                                <p class="fw-bold mb-1">John Doe</p>
                                <p class="text-muted mb-0">john.doe@gmail.com</p>
                            </div>
                            </div>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">Software engineer</p>
                            <p class="text-muted mb-0">IT department</p>
                        </td>
                        <td>
                            <span class="badge badge-success rounded-pill d-inline">Active</span>
                        </td>
                        <td>Senior</td>
                        <td>
                            <button type="button" class="btn btn-link btn-sm btn-rounded">
                            Edit
                            </button>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <div class="d-flex align-items-center">
                            <img
                                src="https://mdbootstrap.com/img/new/avatars/6.jpg"
                                class="rounded-circle"
                                alt=""
                                style="width: 45px; height: 45px"
                                />
                            <div class="ms-3">
                                <p class="fw-bold mb-1">Alex Ray</p>
                                <p class="text-muted mb-0">alex.ray@gmail.com</p>
                            </div>
                            </div>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">Consultant</p>
                            <p class="text-muted mb-0">Finance</p>
                        </td>
                        <td>
                            <span class="badge badge-primary rounded-pill d-inline"
                                >Onboarding</span
                            >
                        </td>
                        <td>Junior</td>
                        <td>
                            <button
                                    type="button"
                                    class="btn btn-link btn-rounded btn-sm fw-bold"
                                    data-mdb-ripple-color="dark"
                                    >
                            Edit
                            </button>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <div class="d-flex align-items-center">
                            <img
                                src="https://mdbootstrap.com/img/new/avatars/7.jpg"
                                class="rounded-circle"
                                alt=""
                                style="width: 45px; height: 45px"
                                />
                            <div class="ms-3">
                                <p class="fw-bold mb-1">Kate Hunington</p>
                                <p class="text-muted mb-0">kate.hunington@gmail.com</p>
                            </div>
                            </div>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">Designer</p>
                            <p class="text-muted mb-0">UI/UX</p>
                        </td>
                        <td>
                            <span class="badge badge-warning rounded-pill d-inline">Awaiting</span>
                        </td>
                        <td>Senior</td>
                        <td>
                            <button
                                    type="button"
                                    class="btn btn-link btn-rounded btn-sm fw-bold"
                                    data-mdb-ripple-color="dark"
                                    >
                            Edit
                            </button>
                        </td>
                        </tr>
                    </tbody>
                </table>



            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="/view/assets/demo/chart-area-demo.js"></script>
    <script src="/view/assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>

    
</body>
</html>