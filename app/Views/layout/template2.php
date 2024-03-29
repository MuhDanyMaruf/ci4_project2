<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <title>Shoju</title>
    <link href="<?= base_url('css/styles2.css') ?>" rel="stylesheet" />
</head>

<body>




    <div>
        <?php if (in_groups('admin')) : ?>

            <div>
                <div>
                    <?= $this->include('layout_admin/template') ?>
                </div>
                <div>
                    <?= $this->renderSection('admin'); ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if (in_groups('user')) : ?>

            <div>
                <?= $this->include('layout/navbar') ?>
            </div>

            <div>
                <?= $this->renderSection('menu'); ?>
            </div>


        <?php endif; ?>
        <footer>
            <?= $this->include('layout/footer') ?>
        </footer>
    </div>







    <script>
        function goBack() {
            window.history.back();
        }
    </script>

    <script src="path/to/bootstrap.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        const toggleModal = () => document.body.classList.toggle("open");
    </script>
    <script>
        function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
        }
    </script>
    <script>
        $('.toggle').click(function() {
            $(this).toggleClass('on');
            $('.filter').slideToggle();
        });
    </script>
    <script>
        function filterItems(category) {
            console.log("Selected Category: " + category);
        }

        function filterItemsBySize(size) {
            console.log("Selected Size: " + size);
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url('js/scripts.js') ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/demo/chart-area-demo.js') ?>"></script>
    <script src="<?= base_url('assets/demo/chart-bar-demo.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="<?= base_url('js/datatables-simple-demo.js') ?>"></script>


    <?= $this->renderSection('script'); ?>
    <script>

    </script>


</body>



</html>