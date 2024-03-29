<?php $current_path = $_SERVER['PHP_SELF'];

?>
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <?php
                if (strpos($current_path, '/views/index.php') !== false) {
                    echo '<h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Good Morning Jason!</h3>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a>
                                </li>
                            </ol>
                        </nav>
                    </div>';
                } elseif (strpos($current_path, '/views/chat.php') !== false) {
                    echo '<h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Chat</h4>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item text-muted active" aria-current="page">Apps</li>
                                <li class="breadcrumb-item text-muted" aria-current="page">Chat</li>
                            </ol>
                        </nav>
                    </div>';
                }
                ?>
                
            </div>
            <div class="col-5 align-self-center">
                <div class="customize-input float-end">
                    <select
                        class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                        <option selected>Aug 23</option>
                        <option value="1">July 23</option>
                        <option value="2">Jun 23</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->