<div id="myModal2" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header2">
            <span class="close" id="close2">&times;</span>
            <h2>L'envoie de votre message a échoué</h2>
        </div>
        <div class="modal-body">
            <p>Erreur, l'envoie de votre message n'a pu aboutir.</p>
            <p>Veuillez recommencer et vérifier que vos fichiers vérifies les limites de poids. Si le problème
                persiste veuillez nous contacter.</p>
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