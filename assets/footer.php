
<footer>

    <section class="footerformulaire">
        <h2>Contact</h2>
                <p>Vous avez un projet ?</p>
                <p>Je serai ravi d'en discuter avec vous</p>

        <form action="/ma-page-de-traitement" method="post">
            <div>
                <label for="name">Nom et Prénom:</label>
                <input type="text" id="name" name="user_name" placeholder="Votre nom et prénom">
            </div>
            <div>
                <label for="name">Sujet:</label>
                <input type="text" id="sujet" name="sujet"  placeholder="L'objet de votre message">
            </div>
            <div>
                <label for="mail">e-mail</label>
                <input type="email" id="mail" name="email"  placeholder="Votre email">
            </div>
            <div>
                <label for="msg">Message :</label>
                <textarea id="msg" name="message" placeholder="Votre message"></textarea>
            </div>
            <button type="submit">Envoyer</button>
        </form>

    </section>
</footer>
