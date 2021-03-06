  <footer class="footer">
    <span class="text-right">
    Copyright <a target="_blank" href="#"><?php echo APP_NAME; echo " ".DATE('Y');  ?></a>
    </span>
    <span class="float-right">
    Powered by <a target="_blank" href="https://www.pikeadmin.com"><b>Pike Admin</b></a>
    </span>
  </footer>

</div>
<!-- END main -->

<script src="../styles/js/modernizr.min.js"></script>
<script src="../styles/js/jquery.min.js"></script>
<script src="../styles/js/moment.min.js"></script>
    
<script src="../styles/js/popper.min.js"></script>
<script src="../styles/js/bootstrap.min.js"></script>

<script src="../styles/js/detect.js"></script>
<script src="../styles/js/fastclick.js"></script>
<script src="../styles/js/jquery.blockUI.js"></script>
<script src="../styles/js/jquery.nicescroll.js"></script>

<!-- App js -->
<script src="../styles/js/pikeadmin.js"></script>

<!-- BEGIN Java Script for this page -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script> -->
  <script src="../styles/js/for_cdn/Chart.min.js"></script>
  <!-- <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script> -->
  <script src="../styles/js/for_cdn/jquery.dataTables.min.js"></script>
  <!-- <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script> -->
  <script src="../styles/js/for_cdn/dataTables.bootstrap4.min.js"></script>

  <!-- Counter-Up-->
  <script src="../styles/js/waypoints/lib/jquery.waypoints.min.js"></script>
  <script src="../styles/js/counterup/jquery.counterup.min.js"></script>      

  <script>
    $(document).ready(function() {
      // data-tables
      $('#example1').DataTable();
          
      // counter-up
      $('.counter').counterUp({
        delay: 10,
        time: 600
      });
    } );    
  </script>
  
  <script>
  var ctx1 = document.getElementById("lineChart").getContext('2d');
  var lineChart = new Chart(ctx1, {
    type: 'bar',
    data: {
      labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      datasets: [{
          label: 'Done Jobs',
          backgroundColor: '#3EB9DC',
          data: [10, 14, 6, 7, 13, 9, 13, 16, 11, 8, 12, 9] 
        }, {
          label: 'Vacancies',
          backgroundColor: '#EBEFF3',
          data: [12, 14, 6, 7, 13, 6, 13, 16, 10, 8, 11, 12]
        }]
        
    },
    options: {
            tooltips: {
              mode: 'index',
              intersect: false
            },
            responsive: true,
            scales: {
              xAxes: [{
                stacked: true,
              }],
              yAxes: [{
                stacked: true
              }]
            }
          }
  });


  var ctx2 = document.getElementById("pieChart").getContext('2d');
  var pieChart = new Chart(ctx2, {
    type: 'pie',
    data: {
        datasets: [{
          data: [12, 19, 3, 5, 2, 3],
          backgroundColor: [
            'rgba(255,99,132,1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
          ],
          label: 'Dataset 1'
        }],
        labels: [
          "Red",
          "Orange",
          "Yellow",
          "Green",
          "Blue"
        ]
      },
      options: {
        responsive: true
      }
   
  });


  var ctx3 = document.getElementById("doughnutChart").getContext('2d');
  var doughnutChart = new Chart(ctx3, {
    type: 'doughnut',
    data: {
        datasets: [{
          data: [12, 19, 3, 5, 2, 3],
          backgroundColor: [
            'rgba(255,99,132,1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
          ],
          label: 'Dataset 1'
        }],
        labels: [
          "Red",
          "Orange",
          "Yellow",
          "Green",
          "Blue"
        ]
      },
      options: {
        responsive: true
      }
   
  });
  </script>
<!-- END Java Script for this page -->

</body>
</html>