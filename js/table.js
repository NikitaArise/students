
function funcSuccess(data){
   
    console.log(data);
}
$(document).ready(function(){
    $(".arrow").bind("click", function(){
        let sortType = $(this).attr("sort");
        console.log(sortType);
        $.get(
            "../public/studentList.php",
            {jsort : sortType},
            function(data){
                data = JSON.parse(data);

                $(".content-table tbody").empty();
                i = 1;
                for (i = 0; i < data.length; ++i){
                    $(".content-table tbody").append(
                        $("<tr>"+ 
                            "<td>" +  (i + 1)  + "</td>" +
                            "<td>" +  data[i].name + "</td>" +
                            "<td>" +  data[i].lastname +  "</td>" +
                            "<td>" +  data[i].gender +  "</td>" +
                            "<td>" +  data[i].group_ +  "</td>" +
                            "<td>" +  data[i].useResult +  "</td>" +
                            "<td>" +  data[i].birthYear +  "</td>" +
                            "<td>" +  data[i].email + "</td>" +
                        "</tr>"));
                }

            }
        );
    });
});

