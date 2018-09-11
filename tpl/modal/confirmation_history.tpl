<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times;</span>
            <h2>Votre message a bien été envoyé</h2>
        </div>
        <div class="modal-body">
            <p>Un mail est envoyé à l'hôte incluant votre message.</p>
            <p>Pour plus d'information n'hésitez pas à nous joindre par téléphone.</p>
        </div>
    </div>
</div>

<script>
    const modal = document.getElementById('myModal');
    const span = document.getElementsByClassName("close")[0];

    span.onclick = () => {
        modal.style.display = "none";
    };

    window.onclick = (event) => {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };
</script>

<script>document.getElementById('myModal').style.display = "block";</script>