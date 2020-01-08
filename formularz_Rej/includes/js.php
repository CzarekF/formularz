<script>
    function checkForm(nameSelect){
        console.log(nameSelect);
        if(nameSelect){
            rolSelected = document.getElementById("rol").value;
            if(rolSelected == nameSelect.value){
                document.getElementById("selection2").style.display = "block";
            }
            else {
                document.getElementById("selection2").style.display = "none";
            }
        } 
        else {
            documen.getElementById("selection2").style.display = "none";
        }
    }


    function rodoAccepted(box){
        if(box.checked){
            document.getElementById("send").disabled = false;
        } else {
            document.getElementById("send").disabled = true;
        }
    }
</script>