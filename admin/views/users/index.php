<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">User Details</h2>
                        <a href="create.php" class="btn btn-success pull-right">Create New User</a>
                    </div>
                    <table class='table table-bordered table-striped'>
                                <thead>
                                    <tr>
                                        <th>UserID</th>
                                        <th>First Name</th>
                                        <th>last Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                               <?php foreach($users as $user) { ?>
                                    <tr>
                                        <td> <?php echo "$user->username <br>" ?></td>
                                        <td> <?php echo "$user->firstname <br>" ?> </td>
                                        <td> <?php echo "$user->lastName <br>" ?> </td>
                                        <td>
                                            <a href='read.php?id=". $row['UserID'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>
                                            <a href='update.php?id=". $row['UserID'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>
                                            <a href='delete.php?id=". $row['UserID'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>
                                        </td>
                                    </tr>
                                <?php } ?> 
                                </tbody>                           
                            </table>
                </div>
            </div>        
        </div>
    </div>
