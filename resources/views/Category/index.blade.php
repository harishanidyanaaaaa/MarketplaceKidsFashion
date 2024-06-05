<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Data Category</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="{{ url('') }}/template/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ url('') }}/template/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ url('') }}/template/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ url('') }}/template/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ url('') }}/template/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{ url('') }}/template/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
@include('Layout.side')
       
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          @include('Layout.nav')
          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
             @include('Layout.info')
              <div class="row">
                <!-- Order Statistics -->
               
                <!--/ Order Statistics -->

                <!-- Expense Overview -->
               
                <!--/ Expense Overview -->

                <!-- Transactions -->
                <div class="col-md-12 col-lg-12 order-2 mb-12">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="card-title m-0 me-2">Transactions</h5>
                     
                    </div>
                    <div class="card-body">
                        Jika Ingin tambah data <a href="" type="button"
                    data-bs-toggle="modal"
                    data-bs-target="#modalId">klik Di Sini</a>
                            <div class="table-responsive">
                               
                <!-- Modal -->
                <div
                    class="modal fade"
                    id="modalId"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="modalTitleId"
                    aria-hidden="true"
                >
                  <form action="{{ route('Category-Store') }}" role="form" method="post">
                        @csrf
                        <div
                        class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                        role="document"
                    >
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalTitleId">
                                   Tambah Data
                                </h5>
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"
                                ></button>
                            </div>
                            <div class="modal-body">
                               
                                <div class="mb-3">
                                    <label for="inputData" class="form-label">Nama Kategori</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="inputData"
                                        name="nama_kategori"
                                        placeholder="Nama Kategori"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="inputData" class="form-label">Deskripsi</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="inputData"
                                        name="deskripsi"
                                        placeholder="Deskripsi"
                                    />
                                </div>
               
                            </div>
                            <div class="modal-footer">
                                <button
                                    type="submit"
                                    class="btn btn-secondary"
                                    data-bs-dismiss="modal"
                                >
                                    Close
                                </button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                
                <script>
                    var modalId = document.getElementById('modalId');
                
                    modalId.addEventListener('show.bs.modal', function (event) {
                          // Button that triggered the modal
                          let button = event.relatedTarget;
                          // Extract info from data-bs-* attributes
                          let recipient = button.getAttribute('data-bs-whatever');
                
                        // Use above variables to manipulate the DOM
                    });
                </script>
                        <div class="d-flex ">
                            <i data-feather="download"></i>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-0">
                        <div class="table-responsive">
                            <table class='table mb-0' id="table1">
                                <thead>
                                    <tr>
                                      <th scope="col">No</th>
                                    <th scope="col">Nama Kategori</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php ($counter = 1) @foreach ($category as $c)
                                
                                <tr>
                                    <td>{{ $counter }}</td> 
                                    <td>{{ $c->nama_kategori }}</td>
                                    <td>{{ $c->deskripsi }}</td>
                                    <td>
                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal{{$c->id}}">Edit</button> <div class="modal fade" id="editModal{{$c->id}}" tabindex="-1" aria-labelledby="editModal{{$c->id}}Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModal{{$c->id}}Label">Edit Kategori</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form for editing data -->
                    <form action="{{ url('Category-Update/'.$c->id) }}" method="POST">
    @csrf
    @method('PUT')
                        <div class="mb-3">
                       
                            <input type="text" class="form-control" id="editUser{{$c->nama_kategori}}" name="nama_kategori" value="{{$c->nama_kategori}}" >
                        </div>
                        <div class="mb-3">
                  
                            <input type="text" class="form-control" id="editEmail{{$c->deskripsi}}" name="deskripsi" value="{{$c->deskripsi}}" >
                        </div>
                   
                            
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
                                       <a href="{{ route('Category-Delete', $c->id) }}"class="btn btn-danger delete-btn"
       onclick="event.preventDefault();
                if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                    document.getElementById('delete-form-{{$c->id}}').submit();
                }">
        Hapus
    </a>

    <form id="delete-form-{{$c->id}}" action="{{ route('Category-Delete', $c->id) }}" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>
                                    </td>
                                </tr>
                               
                              @php ($counter++) @endforeach
                                </tbody>
                            </table>
                    </div>
                  </div>
                </div>
                <!--/ Transactions -->
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>
@include('Layout.footer')
      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="{{ url('') }}/template/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="{{ url('') }}/template/assets/vendor/libs/popper/popper.js"></script>
    <script src="{{ url('') }}/template/assets/vendor/js/bootstrap.js"></script>
    <script src="{{ url('') }}/template/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{ url('') }}/template/assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ url('') }}/template/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="{{ url('') }}/template/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="{{ url('') }}/template/assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
