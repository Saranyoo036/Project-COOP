<section class="content">
    <div class="container-fluid">
      <?php print_r($responsedata); ?>

        <!-- Basic Example | Horizontal Layout -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>BASIC EXAMPLE - HORIZONTAL LAYOUT</h2>

                    </div>
                    <div class="body">
                        <div id="wizard_horizontal">
                            <h2>About Organization</h2>
                            <section>
                              <div class="col-md-6"> <b>Name</b>
                                    <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">computer</i> </span>
                                        <div class="form-line">
                                            <input class="form-control " type="text" value=<?php echo $responsedata[0]['company_name']; ?> disabled>
                                        </div>
                                    </div>
                                </div>
                                <b>Address</b>
                                <div class="form-group ">
                                  <div class="form-line">
                                    <input class="form-control" name="username" required="" type="text" value=<?php echo $responsedata[0]['address']; ?>>

                                    </div>
                                  </div>
                                  <?php echo $responsedata[0]['address']; ?>
                            </section>
                            <h2>Contact</h2>
                            <section>
                                <p>Donec mi sapien, hendrerit nec egestas a, rutrum vitae dolor. Nullam venenatis diam ac
                                    ligula elementum pellentesque. In lobortis sollicitudin felis non eleifend. Morbi
                                    tristique tellus est, sed tempor elit. Morbi varius, nulla quis condimentum dictum,
                                    nisi elit condimentum magna, nec venenatis urna quam in nisi. Integer hendrerit sapien
                                    a diam adipiscing consectetur. In euismod augue ullamcorper leo dignissim quis elementum
                                    arcu porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum leo
                                    velit, blandit ac tempor nec, ultrices id diam. Donec metus lacus, rhoncus sagittis
                                    iaculis nec, malesuada a diam. Donec non pulvinar urna. Aliquam id velit lacus. </p>
                            </section>
                            <h2>Job description</h2>
                            <section>
                                <p> Morbi ornare tellus at elit ultrices id dignissim lorem elementum. Sed eget nisl at justo
                                    condimentum dapibus. Fusce eros justo, pellentesque non euismod ac, rutrum sed quam.
                                    Ut non mi tortor. Vestibulum eleifend varius ullamcorper. Aliquam erat volutpat.
                                    Donec diam massa, porta vel dictum sit amet, iaculis ac massa. Sed elementum dui
                                    commodo lectus sollicitudin in auctor mauris venenatis. </p>
                            </section>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Example | Horizontal Layout -->
        <form id="selectform" class="" action=<?php echo base_url("Project-COOP/STDPage/viewselectorganization/checkcompany") ?> method="post">
          <input type="hidden" name="companyid" value=<?php echo $responsedata[0]['company_id'] ?>>
          <table align='center'>
            <tr>
              <td>
                <button type="button" onclick="window.history.back()" name="button">back</button>
              </td>
              <td>
                <button type="button" name="button" onclick="$('#selectform').submit()">select company</button>
              </td>
            </tr>
          </table>

        </form>
    </div>
</section>
<!-- Jquery Core Js -->

</body>
</html>

<script type="text/javascript">

  function showprop() {

  }
</script>
