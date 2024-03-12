<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
 
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Number</th>
        <th>Action</th>
        </thead>
        <tbody id="load-table"></tbody>
    </table>   
</div>
</div>
</body>
<script type="text/javascript" src="./jquery.js"></script>
<script  type="text/javascript">
    $(document).ready(function(){
        function load(){
            $.ajax({
                url : 'http://localhost/prectice/php/api/apiexplain/createall.php',
                type : "GET",
                success : function(data){
                    // console.log(data);
                    if(data.status==false){
                      $("#load-table").append("<tr><td colspan='6'><h2>"+ data.message +"</h2></td></tr>");
                    }else{
                         $.each(data,function(key,value){
                            $("#load-table").append("<tr>"+
                            "<td>"+ value.Id +"</td>"+
                            "<td>"+ value.NAME +"</td>"+
                            "<td>"+ value.EMAIL +"</td>"+
                            "<td>"+ value.PSD +"</td>"+
                            "<td>"+ value.PHNUM +"</td>"+
                            "<td> <a data-eid='"+ value.Id +"'>Edit</a> </td>"+
                            "<td> <a data-eid='"+ value.Id +"'>Delete</a> </td>"+
                            "</tr>");
                            

                         });
                    }
                }
            });

        }
      load();

    });
</script>
<!-- fetch all -->
</html>
