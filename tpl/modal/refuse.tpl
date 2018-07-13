<div id="myModal2" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header2">
            <span class="close" id="close2">&times;</span>
            <h2>Votre réservation a été refusée</h2>
        </div>
        <div class="modal-body">
            <p>La dates que vous avez choisie ne sont pas disponible</p>
            <p>Veuillez recommencer et vérifier que vos dates ne sont pas déjà réservées et qu'elles sont
                réservables</p>
        </div>
    </div>
</div>

<script>
    const modal2 = document.getElementById('myModal2');
    const span2 = document.getElementsByClassName("close")[0];

    span2.onclick = () => {
        modal2.style.display = "none";
    };

    window.onclick = (event) => {
        if (event.target === modal2) {
            modal2.style.display = "none";
        }
    };
</script>

<script>document.getElementById('myModal2').style.display = "block";</script>