<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->

<!-- jQuery -->
<script src="<?php echo base_url().'plugins/jquery/jquery.min.js'?>"></script>
<!-- Bootstrap 4 -->
 <script src="<?php echo base_url().'plugins/bootstrap/js/bootstrap.bundle.min.js'?>"></script>
<!-- Select2 -->
<script src="<?php echo base_url().'plugins/select2/js/select2.full.min.js'?>"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?php echo base_url().'plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js'?>"></script>
<!-- InputMask -->
<script src="<?php echo base_url().'plugins/moment/moment.min.js'?>"></script>
<script src="<?php echo base_url().'plugins/inputmask/jquery.inputmask.min.js'?>"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url().'plugins/daterangepicker/daterangepicker.js'?>"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url().'plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js'?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url().'plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'?>"></script>
<!-- Bootstrap Switch -->
<script src="<?php echo base_url().'plugins/bootstrap-switch/js/bootstrap-switch.min.js'?>"></script>
<!-- BS-Stepper -->
<script src="<?php echo base_url().'plugins/bs-stepper/js/bs-stepper.min.js'?>"></script>
<!-- dropzonejs -->
<script src="<?php echo base_url().'plugins/dropzone/min/dropzone.min.js'?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'dist/js/adminlte.min.js'?>"></script>

<script src="<?php echo base_url().'plugins/jquery/jquery.min.js'?>"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url().'dist/js/demo.js'?>"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))

  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>
</body>
</html>
