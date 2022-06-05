<?php include 'db.php' ?>
<?php
if (isset($_GET['id'])) {
    $qry = $conn->query("SELECT * FROM new where id= " . $_GET['id']);
    foreach ($qry->fetch_array() as $k => $val) {
        $$k = $val;
    }
}
?>
<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("location:index.php");
}
?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ADMIN </title>

    <link href="assets/css/bootstrap.css" rel="stylesheet" />

    <link href="assets/css/font-awesome.css" rel="stylesheet" />

    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />

    <link href="assets/css/custom-styles.css" rel="stylesheet" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php"> <?php echo $_SESSION["user"]; ?> </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> THÔNG TIN NGƯỜI DÙNG</a>
                        </li>
                        <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> CÀI ĐẶT</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> ĐĂNG XUẤT</a>
                        </li>
                    </ul>

                </li>

            </ul>
        </nav>

        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="home.php"><i class="fa fa-dashboard"></i> TÌNH TRẠNG</a>
                    </li>
                    <li>
                        <a href="messages.php"><i class="fa fa-desktop"></i> TIN TỨC</a>
                    </li>
                    <li>
                        <a href="roombook.php"><i class="fa fa-bar-chart-o"></i>PHÒNG KHÁCH ĐẶT</a>
                    </li>
                    <li>
                        <a href="payment.php"><i class="fa fa-qrcode"></i> THANH TOÁN</a>

                    </li>
                    <li>
                        <a href="TT.php"><i class="fa fa-qrcode"></i> THÊM THÔNG BÁO</a>
                    </li>
                    <li>
                        <a href="profit.php"><i class="fa fa-qrcode"></i> THỐNG KÊ</a>
                    </li>
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> ĐĂNG XUẤT</a>
                    </li>




                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Thêm <small>Tin Tức </small>
                        </h1>
                    </div>
                </div>

                <?php include('db.php'); ?>

                <style>
                    .jqte_editor {
                        min-height: 30vh !important
                    }

                    #drop {
                        min-height: 15vh;
                        max-height: 30vh;
                        overflow: auto;
                        width: calc(100%);
                        border: 5px solid #929292;
                        margin: 10px;
                        border-style: dashed;
                        padding: 10px;
                        display: flex;
                        align-items: center;
                        flex-wrap: wrap;
                    }

                    #uploads {
                        min-height: 15vh;
                        width: calc(100%);
                        margin: 10px;
                        padding: 10px;
                        display: flex;
                        align-items: center;
                        flex-wrap: wrap;
                    }

                    #uploads .img-holder {
                        position: relative;
                        margin: 1em;
                        cursor: pointer;
                    }

                    #uploads .img-holder:hover {
                        background: #0095ff1f;
                    }

                    #uploads .img-holder .form-check {
                        display: none;
                    }

                    #uploads .img-holder.checked .form-check {
                        display: block;
                    }

                    #uploads .img-holder.checked {
                        background: #0095ff1f;
                    }

                    #uploads .img-holder img {
                        height: 39vh;
                        width: 22vw;
                        margin: .5em;
                    }

                    #uploads .img-holder span {
                        position: absolute;
                        top: -.5em;
                        left: -.5em;
                    }

                    #dname {
                        margin: auto
                    }

                    img.imgDropped {
                        height: 16vh;
                        width: 7vw;
                        margin: 1em;
                    }

                    .imgF {
                        border: 1px solid #0000ffa1;
                        border-style: dashed;
                        position: relative;
                        margin: 1em;
                    }

                    span.rem.badge.badge-primary {
                        position: absolute;
                        top: -.5em;
                        left: -.5em;
                        cursor: pointer;
                    }

                    label[for="chooseFile"] {
                        color: #0000ff94;
                        cursor: pointer;
                    }

                    label[for="chooseFile"]:hover {
                        color: #0000ffba;
                    }

                    .opts {
                        position: absolute;
                        top: 0;
                        right: 0;
                        background: #00000094;
                        width: calc(100%);
                        height: calc(100%);
                        justify-items: center;
                        display: flex;
                        opacity: 0;
                        transition: all .5s ease;
                    }

                    .img-holder:hover .opts {
                        opacity: 1;

                    }

                    button.btn.btn-sm.btn-rounded.btn-sm.btn-dark {
                        margin: auto;
                    }
                </style>
                <div class="container-fluid">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="post">
                                    <div class="form-group row">
                                        <div class="col-md-5">
                                            Tiêu Đề:
                                            <input type="text" name="fname" class="form-control"  required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-5">
                                            Nội Dung:<br>
                                            <input type="text" name="noidung" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-5">

                                            Thông Báo:
                                            <textarea name="thongtin" class="form-control" value="NO" placeholder="Nhập nội dung *" style="width: 100%; height: 150px;" required=""></textarea>
                                           
                                        </div>
                                    </div>

                                    <input type="submit" name="save" value="submit">
                                </form>



                            </div>
                            <?php
                            include('db.php');
                            if (isset($_POST['save'])) {
                                $fname = $_POST['fname'];
                                $noidung = $_POST['noidung'];
                                $thongtin = $_POST['thongtin'];
                             
                                $sql = "INSERT INTO new (fname,noidung,thongtin)
                                        VALUES ('$fname','$noidung','$thongtin')";
                                if (mysqli_query($con, $sql)) {
                                    echo   "<script type='text/javascript'> alert('Thêm Thông Tin Thành Công')</script>";
                                } else {
                                    echo "<script type='text/javascript'> alert('Thêm Thông Tin Thất Bại')</script>" . $sql . "
                                   " . mysqli_error($con);
                                }
                                mysqli_close($con);
                            }
                            ?>



                        </div>
                    </div>
                </div>
            </div>
            <div class="imgF" style="display: none " id="img-clone">
                <span class="rem badge badge-primary" onclick="rem_func($(this))"><i class="fa fa-times"></i></span>
            </div>
            <script>
                $('.jqte').jqte();

                $('#manage-venue').submit(function(e) {
                    e.preventDefault()
                    start_load()
                    $('#msg').html('')
                    $.ajax({
                        url: 'ajax.php?action=save_venue',
                        data: new FormData($(this)[0]),
                        cache: false,
                        contentType: false,
                        processData: false,
                        method: 'POST',
                        type: 'POST',
                        success: function(resp) {
                            if (resp == 1) {
                                alert_toast("Dữ liệu được lưu thành công", 'success')
                                setTimeout(function() {
                                    location.href = "index.php?page=venue"
                                }, 1500)

                            }

                        }
                    })
                })
                if (window.FileReader) {
                    var drop;
                    addEventHandler(window, 'load', function() {
                        var status = document.getElementById('status');
                        drop = document.getElementById('drop');
                        var dname = document.getElementById('dname');
                        var list = document.getElementById('list');

                        function cancel(e) {
                            if (e.preventDefault) {
                                e.preventDefault();
                            }
                            return false;
                        }

                        // Tells the browser that we *can* drop on this target
                        addEventHandler(drop, 'dragover', cancel);
                        addEventHandler(drop, 'dragenter', cancel);

                        addEventHandler(drop, 'drop', function(e) {
                            e = e || window.event; // get window.event if e argument missing (in IE)   
                            if (e.preventDefault) {
                                e.preventDefault();
                            } // stops the browser from redirecting off to the image.
                            $('#dname').remove();
                            var dt = e.dataTransfer;
                            var files = dt.files;
                            for (var i = 0; i < files.length; i++) {
                                var file = files[i];
                                var reader = new FileReader();

                                //attach event handlers here...

                                reader.readAsDataURL(file);
                                addEventHandler(reader, 'loadend', function(e, file) {
                                    var bin = this.result;
                                    var imgF = document.getElementById('img-clone');
                                    imgF = imgF.cloneNode(true);
                                    imgF.removeAttribute('id')
                                    imgF.removeAttribute('style')

                                    var img = document.createElement("img");
                                    var fileinput = document.createElement("input");
                                    var fileinputName = document.createElement("input");
                                    fileinput.setAttribute('type', 'hidden')
                                    fileinputName.setAttribute('type', 'hidden')
                                    fileinput.setAttribute('name', 'img[]')
                                    fileinputName.setAttribute('name', 'imgName[]')
                                    fileinput.value = bin
                                    fileinputName.value = file.name
                                    img.classList.add("imgDropped")
                                    img.file = file;
                                    img.src = bin;
                                    imgF.appendChild(fileinput);
                                    imgF.appendChild(fileinputName);
                                    imgF.appendChild(img);
                                    drop.appendChild(imgF)
                                }.bindToEventHandler(file));
                            }
                            return false;

                        });

                        Function.prototype.bindToEventHandler = function bindToEventHandler() {
                            var handler = this;
                            var boundParameters = Array.prototype.slice.call(arguments);
                            return function(e) {
                                e = e || window.event; // get window.event if e argument missing (in IE)   
                                boundParameters.unshift(e);
                                handler.apply(this, boundParameters);
                            }
                        };
                    });
                } else {
                    document.getElementById('status').innerHTML = 'Your browser does not support the HTML5 FileReader.';
                }

                function addEventHandler(obj, evt, handler) {
                    if (obj.addEventListener) {
                        // W3C method
                        obj.addEventListener(evt, handler, false);
                    } else if (obj.attachEvent) {
                        // IE method.
                        obj.attachEvent('on' + evt, handler);
                    } else {
                        // Old school method.
                        obj['on' + evt] = handler;
                    }
                }

                function displayIMG(input) {

                    if (input.files) {
                        if ($('#dname').length > 0)
                            $('#dname').remove();

                        Object.keys(input.files).map(function(k) {
                            var reader = new FileReader();
                            reader.onload = function(e) {
                                // $('#cimg').attr('src', e.target.result);
                                var bin = e.target.result;
                                var fname = input.files[k].name;
                                var imgF = document.getElementById('img-clone');
                                imgF = imgF.cloneNode(true);
                                imgF.removeAttribute('id')
                                imgF.removeAttribute('style')
                                var img = document.createElement("img");
                                var fileinput = document.createElement("input");
                                var fileinputName = document.createElement("input");
                                fileinput.setAttribute('type', 'hidden')
                                fileinputName.setAttribute('type', 'hidden')
                                fileinput.setAttribute('name', 'img[]')
                                fileinputName.setAttribute('name', 'imgName[]')
                                fileinput.value = bin
                                fileinputName.value = fname
                                img.classList.add("imgDropped")
                                img.src = bin;
                                imgF.appendChild(fileinput);
                                imgF.appendChild(fileinputName);
                                imgF.appendChild(img);
                                drop.appendChild(imgF)
                            }
                            reader.readAsDataURL(input.files[k]);
                        })


                    }
                }

                function rem_func(_this) {
                    _this.closest('.imgF').remove()
                    if ($('#drop .imgF').length <= 0) {
                        $('#drop').append('<span id="dname" class="text-center">Drop Files Here</span>')
                    }
                }
            </script>