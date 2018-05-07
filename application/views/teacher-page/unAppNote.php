<section class="content">
    <div class="container-fluid">
    

        <form id="myfrom" method="GET" action="<?php echo(base_url('Project-COOP/teacher_con/unApproveStudent')); ?>">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="body">
                        <div id="wizard_horizontal">
                            <h2>Note</h2>
                            <section>
                                    <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">note</i> </span>
                                        <div class="form-line">
                                            <input class="form-control " type="text" name="Note" required>
                                            <input type="hidden" name="STD_ID" value="<?php echo $_GET['STD_ID']; ?>">
                                            <input type="hidden" name="comID" value="<?php echo $_GET['comID']; ?>">
                                            <input type="hidden" name="posID" value="<?php echo $_GET['posID']; ?>">
                                            <input type="hidden" name="type" value="<?php echo $_GET['type']; ?>">
                                        </div>
                                    </div>
                                
                          </section>

                        </div>
                    </div>
                </div>
            </div>
        </div>
      
         
          <table align='center'>
            <tr>
              <td>
                <a  class="btn  g-bg-blue" onclick="window.history.back()" name="button">back</a>
              </td>
              <td>
                 <button type="submit" id="unappButton" class="btn  btn-raised bg-red waves-effect">Unapprove</button>
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
   
</script>


























        


		
