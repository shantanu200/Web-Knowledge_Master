document.getElementById('button').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "flex";
});

document.querySelector('.close').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "none";
});

function search(){
    window.location.href = "t_data.php";
}

var update = function(id){
    swal("Enter student New Score : ", {content:"input"})
    .then((score)=>{
        $.ajax({
            type:"POST",
            url:"t_edit.php",
            data:{gid:id,nscore:score},
            success:function(){
                swal("Student score is updated to "+score);
            }
        });
    });
}